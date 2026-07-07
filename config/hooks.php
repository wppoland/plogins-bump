<?php
/**
 * Services resolved and hooked during Plugin::boot(). Each must implement
 * Bump\Contract\HasHooks.
 *
 * @package Bump
 *
 * @return array<class-string>
 */

declare(strict_types=1);

use Bump\Admin\Settings;
use Bump\Service\BumpService;

defined('ABSPATH') || exit;

return [
    BumpService::class,
    ...(is_admin() ? [Settings::class] : []),
];
