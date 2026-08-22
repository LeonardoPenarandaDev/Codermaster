document.addEventListener('DOMContentLoaded', function () {
  var navToggle = document.getElementById('navToggle');
  var mainNav = document.getElementById('mainNav');

  if (navToggle && mainNav) {
    navToggle.addEventListener('click', function () {
      var isOpen = mainNav.classList.toggle('open');
      navToggle.classList.toggle('open', isOpen);
      navToggle.setAttribute('aria-expanded', isOpen ? 'true' : 'false');
    });

    mainNav.querySelectorAll('a').forEach(function (link) {
      link.addEventListener('click', function () {
        mainNav.classList.remove('open');
        navToggle.classList.remove('open');
        navToggle.setAttribute('aria-expanded', 'false');
      });
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
    '.grid-cards .card, .project-card, .price-card, .cta, .contact-info, .contact-form'
  );
  if (revealTargets.length && 'IntersectionObserver' in window) {
    var observer = new IntersectionObserver(
      function (entries) {
        entries.forEach(function (entry) {
          if (entry.isIntersecting) {
            entry.target.classList.add('in-view');
            observer.unobserve(entry.target);
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
