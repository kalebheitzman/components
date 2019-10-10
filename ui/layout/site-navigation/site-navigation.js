;(function($) {
  $(function() {

		$('nav ul li > a:not(:only-child)').click(function(e) {
      $(this)
        .siblings('.sub-menu')
        .toggle()
      $('.sub-menu')
        .not($(this).siblings())
        .hide()
			e.stopPropagation()
			e.preventDefault()
		})

    $('html').click(function() {
      $('.sub-menu').hide()
		})

		$('.nav-toggle').on('click', function() {
			this.classList.toggle('active')
		})

		$('.nav-toggle').click(function() {
			$('nav ul').toggle()
		})

  })
})(jQuery)
