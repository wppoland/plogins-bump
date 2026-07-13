=== Plogins Bump - Checkout Order Bump for WooCommerce ===
Contributors: motylanogha
Tags: woocommerce, order bump, upsell, checkout, conversion
Requires at least: 6.5
Tested up to: 7.0
Requires PHP: 8.1
Stable tag: 1.0.2
License: GPLv2 or later
License URI: https://www.gnu.org/licenses/gpl-2.0.html

Zeige an der Kasse ein Order-Bump-Angebot mit einem Klick, damit die Kundschaft vor dem Bezahlen ein ergänzendes Produkt hinzufügen kann.

== Description ==

Plogins Bump fügt über den Zahlungsmethoden im klassischen WooCommerce-Checkout ein einzelnes, gut sichtbares Order-Bump-Angebot hinzu. Wenn du das Kontrollkästchen aktivierst, wird dein gewähltes Produkt zur Bestellung hinzugefügt und WooCommerce berechnet jeden Gesamtbetrag vor der Zahlung neu, sodass der an das Zahlungs-Gateway gesendete Betrag den Bump bereits enthält. Wenn du das Häkchen wieder entfernst, wird er genauso schnell entfernt.

* Ein Angebot, ein Kontrollkästchen oberhalb der Zahlungsmethoden.
* Wähle ein beliebiges einfaches, käufliches Produkt als Bump.
* Optionaler Sonderpreis nur für die Bump-Zeile.
* Nutzt WooCommerces eigenen Warenkorb und die Neuberechnung über `update_checkout` — keine eigenen Summen, keine Überraschungen am Gateway.
* HPOS-kompatibel, abgegrenzte Styles, keine Layout-Verschiebung.

Die Bump-Zeile ist privat markiert, sodass sie nie mit einer Position verwechselt wird, die die Kundschaft selbst hinzugefügt hat. Klassischer Checkout (Shortcode).

Der vollständige Quellcode liegt unter https://github.com/wppoland/plogins-bump.

== Installation ==

1. Lade das Plugin nach `/wp-content/plugins/bump` hoch oder installiere es über Plugins → Installieren.
2. Aktiviere es. WooCommerce muss aktiv sein.
3. Gehe zu WooCommerce → Bump, wähle das Bump-Produkt, schreibe den Text, aktiviere das Angebot und speichere.

== Screenshots ==

1. Das Order-Bump-Angebot über den Zahlungsmethoden an der Kasse, mit einem Kontrollkästchen, das das Produkt per Klick zur Bestellung hinzufügt.
2. Die Bump-Einstellungen unter WooCommerce: Bump-Produkt, Überschrift, Kontrollkästchen-Beschriftung, Beschreibung und optionaler Sonderpreis.

== Translations ==

Plogins Bump enthält polnische, deutsche und spanische Übersetzungen für die Plugin-Oberfläche. Die Textdomain ist `plogins-bump`, sodass Sprachpakete von WordPress.org diese mitgelieferten Übersetzungen ebenfalls überschreiben oder erweitern können.

== Changelog ==

= 1.0.2 =
* Mitgelieferte polnische, deutsche und spanische Übersetzungen für die Plugin-Oberfläche hinzugefügt.

= 1.0.1 =
* Erstveröffentlichung: einzelner Order Bump im Checkout mit optionaler Preisüberschreibung.
