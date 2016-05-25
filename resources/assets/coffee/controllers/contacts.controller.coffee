((window, document, $, angular) ->

	class ContactsController
		toggled: false
		currentCategory: off
		constructor: (@contactsFactory, @flattenService) ->
			@contacts = @flattenService.flatten(@contactsFactory)
			@load()
		toggleContacts: (event, contact)->
			event.preventDefault()
			@currentContact = contact
			@toggled = true
			@toggledGlobal = false
			off
		toggleGlobalChatbox: (event, category) ->
			event.preventDefault()
			if category isnt null
				@currentCategory = category
				@contacts = @contactsFactory[category]
				return on
			@contacts = @flattenService.flatten(@contactsFactory)
			@toggledGlobal = true
			@toggled = false
			off
		closeChatbox: (event) ->
			event.stopPropagation()
			@toggled = false
			off
		closeGlobalChatbox: (event) ->
			event.stopPropagation()
			@toggledGlobal = false
			off
		changeCategory: (event, category) ->
			event.preventDefault()
			if category isnt null
				@currentCategory = category
				@contacts = @contactsFactory[category]
				return on
			@contacts = @flattenService.flatten(@contactsFactory)
			off
		load: ->
			$ ->
				$('.contact-list-container').draggable({
					containment: 'window',
					start: (event, ui) -> 
						$('.contact-list-title').addClass('no-click')
					,
					stop: (event, ui) ->
						setTimeout ->
							$('.contact-list-title').removeClass('no-click')
						, 300
					})

				$('.contact-list-title').on 'click', ->
					if $(@).hasClass('no-click')
						return off
					$(this).parent().parent().toggleClass('active')
					if $(this).parent().parent().hasClass('active')
						$('.contact-list-title #dropdown-icon')
							.removeClass()
							.addClass('fa fa-caret-up dropdown-icon')
					else
						$('.contact-list-title #dropdown-icon')
							.removeClass()
							.addClass('fa fa-caret-down dropdown-icon')
					on

				$('.chatbox-title').on 'click', ->
					if $('.contact-list-title').hasClass('no-click')
						return off
					$(this).next().toggleClass('active')
					$('.chatbox-content').scrollTop(document.getElementById('chatbox-content').scrollHeight);
					on

				$('.contact-categories .category a').on 'click', ->
					$.each($('.contact-categories .category'), ->
						$(this).removeClass('active')
					)
					$(this).parent().addClass('active')
					on

				on #jQuery ready return


	angular.module 'lazymarket'
			.controller 'contactsController', ['contactsFactory', 'flattenService', ContactsController]

	on #IIFE return
)(window, document, window.jQuery, window.angular)