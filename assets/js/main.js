document.addEventListener('DOMContentLoaded', function () {
  var navToggle = document.getElementById('navToggle');
  var mainNav = document.getElementById('mainNav');

  var backdrop = document.getElementById('navBackdrop');

  function setMenu(open) {
    mainNav.classList.toggle('open', open);
    navToggle.classList.toggle('open', open);
    navToggle.setAttribute('aria-expanded', open ? 'true' : 'false');
    document.body.style.overflow = open ? 'hidden' : '';
    if (backdrop) {
      if (open) {
        backdrop.hidden = false;
        requestAnimationFrame(function () { backdrop.classList.add('show'); });
      } else {
        backdrop.classList.remove('show');
        setTimeout(function () { if (!mainNav.classList.contains('open')) backdrop.hidden = true; }, 300);
      }
    }
  }

  if (navToggle && mainNav) {
    navToggle.addEventListener('click', function () {
      setMenu(!mainNav.classList.contains('open'));
    });
    mainNav.querySelectorAll('a').forEach(function (link) {
      link.addEventListener('click', function () { setMenu(false); });
    });
    if (backdrop) backdrop.addEventListener('click', function () { setMenu(false); });
    document.addEventListener('keydown', function (e) {
      if (e.key === 'Escape' && mainNav.classList.contains('open')) {
        setMenu(false);
        navToggle.focus();
      }
    });
    // Si se agranda la ventana con el menu abierto, se cierra para no dejar el scroll bloqueado
    window.addEventListener('resize', function () {
      if (window.innerWidth > 1100 && mainNav.classList.contains('open')) setMenu(false);
    });
  }

  // Header compacto al hacer scroll
  var header = document.querySelector('.site-header');
  if (header) {
    var updateHeader = function () { header.classList.toggle('is-scrolled', window.scrollY > 20); };
    window.addEventListener('scroll', updateHeader, { passive: true });
    updateHeader();
  }

  // Boton "volver arriba" del footer
  var toTop = document.getElementById('toTop');
  if (toTop) {
    toTop.addEventListener('click', function () {
      window.scrollTo({ top: 0, behavior: 'smooth' });
    });
  }

  var contactForm = document.querySelector('.contact-form');
  if (contactForm) {
    contactForm.addEventListener('submit', function (event) {
      var nombre = contactForm.querySelector('#nombre');
      var email = contactForm.querySelector('#email');
      var mensaje = contactForm.querySelector('#mensaje');

      if (!nombre.value.trim() || !email.value.trim() || !mensaje.value.trim()) {
        event.preventDefault();
        alert('Por favor completa los campos obligatorios.');
      }
    });
  }

  var revealTargets = document.querySelectorAll(
    '.grid-cards .card, .project-card, .price-card, .client-card, .cta, .contact-info, .contact-form'
  );
  if (revealTargets.length && 'IntersectionObserver' in window) {
    var observer = new IntersectionObserver(
      function (entries) {
        entries.forEach(function (entry) {
          if (entry.isIntersecting) {
            var target = entry.target;
            target.classList.add('in-view');
            observer.unobserve(target);
            // Quita el retraso escalonado para que el hover/inclinacion responda al instante
            setTimeout(function () { target.style.transitionDelay = ''; }, 900);
          }
        });
      },
      { threshold: 0.15, rootMargin: '0px 0px -40px 0px' }
    );

    revealTargets.forEach(function (el, index) {
      el.classList.add('reveal');
      el.style.transitionDelay = (index % 3) * 80 + 'ms';
      observer.observe(el);
    });
  }
});

/* =====================================================================
   Inicio interactivo: particulas, editor en vivo, contadores,
   inclinacion 3D, configurador de web y juego "Caza el bug".
   ===================================================================== */
(function () {
  'use strict';

  var reduceMotion = !!(window.matchMedia && window.matchMedia('(prefers-reduced-motion: reduce)').matches);
  var finePointer = !!(window.matchMedia && window.matchMedia('(hover: hover) and (pointer: fine)').matches);

  function $(id) { return document.getElementById(id); }
  function rand(min, max) { return min + Math.random() * (max - min); }
  function esc(s) {
    return String(s).replace(/&/g, '&amp;').replace(/</g, '&lt;').replace(/>/g, '&gt;').replace(/"/g, '&quot;');
  }

  function onReady(fn) {
    if (document.readyState !== 'loading') fn();
    else document.addEventListener('DOMContentLoaded', fn);
  }

  onReady(function () {
    initScrollProgress();
    initTilt();

    var cfg = window.CM_HOME;
    if (!cfg) return;
    initHeroCanvas();
    initRotator(cfg.rotator);
    initBuilder(cfg.builder);
    initCounters();
    initConfigurator(cfg);
    initBugGame(cfg.game);
  });

  /* ---------- Barra de progreso de lectura ---------- */
  function initScrollProgress() {
    var bar = document.createElement('div');
    bar.className = 'scroll-progress';
    document.body.appendChild(bar);
    var ticking = false;
    function update() {
      var max = document.documentElement.scrollHeight - window.innerHeight;
      bar.style.transform = 'scaleX(' + (max > 0 ? Math.min(window.scrollY / max, 1) : 0) + ')';
      ticking = false;
    }
    window.addEventListener('scroll', function () {
      if (!ticking) { ticking = true; requestAnimationFrame(update); }
    }, { passive: true });
    update();
  }

  /* ---------- Inclinacion 3D + brillo que sigue al mouse ---------- */
  function initTilt() {
    if (!finePointer || reduceMotion) return;
    document.querySelectorAll('[data-tilt]').forEach(function (el) {
      el.addEventListener('pointermove', function (e) {
        var r = el.getBoundingClientRect();
        var x = (e.clientX - r.left) / r.width;
        var y = (e.clientY - r.top) / r.height;
        el.style.setProperty('--mx', (x * 100).toFixed(1) + '%');
        el.style.setProperty('--my', (y * 100).toFixed(1) + '%');
        el.style.transition = 'transform 0.12s ease-out, box-shadow 0.25s ease';
        el.style.transform = 'perspective(900px) rotateX(' + ((0.5 - y) * 9).toFixed(2) + 'deg) rotateY(' + ((x - 0.5) * 9).toFixed(2) + 'deg) translateY(-6px)';
      });
      el.addEventListener('pointerleave', function () {
        el.style.transition = 'transform 0.5s ease, box-shadow 0.25s ease';
        el.style.transform = '';
      });
    });
  }

  /* ---------- Red de particulas del hero ---------- */
  function initHeroCanvas() {
    var canvas = $('heroCanvas');
    if (!canvas || !canvas.getContext) return;
    var ctx = canvas.getContext('2d');
    var hero = canvas.parentElement;
    var dpr = Math.min(window.devicePixelRatio || 1, 2);
    var w = 0, h = 0, pts = [];
    var mouse = { x: -9999, y: -9999 };
    var running = false;
    var LINK = 120, MOUSE = 170;

    function resize() {
      w = hero.clientWidth;
      h = hero.clientHeight;
      canvas.width = w * dpr;
      canvas.height = h * dpr;
      ctx.setTransform(dpr, 0, 0, dpr, 0, 0);
      var count = Math.round(Math.min(90, (w * h) / 13000));
      pts = [];
      for (var i = 0; i < count; i++) {
        pts.push({ x: rand(0, w), y: rand(0, h), vx: rand(-0.35, 0.35), vy: rand(-0.35, 0.35), r: rand(0.8, 2.2) });
      }
    }

    function draw() {
      ctx.clearRect(0, 0, w, h);
      var i, j, p, q, dx, dy, d;
      for (i = 0; i < pts.length; i++) {
        p = pts[i];
        if (!reduceMotion) {
          p.x += p.vx; p.y += p.vy;
          if (p.x < 0 || p.x > w) p.vx *= -1;
          if (p.y < 0 || p.y > h) p.vy *= -1;
          dx = p.x - mouse.x; dy = p.y - mouse.y;
          d = Math.sqrt(dx * dx + dy * dy);
          if (d < 90 && d > 0) { p.x += (dx / d) * 1.2; p.y += (dy / d) * 1.2; }
        }
      }
      ctx.lineWidth = 1;
      for (i = 0; i < pts.length; i++) {
        p = pts[i];
        for (j = i + 1; j < pts.length; j++) {
          q = pts[j];
          dx = p.x - q.x; dy = p.y - q.y;
          d = dx * dx + dy * dy;
          if (d < LINK * LINK) {
            ctx.strokeStyle = 'rgba(56,189,248,' + ((1 - Math.sqrt(d) / LINK) * 0.3).toFixed(3) + ')';
            ctx.beginPath(); ctx.moveTo(p.x, p.y); ctx.lineTo(q.x, q.y); ctx.stroke();
          }
        }
        dx = p.x - mouse.x; dy = p.y - mouse.y;
        d = Math.sqrt(dx * dx + dy * dy);
        if (d < MOUSE) {
          ctx.strokeStyle = 'rgba(192,132,252,' + ((1 - d / MOUSE) * 0.6).toFixed(3) + ')';
          ctx.beginPath(); ctx.moveTo(p.x, p.y); ctx.lineTo(mouse.x, mouse.y); ctx.stroke();
        }
        ctx.fillStyle = 'rgba(165,205,255,0.75)';
        ctx.beginPath(); ctx.arc(p.x, p.y, p.r, 0, Math.PI * 2); ctx.fill();
      }
    }

    function loop() {
      if (!running) return;
      draw();
      requestAnimationFrame(loop);
    }

    function start() {
      if (running || reduceMotion) return;
      running = true;
      requestAnimationFrame(loop);
    }

    resize();
    draw();

    hero.addEventListener('pointermove', function (e) {
      var r = hero.getBoundingClientRect();
      mouse.x = e.clientX - r.left;
      mouse.y = e.clientY - r.top;
      if (reduceMotion) draw();
    });
    hero.addEventListener('pointerleave', function () {
      mouse.x = mouse.y = -9999;
      if (reduceMotion) draw();
    });

    var resizeTimer;
    window.addEventListener('resize', function () {
      clearTimeout(resizeTimer);
      resizeTimer = setTimeout(function () { resize(); draw(); }, 150);
    });

    if ('IntersectionObserver' in window) {
      new IntersectionObserver(function (entries) {
        if (entries[0].isIntersecting) start(); else running = false;
      }).observe(hero);
    } else {
      start();
    }
  }

  /* ---------- Palabras que se escriben solas en el titulo ---------- */
  function initRotator(words) {
    var el = $('heroRotator');
    if (!el || !words || words.length < 2 || reduceMotion) return;
    var index = 0;

    function erase(done) {
      var text = el.textContent;
      if (!text.length) return done();
      el.textContent = text.slice(0, -1);
      setTimeout(function () { erase(done); }, 35);
    }
    function type(word, n, done) {
      el.textContent = word.slice(0, n);
      if (n >= word.length) return done();
      setTimeout(function () { type(word, n + 1, done); }, 70);
    }
    function cycle() {
      setTimeout(function () {
        erase(function () {
          index = (index + 1) % words.length;
          type(words[index], 1, cycle);
        });
      }, 2400);
    }
    cycle();
  }

  /* ---------- Editor que construye un sitio en vivo ---------- */
  function highlight(src) {
    var re = /("[^"]*")|(<\/?)([a-z0-9]+)|\b([a-z]+)(?==")|^([a-z]+)(?=\()/gi;
    var out = '', last = 0, m;
    while ((m = re.exec(src))) {
      out += esc(src.slice(last, m.index));
      if (m[1]) out += '<span class="tk-str">' + esc(m[1]) + '</span>';
      else if (m[2]) out += esc(m[2]) + '<span class="tk-tag">' + esc(m[3]) + '</span>';
      else if (m[4]) out += '<span class="tk-attr">' + esc(m[4]) + '</span>';
      else out += '<span class="tk-fn">' + esc(m[5]) + '</span>';
      last = re.lastIndex;
    }
    return out + esc(src.slice(last));
  }

  function initBuilder(b) {
    var root = $('heroBuilder');
    var code = $('builderCode');
    var preview = $('builderPreview');
    var url = $('builderUrl');
    if (!root || !code || !preview || !b) return;

    var steps = [
      { code: '<nav class="menu">', show: 'nav' },
      { code: '<h1>' + b.title + '</h1>', show: 'title' },
      { code: '<p>' + b.subtitle + '</p>', show: 'sub' },
      { code: '<button>' + b.button + '</button>', show: 'btn' },
      { code: '<section id="' + b.section + '">', show: 'cards' },
      { code: 'deploy("tunegocio.com")', show: 'deploy' }
    ];
    var colors = ['#3b82f6', '#a855f7', '#10b981', '#f43f5e', '#f59e0b'];
    var round = 0;
    var visible = true;

    function part(name) { return preview.querySelector('[data-step="' + name + '"]'); }

    if (reduceMotion) {
      code.innerHTML = steps.map(function (s) { return '<span class="ln">' + highlight(s.code) + '</span>'; }).join('');
      steps.forEach(function (s) { part(s.show).classList.add('on'); });
      url.textContent = 'tunegocio.com';
      url.classList.add('live');
      return;
    }

    if ('IntersectionObserver' in window) {
      new IntersectionObserver(function (entries) { visible = entries[0].isIntersecting; }).observe(root);
    }

    // Espera respetando si la ventana esta visible (no gasta CPU fuera de pantalla)
    function wait(ms, fn) {
      setTimeout(function () {
        if (visible && !document.hidden) fn(); else wait(400, fn);
      }, ms);
    }

    function reset() {
      code.innerHTML = '';
      preview.querySelectorAll('[data-step]').forEach(function (el) { el.classList.remove('on'); });
      preview.style.setProperty('--bp', colors[round % colors.length]);
      url.textContent = 'localhost';
      url.classList.remove('live');
      round++;
      wait(500, function () { runStep(0); });
    }

    function runStep(i) {
      if (i >= steps.length) return wait(2800, reset);
      var step = steps[i];
      var line = document.createElement('span');
      line.className = 'ln cur';
      code.appendChild(line);
      (function typeChar(n) {
        line.textContent = step.code.slice(0, n);
        if (n < step.code.length) return wait(rand(22, 55), function () { typeChar(n + 1); });
        line.classList.remove('cur');
        line.innerHTML = highlight(step.code);
        part(step.show).classList.add('on');
        if (step.show === 'deploy') {
          url.textContent = 'https://tunegocio.com';
          url.classList.add('live');
        }
        wait(380, function () { runStep(i + 1); });
      })(1);
    }

    reset();
  }

  /* ---------- Contadores animados ---------- */
  function initCounters() {
    var nums = document.querySelectorAll('[data-count]');
    if (!nums.length) return;

    function animate(el) {
      var target = parseInt(el.getAttribute('data-count'), 10) || 0;
      if (reduceMotion) { el.textContent = target; return; }
      var startTime = null;
      function tick(now) {
        if (!startTime) startTime = now;
        var t = Math.min((now - startTime) / 1400, 1);
        el.textContent = Math.round(target * (1 - Math.pow(1 - t, 3)));
        if (t < 1) requestAnimationFrame(tick);
      }
      requestAnimationFrame(tick);
    }

    // El HTML trae el numero real (por si no hay JS); solo lo ponemos en 0 si vamos a animarlo
    if (reduceMotion || !('IntersectionObserver' in window)) return;
    nums.forEach(function (el) { el.textContent = '0'; });
    var io = new IntersectionObserver(function (entries) {
      entries.forEach(function (entry) {
        if (entry.isIntersecting) { animate(entry.target); io.unobserve(entry.target); }
      });
    }, { threshold: 0.6 });
    nums.forEach(function (el) { io.observe(el); });
  }

  /* ---------- Configurador "Diseña tu web" ---------- */
  function initConfigurator(cfg) {
    var preview = $('cfgPreview');
    if (!preview) return;

    var nameInput = $('cfgName');
    var cta = $('cfgCta');
    var feats = $('mockFeats');
    var state = {
      type: Object.keys(cfg.types)[0],
      color: Object.keys(cfg.colors)[0],
      style: Object.keys(cfg.styles)[0],
      name: ''
    };

    function slug(s) {
      var base = s.normalize ? s.normalize('NFD').replace(/[̀-ͯ]/g, '') : s;
      return base.toLowerCase().replace(/[^a-z0-9]+/g, '') || 'tunegocio';
    }

    function render(pop) {
      var t = cfg.types[state.type];
      var name = state.name.trim() || t.name;

      nameInput.placeholder = t.name;
      $('mockName').textContent = name;
      $('mockEmoji').textContent = t.emoji;
      $('mockArt').textContent = t.emoji;
      $('mockTitle').textContent = t.title;
      $('mockSub').textContent = t.sub;
      $('mockCta').textContent = t.cta;
      $('mockUrl').textContent = 'www.' + slug(name) + '.com';

      feats.innerHTML = t.feats.map(function (f, i) {
        return '<div class="mock-feat"><span>' + esc(t.icons[i] || '') + '</span><b>' + esc(f) + '</b></div>';
      }).join('');

      preview.style.setProperty('--p', state.color);
      preview.setAttribute('data-style', state.style);

      var msg = cfg.waMessage
        .replace('{type}', t.label)
        .replace('{name}', name)
        .replace('{style}', cfg.styles[state.style].toLowerCase())
        .replace('{color}', cfg.colors[state.color]);
      cta.href = 'https://wa.me/' + cfg.whatsapp + '?text=' + encodeURIComponent(msg);

      if (pop && !reduceMotion) {
        preview.classList.remove('pop');
        void preview.offsetWidth;
        preview.classList.add('pop');
      }
    }

    function bindGroup(id, key) {
      var group = $(id);
      if (!group) return;
      group.addEventListener('click', function (e) {
        var btn = e.target.closest('[data-value]');
        if (!btn) return;
        group.querySelectorAll('[data-value]').forEach(function (b) {
          var on = b === btn;
          b.classList.toggle('active', on);
          b.setAttribute('aria-checked', on ? 'true' : 'false');
        });
        state[key] = btn.getAttribute('data-value');
        render(true);
      });
    }

    bindGroup('cfgType', 'type');
    bindGroup('cfgColor', 'color');
    bindGroup('cfgStyle', 'style');
    nameInput.addEventListener('input', function () {
      state.name = nameInput.value;
      render(false);
    });

    render(false);
  }

  /* ---------- Juego "Caza el bug" ---------- */
  function initBugGame(txt) {
    var field = $('gField');
    if (!field || !txt) return;

    var scoreEl = $('gScore'), timeEl = $('gTime'), bestEl = $('gBest'), comboEl = $('gCombo');
    var startOv = $('gStart'), endOv = $('gEnd');
    var DURATION = 20000;
    var STORE_KEY = 'cmBugHuntBest';

    var bugs = [];
    var score = 0, combo = 0, lastHit = 0, endAt = 0, nextSpawn = 0, lastFrame = 0;
    var playing = false;
    var best = 0;
    try { best = parseInt(localStorage.getItem(STORE_KEY), 10) || 0; } catch (e) { best = 0; }
    bestEl.textContent = best;

    function bugSvg(body, head) {
      return '<svg viewBox="0 0 48 48" aria-hidden="true">' +
        '<g class="legs" stroke="#0f172a" stroke-width="2.6" stroke-linecap="round" fill="none">' +
        '<path d="M15 21L5 15M14 28H3M15 35L6 42M33 21L43 15M34 28H45M33 35L42 42"/></g>' +
        '<path d="M20 9L16 3M28 9L32 3" stroke="#0f172a" stroke-width="2.2" stroke-linecap="round" fill="none"/>' +
        '<circle cx="24" cy="13" r="6.5" fill="' + head + '"/>' +
        '<ellipse cx="24" cy="30" rx="11.5" ry="14" fill="' + body + '"/>' +
        '<path d="M24 17V44" stroke="rgba(0,0,0,.35)" stroke-width="1.6"/>' +
        '<circle cx="18.5" cy="26" r="2.3" fill="rgba(0,0,0,.35)"/><circle cx="29.5" cy="26" r="2.3" fill="rgba(0,0,0,.35)"/>' +
        '<circle cx="19" cy="35" r="2" fill="rgba(0,0,0,.35)"/><circle cx="29" cy="35" r="2" fill="rgba(0,0,0,.35)"/>' +
        '<circle cx="21.5" cy="11.5" r="1.6" fill="#fff"/><circle cx="26.5" cy="11.5" r="1.6" fill="#fff"/>' +
        '</svg>';
    }

    function spawn(progress) {
      if (bugs.length >= 10) return;
      var roll = Math.random();
      var type = roll < 0.08 ? 'gold' : roll < 0.22 ? 'feature' : 'bug';
      var el = document.createElement('span');
      el.className = 'bug' + (type === 'bug' ? '' : ' ' + type);
      if (type === 'feature') el.textContent = '✓';
      else if (type === 'gold') el.innerHTML = bugSvg('#fbbf24', '#b45309');
      else el.innerHTML = bugSvg(Math.random() < 0.5 ? '#ef4444' : '#a855f7', '#1e293b');

      var w = field.clientWidth, h = field.clientHeight;
      var speed = (60 + 110 * progress) * (type === 'gold' ? 1.6 : type === 'feature' ? 0.6 : 1);
      var angle = rand(0, Math.PI * 2);
      var bug = {
        el: el, type: type,
        x: rand(30, w - 30), y: rand(30, h - 30),
        vx: Math.cos(angle) * speed, vy: Math.sin(angle) * speed,
        speed: speed, turn: 0,
        age: 0, life: type === 'gold' ? 2600 : rand(3200, 4800),
        dead: false
      };
      el._bug = bug;
      field.appendChild(el);
      bugs.push(bug);
      place(bug);
    }

    function place(b) {
      var rot = b.type === 'feature' ? 0 : Math.atan2(b.vy, b.vx) * 180 / Math.PI + 90;
      var t = 'translate(' + b.x.toFixed(1) + 'px,' + b.y.toFixed(1) + 'px) rotate(' + rot.toFixed(0) + 'deg)';
      b.el.style.transform = t;
      b.el.style.setProperty('--t', t);
      var left = b.life - b.age;
      b.el.style.opacity = left < 400 ? Math.max(left / 400, 0) : 1;
    }

    function remove(b) {
      b.dead = true;
      if (b.el.parentNode) b.el.parentNode.removeChild(b.el);
    }

    function floatText(x, y, text, cls) {
      var f = document.createElement('span');
      f.className = 'float-text' + (cls ? ' ' + cls : '');
      f.textContent = text;
      f.style.left = x + 'px';
      f.style.top = y + 'px';
      field.appendChild(f);
      f.addEventListener('animationend', function () { f.remove(); });
    }

    function updateHud() {
      scoreEl.textContent = score;
      var mult = multiplier();
      comboEl.textContent = combo >= 3 ? txt.combo + ' x' + combo + (mult > 1 ? ' (×' + mult + ')' : '') : '';
    }

    function multiplier() { return combo >= 10 ? 3 : combo >= 5 ? 2 : 1; }

    function hit(b) {
      var now = performance.now();
      if (b.type === 'feature') {
        score = Math.max(0, score - 5);
        combo = 0;
        floatText(b.x, b.y, '-5', 'bad');
        field.classList.remove('shake');
        void field.offsetWidth;
        field.classList.add('shake');
      } else {
        combo = now - lastHit < 1200 ? combo + 1 : 1;
        lastHit = now;
        var pts = (b.type === 'gold' ? 5 : 1) * multiplier();
        score += pts;
        floatText(b.x, b.y, '+' + pts, b.type === 'gold' ? 'gold' : '');
      }
      b.dead = true;
      b.el.classList.add('squashed');
      setTimeout(function () { remove(b); }, 350);
      updateHud();
    }

    field.addEventListener('pointerdown', function (e) {
      if (!playing) return;
      var el = e.target.closest('.bug');
      if (el && el._bug && !el._bug.dead) {
        e.preventDefault();
        hit(el._bug);
      } else if (!e.target.closest('.game-overlay')) {
        combo = 0;
        updateHud();
      }
    });

    function frame(now) {
      if (!playing) return;
      var dt = Math.min((now - lastFrame) / 1000, 0.05);
      lastFrame = now;
      var remaining = endAt - now;
      var progress = 1 - remaining / DURATION;

      if (remaining <= 0) return finish();
      timeEl.textContent = Math.ceil(remaining / 1000);

      if (now >= nextSpawn) {
        spawn(progress);
        nextSpawn = now + (760 - 380 * progress) * rand(0.7, 1.3);
      }

      var w = field.clientWidth, h = field.clientHeight;
      for (var i = bugs.length - 1; i >= 0; i--) {
        var b = bugs[i];
        if (b.dead) { bugs.splice(i, 1); continue; }
        b.age += dt * 1000;
        if (b.age >= b.life) {
          if (b.type !== 'feature' && combo > 0) { combo = 0; updateHud(); }
          remove(b);
          bugs.splice(i, 1);
          continue;
        }
        // Movimiento con giros aleatorios (camina como insecto)
        b.turn += rand(-1, 1) * dt * 8;
        b.turn = Math.max(-2.5, Math.min(2.5, b.turn));
        var a = Math.atan2(b.vy, b.vx) + b.turn * dt;
        b.vx = Math.cos(a) * b.speed;
        b.vy = Math.sin(a) * b.speed;
        b.x += b.vx * dt;
        b.y += b.vy * dt;
        if (b.x < 20) { b.x = 20; b.vx = Math.abs(b.vx); }
        if (b.x > w - 20) { b.x = w - 20; b.vx = -Math.abs(b.vx); }
        if (b.y < 20) { b.y = 20; b.vy = Math.abs(b.vy); }
        if (b.y > h - 20) { b.y = h - 20; b.vy = -Math.abs(b.vy); }
        place(b);
      }
      requestAnimationFrame(frame);
    }

    function clearBugs() {
      bugs.forEach(remove);
      bugs = [];
      field.querySelectorAll('.bug, .float-text').forEach(function (el) { el.remove(); });
    }

    function start() {
      clearBugs();
      score = 0; combo = 0; lastHit = 0;
      updateHud();
      timeEl.textContent = DURATION / 1000;
      startOv.classList.add('hidden');
      endOv.classList.add('hidden');
      playing = true;
      lastFrame = performance.now();
      endAt = lastFrame + DURATION;
      nextSpawn = lastFrame + 250;
      requestAnimationFrame(frame);
    }

    function finish() {
      playing = false;
      timeEl.textContent = 0;
      clearBugs();

      var isRecord = score > best;
      if (isRecord) {
        best = score;
        bestEl.textContent = best;
        try { localStorage.setItem(STORE_KEY, String(best)); } catch (e) { /* sin almacenamiento */ }
      }

      var tier = txt.tiers[0];
      txt.tiers.forEach(function (t) { if (score >= t.min) tier = t; });
      $('gFinal').textContent = score;
      $('gTier').textContent = tier.title;
      $('gTierText').textContent = tier.text;
      $('gRecord').classList.toggle('hidden', !isRecord || score === 0);
      comboEl.textContent = '';
      endOv.classList.remove('hidden');
    }

    $('gPlay').addEventListener('click', start);
    $('gAgain').addEventListener('click', start);
  }
})();
