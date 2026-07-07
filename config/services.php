<?php
/**
 * Service wiring.
 *
 * @package Bump
 */

declare(strict_types=1);

use Bump\Admin\Settings;
use Bump\Container;
use Bump\Migrator;
use Bump\Service\BumpService;

defined('ABSPATH') || exit;

return static function (Container $c): void {
    $c->singleton(Migrator::class, static fn (): Migrator => new Migrator());
    $c->singleton(BumpService::class, static fn (): BumpService => new BumpService());

    if (is_admin()) {
        $c->singleton(Settings::class, static fn (): Settings => new Settings());
    }
};
