;(function($) {
  $(function() { 
		/**
		 * Detect anchor click with submenu children
		 */
		$('[aria-haspopup="true"]').click(function(e) {
			// add an attribute specifiying menu is open
			let open = $(this).attr('aria-expanded')
			let state = open === 'false' ? 'true' : 'false'
			$(this).attr('aria-expanded', state) 

			// hide all other sub menus at this data level
			let dataLevel = $(this).attr('data-level')
			$('.has-sub-menu.level-' + dataLevel)
				.not($(this))
				.attr('aria-expanded', 'false')

			// // if submenu is open, stop click propogation
			if ($(this).attr('aria-expanded') === 'true') {
				e.preventDefault()
			}
			e.stopPropagation()
		});

		/**
		 * Detect clicks away from the menu to close submenus
		 */
    $('html').click(function() {
			$('[aria-expanded="true"]').attr('aria-expanded', 'false')
		})

		/**
		 * Toggle the hamburger menu item
		 */
		$('.nav-toggle').on('click', function() {
			$('.site-navigation-search').attr('data-show-search', 'false')
			$('.nav-mobile, .primary-menu').toggleClass('active')
			$(this).toggleClass('active')
		})

  })
})(jQuery)
