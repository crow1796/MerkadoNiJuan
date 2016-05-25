((window, document, $, angular) ->

	class AdminDashboardController
		constructor: ->
			@load()
		load: ->
			$ ->
				$('#lazy-sidebar-admin-toggle').on 'click', (event) ->
					$($(@).data('target')).toggleClass('toggled');
					off

				$('[data-toggle="lazy-sidebar-menu"]').on 'click', ->
					$(@).parent().toggleClass('active')
					on
				on
			on
	
	angular.module 'lazymarket-admin'
			.controller 'adminDashboardController', AdminDashboardController
	on
)(window, document, window.jQuery, window.angular)