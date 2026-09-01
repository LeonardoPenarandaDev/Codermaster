<?php
require_once __DIR__ . '/functions.php';

if (!isset($GLOBALS['CM_LANG'])) {
    $requested = strtolower((string) ($_GET['lang'] ?? $_POST['lang'] ?? 'es'));
    $GLOBALS['CM_LANG'] = $requested === 'en' ? 'en' : 'es';
}

function current_lang(): string
{
    return $GLOBALS['CM_LANG'] ?? 'es';
}

/**
 * Resolves a bilingual value. Pass ['es' => '...', 'en' => '...'] and it
 * returns the string for the current language (falling back to Spanish).
 * A plain string is returned as-is, so language-agnostic values (proper
 * nouns, tech tags) don't need to be wrapped.
 */
function tv($value)
{
    if (is_array($value)) {
        return $value[current_lang()] ?? ($value['es'] ?? reset($value));
    }

    return $value;
}

/**
 * Like site_url(), but for internal page links: prefixes /en when the
 * current language is English, so navigation stays on the same language.
 */
function page_url(string $path = '/'): string
{
    $path = '/' . ltrim($path, '/');

    if (current_lang() === 'en') {
        $path = $path === '/' ? '/en' : '/en' . $path;
    }

    return site_url($path);
}
