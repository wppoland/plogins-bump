<?php
/**
 * Constants defined by the plugin bootstrap, declared here so PHPStan resolves
 * them without loading WordPress.
 *
 * @package Bump
 */

declare(strict_types=1);

namespace {
    define('ABSPATH', '/tmp/wordpress/');
    define('WP_UNINSTALL_PLUGIN', true);

    // Global constants defined by the plugin bootstrap via define().
    define('BUMP_DIR', '/tmp/wordpress/wp-content/plugins/bump/');
    define('BUMP_URL', 'https://example.test/wp-content/plugins/bump/');
}

namespace Bump {
    // Namespaced consts declared with `const` in the bootstrap.
    const VERSION     = '1.0.1';
    const PLUGIN_FILE = '/tmp/wordpress/wp-content/plugins/bump/plogins-bump.php';
}
