=== Bump - Checkout Order Bump for WooCommerce ===
Contributors: motylanogha
Tags: woocommerce, order bump, upsell, checkout, conversion
Requires at least: 6.5
Tested up to: 7.0
Requires PHP: 8.1
Stable tag: 1.0.2
License: GPLv2 or later
License URI: https://www.gnu.org/licenses/gpl-2.0.html

Show a one-click order-bump offer on the checkout so shoppers can add a complementary product before they pay.

== Description ==

Plogins Bump adds a single, high-visibility order-bump offer above the payment methods on the classic WooCommerce checkout. Ticking the checkbox adds your chosen product to the order and WooCommerce recalculates every total before payment, so the amount sent to the gateway already includes the bump. Unticking removes it just as fast.

* One offer, one checkbox, above the payment methods.
* Pick any simple, purchasable product as the bump.
* Optional special price for the bump line only.
* Uses WooCommerce's own cart and `update_checkout` recalculation — no custom totals, no gateway surprises.
* HPOS compatible, scoped styles, no layout shift.

The bump line is tagged privately so it is never confused with a copy the shopper added themselves. Classic (shortcode) checkout.

The full source lives at https://github.com/wppoland/plogins-bump.

== Installation ==

1. Upload to `/wp-content/plugins/bump`, or install via Plugins → Add New.
2. Activate it. WooCommerce must be active.
3. Go to WooCommerce → Bump, choose the bump product, write the copy, enable, and save.

== Screenshots ==

1. The order-bump offer above the payment methods on the checkout, with a one-click checkbox that adds the product to the order.
2. The Bump settings under WooCommerce: bump product, heading, checkbox label, description and optional special price.

== Translations ==

Plogins Bump includes Polish, German and Spanish translations for the plugin interface. The text domain is `plogins-bump`, so WordPress.org language packs can also override or extend these bundled translations.

== Changelog ==

= 1.0.2 =
* Added bundled Polish, German and Spanish translations for the plugin interface.

= 1.0.1 =
* Initial release: single checkout order bump with optional price override.
