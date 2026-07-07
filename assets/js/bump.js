/**
 * Plogins Bump — checkout order-bump toggle.
 *
 * On checkbox change: POST add/remove to the bump_toggle endpoint, then trigger
 * WooCommerce's own `update_checkout` so every total (and the amount sent to the
 * gateway) is recalculated natively. jQuery is a dependency of the checkout page,
 * so we reuse it for the update_checkout event.
 *
 * ponytail: no build step, no framework — one delegated handler.
 */
(function ($) {
	'use strict';

	if (typeof window.ploginsBump === 'undefined') {
		return;
	}

	var cfg = window.ploginsBump;
	var busy = false;

	$(document.body).on('change', '.plogins-bump__checkbox', function () {
		var $box = $(this);
		var $wrap = $box.closest('.plogins-bump');

		if (busy) {
			// Revert the visual state; a request is already in flight.
			$box.prop('checked', !$box.prop('checked'));
			return;
		}

		busy = true;
		$wrap.addClass('plogins-bump--loading');

		$.ajax({
			type: 'POST',
			url: cfg.ajaxUrl,
			data: {
				action: cfg.action,
				nonce: $wrap.data('nonce') || cfg.nonce,
				add: $box.prop('checked') ? '1' : '0'
			}
		})
			.done(function (res) {
				var inCart = !!(res && res.data && res.data.in_cart);
				$box.prop('checked', inCart);
				$wrap.toggleClass('plogins-bump--active', inCart);
				$(document.body).trigger('update_checkout');
			})
			.fail(function () {
				// Roll back the checkbox so it reflects the real cart state.
				$box.prop('checked', !$box.prop('checked'));
			})
			.always(function () {
				busy = false;
				$wrap.removeClass('plogins-bump--loading');
			});
	});

	// After each checkout refresh the offer box is re-rendered by the server with
	// the correct checked state, so no extra re-sync is needed here.
})(jQuery);
