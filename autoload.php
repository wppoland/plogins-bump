<?php
/**
 * Minimal PSR-4 autoloader for the Bump\ namespace. The plugin is
 * self-contained (no Composer runtime dependency), so this is all it needs.
 *
 * @package Bump
 */

declare(strict_types=1);

namespace Bump;

defined('ABSPATH') || exit;

spl_autoload_register(static function (string $class): void {
    $prefix  = 'Bump\\';
    $baseDir = __DIR__ . '/src/';

    $len = strlen($prefix);
    if (strncmp($prefix, $class, $len) !== 0) {
        return;
    }

    $relative = substr($class, $len);
    $file     = $baseDir . str_replace('\\', '/', $relative) . '.php';

    if (is_readable($file)) {
        require_once $file;
    }
});
