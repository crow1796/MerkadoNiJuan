((window, document, $, angular) ->
	class NotificationsController
		constructor: ->
			@load()
		load: ->
			$ ->
				$('.notifications-toggle').on 'click', (event) ->
					event.preventDefault()
					$(@).parent().toggleClass('active');
					on
				on
			on
	angular.module 'lazymarket'
			.controller 'notificationsController', [NotificationsController]
	on
)(window, document, window.jQuery, window.angular)