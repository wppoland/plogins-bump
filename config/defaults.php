<?php
/**
 * Default settings, merged under the option key `bump_settings`.
 *
 * @package Bump
 *
 * @return array<string, mixed>
 */

declare(strict_types=1);

defined('ABSPATH') || exit;

return [
    // Master switch. Off = no output, scripts or styles on the checkout.
    'enabled' => false,

    // Product offered as the bump (0 = not configured; the offer stays hidden).
    'product_id' => 0,

    // Heading + description shown in the offer box. Empty = packaged defaults.
    'heading'     => '',
    'description' => '',

    // Checkbox label, e.g. "Yes, add this to my order!".
    'checkbox_label' => '',

    // Optional override price for the bump line (empty = product's own price).
    // Numeric string in the shop currency, e.g. "19.00".
    'bump_price' => '',

    // Only show when the cart already contains a purchasable product (always
    // true on checkout, kept for parity/future conditions).
    'accent_color' => '',
];
