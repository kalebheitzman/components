;(function($) {
  $(function() {

		/**
		 * Detect anchor click with submenu children
		 */
		$('.has-sub-menu').click(function(e) {
			// add an attribute specifiying menu is open
			let open = $(this).attr('data-submenu-open')
			let state = open === 'false' ? 'true' : 'false'
			$(this).attr('data-submenu-open', state)

			// hide all other sub menus at this data level
			let dataLevel = $(this).attr('data-level')
			$('.has-sub-menu.level-' + dataLevel)
				.not($(this))
				.attr('data-submenu-open', 'false')

			// // if submenu is open, stop click propogation
			if ($(this).attr('data-submenu-open') === 'true') {
				e.preventDefault()
			}
			e.stopPropagation()
		});

		/**
		 * Detect clicks away from the menu to close submenus
		 */
    $('html').click(function() {
			$('[data-submenu-open="true"]').attr('data-submenu-open', 'false')
		})

		/**
		 * Toggle the hamburger menu item
		 */
		$('.nav-toggle').on('click', function() {
			this.classList.toggle('active')
			$('.primary-menu').toggleClass('active')
		})

		// /**
		//  *
		//  */
		// $('.nav-toggle').click(function() {
		// 	$('nav ul').toggle()
		// })

  })
})(jQuery)
