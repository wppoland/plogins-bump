<?php

declare(strict_types=1);

namespace Bump;

defined('ABSPATH') || exit;

/**
 * Idempotent version marker, run on every boot. Bump is stateless (a single
 * settings option, no tables), so there is nothing to migrate yet — the marker
 * exists so future schema steps have a home.
 */
final class Migrator
{
    private const OPTION = 'bump_db_version';

    public function maybeMigrate(): void
    {
        $current = (string) get_option(self::OPTION, '0');

        if (version_compare($current, VERSION, '>=')) {
            return;
        }

        update_option(self::OPTION, VERSION, false);
    }
}
