((window, document, $, angular) ->

	class HeaderPanelController
		constructor: ->
			@load()
		load: ->
			$ ->
				$(window).on 'scroll', ->
					if $(@).scrollTop() > ($('.lazy-header-panel').height() + 50)
						$('.lazy-header-panel').css({
							'position': 'fixed',
							'width': '100%',
							'z-index': 1000
							})
					else
						$('.lazy-header-panel').css('position', 'static')
					on
				on
			on

	angular.module 'lazymarket'
			.controller 'headerPanelController', HeaderPanelController
	on
)(window, document, window.jQuery, window.angular)