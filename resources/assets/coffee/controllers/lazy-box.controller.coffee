((window, document, $, angular) ->
	class LazyBoxController
		constructor: ->
			@load()
		load: ->
			$ ->
				lazyBoxActive = false
				$('.lazy-box-content').on 'mouseenter', ->
					lazyBoxActive = true
					on
				.on 'mouseleave', =>
					lazyBoxActive = false
					on

				$('[data-toggle="lazy-box"]').on 'click', (event) ->
					event.preventDefault()
					$($(@).attr('href') + ' .lazy-box-content img')
						.attr('src', $(@).children('img').attr('src'))
					$($(@).attr('href')).fadeIn('fast')
					on

				$('.lazy-box-wrapper').on 'click', ->
					if lazyBoxActive is off
						$(@).fadeOut('fast')
					on
				on
			on

	angular.module 'lazymarket'
			.controller 'lazyboxController', [LazyBoxController]
	on
)(window, document, window.jQuery, window.angular)