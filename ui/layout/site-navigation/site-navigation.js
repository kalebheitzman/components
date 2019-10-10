;(function($) {
  $(function() {

		// detect menu with submenu click
		$('.has-sub-menu.level-0').click(function(e) {
			// add an attribute specifiying menu is open
			let open = $(this).attr('data-submenu-open')
			let state = open === 'false' ? 'true' : 'false'
			$(this).attr('data-submenu-open', state)

			// hide all other sub menus
			$('.has-sub-menu.level-0').not($(this)).attr('data-submenu-open', 'false')

			// // if submenu is open, stop click propogation
			console.log($(this).attr('data-submenu-open'))
			if ($(this).attr('data-submenu-open') === 'true') {
				e.preventDefault()
			}
			e.stopPropagation()
		});

		// $('nav ul li > a:not(:only-child)').click(function(e) {
    //   $(this)
    //     .siblings('.sub-menu')
    //     .toggle()
    //   $('.sub-menu')
    //     .not($(this).siblings())
    //     .hide()
		// 	e.stopPropagation()
		// 	e.preventDefault()
		// })

    $('html').click(function() {
			$('[data-submenu-open="true"]').attr('data-submenu-open', 'false')
		})

		$('.nav-toggle').on('click', function() {
			this.classList.toggle('active')
		})

		$('.nav-toggle').click(function() {
			$('nav ul').toggle()
		})

  })
})(jQuery)
