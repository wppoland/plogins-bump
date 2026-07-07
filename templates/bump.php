<?php
/**
 * Order-bump offer, rendered on `woocommerce_review_order_before_payment`.
 *
 * @var \WC_Product $product
 * @var bool        $in_cart
 * @var string      $heading
 * @var string      $description
 * @var string      $checkbox_label
 * @var string      $price_html
 * @var string      $accent_color
 * @var string      $nonce
 *
 * @package Bump/Templates
 */

declare(strict_types=1);

// phpcs:disable WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedVariableFound -- Template-scope variables injected by the service.

defined('ABSPATH') || exit;

$bump_style = $accent_color !== '' ? ' style="--plogins-bump-accent:' . esc_attr($accent_color) . '"' : '';
$bump_img   = $product->get_image('woocommerce_gallery_thumbnail');
?>
<div class="plogins-bump<?php echo $in_cart ? ' plogins-bump--active' : ''; ?>"<?php echo $bump_style; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped -- built from esc_attr above. ?> data-nonce="<?php echo esc_attr($nonce); ?>">
    <label class="plogins-bump__inner">
        <input type="checkbox" class="plogins-bump__checkbox" <?php checked($in_cart, true); ?> />
        <?php if ($bump_img !== '') : ?>
            <span class="plogins-bump__media"><?php echo wp_kses_post($bump_img); ?></span>
        <?php endif; ?>
        <span class="plogins-bump__body">
            <?php if ($heading !== '') : ?>
                <span class="plogins-bump__heading"><?php echo esc_html($heading); ?></span>
            <?php endif; ?>
            <span class="plogins-bump__title">
                <?php echo esc_html($checkbox_label); ?>
                <strong class="plogins-bump__product"><?php echo esc_html($product->get_name()); ?></strong>
                <span class="plogins-bump__price"><?php echo wp_kses_post($price_html); ?></span>
            </span>
            <?php if ($description !== '') : ?>
                <span class="plogins-bump__desc"><?php echo esc_html($description); ?></span>
            <?php endif; ?>
        </span>
        <span class="plogins-bump__spinner" aria-hidden="true"></span>
    </label>
</div>
<?php
// phpcs:enable WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedVariableFound
