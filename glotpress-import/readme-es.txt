=== Plogins Bump - Checkout Order Bump for WooCommerce ===
Contributors: motylanogha
Tags: woocommerce, order bump, upsell, checkout, conversion
Requires at least: 6.5
Tested up to: 7.0
Requires PHP: 8.1
Stable tag: 1.0.2
License: GPLv2 or later
License URI: https://www.gnu.org/licenses/gpl-2.0.html

Muestra en el pago una oferta de order bump con un solo clic para que los clientes puedan añadir un producto complementario antes de pagar.

== Description ==

Plogins Bump añade una única oferta de order bump muy visible encima de los métodos de pago en el pago clásico de WooCommerce. Al marcar la casilla, se añade el producto elegido al pedido y WooCommerce recalcula cada total antes del pago, así que el importe enviado a la pasarela ya incluye el bump. Al desmarcarla, se elimina igual de rápido.

* Una oferta, una casilla, encima de los métodos de pago.
* Elige cualquier producto simple y comprable como bump.
* Precio especial opcional solo para la línea del bump.
* Usa el propio carrito de WooCommerce y el recálculo de `update_checkout` — sin totales personalizados ni sorpresas en la pasarela.
* Compatible con HPOS, estilos acotados y sin saltos de diseño.

La línea del bump está etiquetada de forma privada, así que nunca se confunde con una línea que el propio cliente haya añadido. Pago clásico (shortcode).

El código fuente completo está en https://github.com/wppoland/plogins-bump.

== Installation ==

1. Sube el plugin a `/wp-content/plugins/bump` o instálalo desde Plugins → Añadir nuevo.
2. Actívalo. WooCommerce debe estar activo.
3. Ve a WooCommerce → Bump, elige el producto del bump, escribe el texto, actívalo y guarda.

== Screenshots ==

1. La oferta de order bump encima de los métodos de pago en el pago, con una casilla de un clic que añade el producto al pedido.
2. Los ajustes de Bump en WooCommerce: producto del bump, encabezado, etiqueta de la casilla, descripción y precio especial opcional.

== Translations ==

Plogins Bump incluye traducciones al polaco, al alemán y al español para la interfaz del plugin. El dominio de texto es `plogins-bump`, así que los paquetes de idioma de WordPress.org también pueden sustituir o ampliar estas traducciones incluidas.

== Changelog ==

= 1.0.2 =
* Añadidas traducciones incluidas al polaco, al alemán y al español para la interfaz del plugin.

= 1.0.1 =
* Lanzamiento inicial: un solo order bump en el pago con anulación de precio opcional.
