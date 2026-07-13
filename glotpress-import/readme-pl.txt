=== Plogins Bump - Checkout Order Bump for WooCommerce ===
Contributors: motylanogha
Tags: woocommerce, order bump, upsell, checkout, conversion
Requires at least: 6.5
Tested up to: 7.0
Requires PHP: 8.1
Stable tag: 1.0.2
License: GPLv2 or later
License URI: https://www.gnu.org/licenses/gpl-2.0.html

Pokazuj na kasie ofertę order bump jednym kliknięciem, aby kupujący mogli dodać produkt uzupełniający, zanim zapłacą.

== Description ==

Plogins Bump dodaje jedną, dobrze widoczną ofertę order bump nad metodami płatności w klasycznej kasie WooCommerce. Zaznaczenie pola wyboru dodaje wybrany produkt do zamówienia, a WooCommerce przelicza każdą sumę przed płatnością, więc kwota wysłana do bramki płatności już uwzględnia bump. Odznaczenie usuwa go równie szybko.

* Jedna oferta, jedno pole wyboru nad metodami płatności.
* Wybierz dowolny prosty, możliwy do zakupu produkt jako bump.
* Opcjonalna cena specjalna tylko dla pozycji bump.
* Korzysta z własnego koszyka WooCommerce i przeliczenia `update_checkout` — bez własnych sum, bez niespodzianek przy bramce płatności.
* Zgodne z HPOS, style o ograniczonym zakresie, bez przeskoku układu.

Pozycja bump jest oznaczona prywatnie, więc nigdy nie zostanie pomylona z pozycją dodaną przez kupującego. Klasyczna kasa (shortcode).

Pełne źródło znajdziesz pod adresem https://github.com/wppoland/plogins-bump.

== Installation ==

1. Wgraj do `/wp-content/plugins/bump` lub zainstaluj przez Wtyczki → Dodaj nową.
2. Włącz wtyczkę. WooCommerce musi być aktywne.
3. Przejdź do WooCommerce → Bump, wybierz produkt bump, wpisz treść, włącz i zapisz.

== Screenshots ==

1. Oferta order bump nad metodami płatności na kasie, z polem wyboru jednym kliknięciem, które dodaje produkt do zamówienia.
2. Ustawienia Bump w WooCommerce: produkt bump, nagłówek, etykieta pola wyboru, opis i opcjonalna cena specjalna.

== Translations ==

Plogins Bump zawiera polskie, niemieckie i hiszpańskie tłumaczenia interfejsu wtyczki. Domena tekstowa to `plogins-bump`, więc pakiety językowe z WordPress.org mogą również nadpisać lub rozszerzyć te dołączone tłumaczenia.

== Changelog ==

= 1.0.2 =
* Dodano dołączone polskie, niemieckie i hiszpańskie tłumaczenia interfejsu wtyczki.

= 1.0.1 =
* Pierwsze wydanie: pojedynczy order bump na kasie z opcjonalnym nadpisaniem ceny.
