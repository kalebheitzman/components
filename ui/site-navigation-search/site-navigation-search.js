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

		// /**
		//  * Detect clicks away from the menu to close submenus
		//  */
    // $('html').click(function() {
		// 	let showSearch = $('.site-navigation-search form').attr('data-show-search')
		// 	console.log(showSearch)
		// 	if ("true" === showSearch) {
		// 		$('.site-navigation-search form').attr('data-show-search', 'false')
		// 	}
		// })

  })
})(jQuery)
