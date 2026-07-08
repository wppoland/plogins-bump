=== Plogins Bump - Checkout Order Bump for WooCommerce ===
Contributors: motylanogha
Tags: woocommerce, order bump, upsell, checkout, conversion
Requires at least: 6.5
Tested up to: 7.0
Requires PHP: 8.1
Stable tag: 1.0.1
License: GPLv2 or later
License URI: https://www.gnu.org/licenses/gpl-2.0.html

Wyświetlaj na kasie ofertę dotyczącą zwiększenia zamówienia jednym kliknięciem, aby kupujący mogli dodać produkt uzupełniający, zanim zapłacą.

== Description ==

Plogins Bump dodaje pojedynczą, dobrze widoczną ofertę zwiększenia zamówienia nad metodami płatności w klasycznej kasie WooCommerce. Zaznaczenie pola wyboru powoduje dodanie wybranego produktu do zamówienia, a WooCommerce przelicza każdą sumę przed dokonaniem płatności, więc kwota wysłana do bramki uwzględnia już kwotę nadwyżki. Odznaczenie usuwa je równie szybko.

* Jedna oferta, jedno pole wyboru nad metodami płatności.
* Wybierz dowolny prosty, możliwy do kupienia produkt jako guz.
* Opcjonalna cena specjalna dotyczy wyłącznie linii wypukłości.
* Wykorzystuje własny koszyk WooCommerce i przeliczenie `update_checkout` — bez niestandardowych sum, bez niespodzianek na bramce.
* Zgodne z HPOS, style o ograniczonym zakresie, bez zmiany układu.

Linia nierówności jest oznaczona jako prywatna, więc nigdy nie można jej pomylić z kopią dodaną przez kupującego. Klasyczna kasa (z krótkim kodem).

Pełne źródło znajduje się pod adresem https://github.com/wppoland/plogins-bump.

== Installation ==

1. Prześlij do `/wp-content/plugins/bump` lub zainstaluj poprzez Wtyczki → Dodaj nowy.
2. Aktywuj. WooCommerce musi być aktywny.
3. Przejdź do WooCommerce → Bump, wybierz produkt, napisz kopię, włącz i zapisz.

== Screenshots ==

1. Oferta rabatowa nad metodami płatności przy kasie, z polem wyboru jednym kliknięciem, które dodaje produkt do zamówienia.
2. Ustawienia podbicia w WooCommerce: podbij produkt, nagłówek, etykietę pola wyboru, opis i opcjonalną cenę specjalną.

== Changelog ==

= 1.0.1 =
* Pierwsza wersja: podwyższenie zamówienia w ramach jednej transakcji z opcjonalnym zastąpieniem ceny.
