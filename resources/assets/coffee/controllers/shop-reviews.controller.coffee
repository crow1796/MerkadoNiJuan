((window, document, $, angular) ->
	class ShopReviewsController
		constructor: ->
			@load()
		load: ->
			$ ->
				$('.comment-read-more').on 'click', ->
					if !$(@).parent().hasClass('active')
						$(@).parent().addClass('active')
						$(@).addClass('active')
						$(@).text('Less')
					else
						$(@).parent().removeClass('active')
						$(@).removeClass('active')
						$(@).html('More <span class="fa fa-angle-double-down"></span>')
					on
				on
			on
	angular.module 'lazymarket'
			.controller 'shopReviewsController', [ShopReviewsController]
	on
)(window, document, window.jQuery, window.angular)