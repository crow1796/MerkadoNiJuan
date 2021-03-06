((window, document, $, angular) ->

	class SingleItemController
		constructor: (@singleItemFactory) ->
			@item = @singleItemFactory
			@imageIndex = 0
			@setCurrentImage(@imageIndex)
			@commentCount = parseInt @item.comments.length 
			@commentCount += parseInt $.map(@item.comments, (value, key) ->
				value.replies.length
			)
		setCurrentImageIndex: (index) ->
			@imageIndex = index
			@setCurrentImage()
			on
		setCurrentImage: ->
			@currentImage = @item.images[@imageIndex]
			on
		nextImageIndex: (event) ->
			event.preventDefault()
			if @imageIndex == (@item.images.length - 1)
				@imageIndex = 0 
				@setCurrentImage()
				return off
			@imageIndex++ if @imageIndex < @item.images.length
			@setCurrentImage()
			on
		prevImageIndex: (event) ->
			event.preventDefault()
			if @imageIndex == 0
				@imageIndex = (@item.images.length - 1) 
				@setCurrentImage()
				return off
			@imageIndex-- if @imageIndex > 0
			@setCurrentImage()
			on
		sendComment: (event) ->
			if event.keyCode == 13 && !event.shiftKey
				event.preventDefault()
				@commentContent = ''
			on
		bookmarkItem: ->
			on

	angular.module 'lazymarket'
			.controller 'singleItemController', ['singleItemFactory', SingleItemController]
	on
)(window, document, window.jQuery, window.angular)