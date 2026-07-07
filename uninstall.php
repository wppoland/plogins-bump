<?php
/**
 * Uninstall cleanup for Plogins Bump. Stateless — only a settings option and a
 * schema-version marker. Both removed here, multisite-aware.
 *
 * @package Bump
 */

declare(strict_types=1);

defined('WP_UNINSTALL_PLUGIN') || exit;

function bump_uninstall_cleanup(): void
{
    delete_option('bump_settings');
    delete_option('bump_db_version');
}

if (is_multisite()) {
    $bump_site_ids = get_sites(['fields' => 'ids', 'number' => 0]);

    foreach ($bump_site_ids as $bump_site_id) {
        switch_to_blog((int) $bump_site_id);
        bump_uninstall_cleanup();
        restore_current_blog();
    }

    unset($bump_site_ids, $bump_site_id);
} else {
    bump_uninstall_cleanup();
}
