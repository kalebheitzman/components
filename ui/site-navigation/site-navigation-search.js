;(function($) {
  $(function() {

		/**
		 * Detect search button click and either open the search form
		 * or submit the data that's been submitted in the search form
		 */
		$('.site-navigation-search-submit').click(function(e) {
			// get current show search value
			let showSearch = $(this).parent().attr('data-show-search')

			if ("false" === showSearch) {
				$(this).parent().attr('data-show-search', 'true')
				e.preventDefault();
			}
			else {

			}
		});

		/**
		 * Detect clicks away from the menu to close submenus
		 */
    $('html').click(function() {
			$('[data-submenu-open="true"]').attr('data-submenu-open', 'false')
		})

  })
})(jQuery)
