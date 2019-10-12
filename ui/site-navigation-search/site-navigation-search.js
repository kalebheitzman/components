;(function($) {
  $(function() {

		/**
		 * Detect search button click and either open the search form
		 * or submit the data that's been submitted in the search form
		 */
		$('.site-navigation-search-submit').click(function(e) {
			// get current show search value
			let showSearch = $('.site-navigation-search').attr('data-show-search')

			// toggle search form
			if ("false" === showSearch) {
				$('.nav-mobile, .nav-toggle, .primary-menu').removeClass('active')
				$('.site-navigation-search').attr('data-show-search', 'true')
				setTimeout(function() {
					$('.site-navigation-search .search-text-field').focus()
				}, 250);

			}
			else {
				$('.site-navigation-search').attr('data-show-search', 'false')
			}

			e.preventDefault();
		});

  })
})(jQuery)
