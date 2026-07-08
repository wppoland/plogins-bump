=== Plogins Bump - Checkout Order Bump for WooCommerce ===
Contributors: motylanogha
Tags: woocommerce, order bump, upsell, checkout, conversion
Requires at least: 6.5
Tested up to: 7.0
Requires PHP: 8.1
Stable tag: 1.0.1
License: GPLv2 or later
License URI: https://www.gnu.org/licenses/gpl-2.0.html

Zeige an der Kasse ein One-Click-Angebot zur Bestellerhöhung an, damit Käufer vor dem Bezahlen ein ergänzendes Produkt hinzufügen können.

== Description ==

Plogins Bump fügt über den Zahlungsmethoden im klassischen WooCommerce-Checkout ein einzelnes, gut sichtbares Order-Bump-Angebot hinzu. Wenn du das Kontrollkästchen aktivieren, wird dein ausgewähltes Produkt zur Bestellung hinzugefügt und WooCommerce berechnet jeden Gesamtbetrag vor der Zahlung neu, sodass der an das Gateway gesendete Betrag den Aufschlag bereits enthält. Wenn du das Häkchen entfernen, wird es genauso schnell entfernt.

* Ein Angebot, ein Kontrollkästchen oberhalb der Zahlungsarten.
* Wähle als Beule ein beliebiges einfaches, käufliches Produkt.
* Optionaler Sonderpreis nur für die Stoßlinie.
* Verwendet WooCommerces eigenen Warenkorb und die Neuberechnung von „update_checkout“ – keine benutzerdefinierten Gesamtsummen, keine Gateway-Überraschungen.
* HPOS-kompatibel, bereichsbezogene Stile, keine Layoutverschiebung.

Die Bump-Zeile ist privat markiert, sodass sie nie mit einer Kopie verwechselt werden kann, die der Käufer selbst hinzugefügt hat. Klassischer Checkout (Shortcode).

Die vollständige Quelle befindet sich unter https://github.com/wppoland/plogins-bump.

== Installation ==

1. Lade es nach „/wp-content/plugins/bump“ hoch oder installiere es über Plugins → Neu hinzufügen.
2. Aktiviere es. WooCommerce muss aktiv sein.
3. Gehe zu WooCommerce → Bump, wähle das Bump-Produkt aus, schreibe die Kopie, aktiviere und speichere.

== Screenshots ==

1. Das Order-Bump-Angebot über den Zahlungsmethoden an der Kasse, mit einem Ein-Klick-Kontrollkästchen, das das Produkt zur Bestellung hinzufügt.
2. Die Bump-Einstellungen unter WooCommerce: Bump-Produkt, Überschrift, Kontrollkästchenbezeichnung, Beschreibung und optionaler Sonderpreis.

== Changelog ==

= 1.0.1 =
* Erstveröffentlichung: Single-Checkout-Auftragserhöhung mit optionaler Preisüberschreibung.
