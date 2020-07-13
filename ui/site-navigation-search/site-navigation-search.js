;(function($) {
  $(function() {

		/**
		 * Detect search button click and either open the search form
		 * or submit the data that's been submitted in the search form
		 */
		$('.site-navigation-search-button').click(function(e) {
			// get current show search value
      let showSearch = $(this).attr('data-show-search')
      console.log(showSearch)

			// toggle search form
			if ("false" === showSearch) {
				$('.nav-mobile, .nav-toggle, .primary-menu').removeClass('active')
				$('.site-navigation-search-button, .site-navigation-search-box').attr('data-show-search', 'true')
				setTimeout(function() {
					$('.site-navigation-search-box .search-text-field').focus()
				}, 250);

			}
			else {
				$('.site-navigation-search-button, .site-navigation-search-box').attr('data-show-search', 'false')
			}

			e.preventDefault();
		});

  })
})(jQuery)
