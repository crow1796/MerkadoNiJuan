((window, document, $, angular) ->

	class ContactsFactory
		constructor: ->
			contacts = {
				'recent': [
					{
						'name': 'Lorem'
					},
					{
						'name': 'Ipsum'
					},
					{
						'name': 'Dolor'
					},
					{
						'name': 'Sit'
					}	
				],
				'followed': [
					{
						'name': 'Amet'
					},
					{
						'name': 'Consectuetor'
					},
					{
						'name': 'Intex'
					},
					{
						'name': 'Ododz'
					},
					{
						'name': 'Gwapodz'
					},
					{
						'name': 'Weadser'
					},
					{
						'name': 'Tersad'
					},
					{
						'name': 'Uyter'
					}
				]
			}
			return contacts

	angular.module 'lazymarket'
			.factory 'contactsFactory', [ContactsFactory]

)(window, document, window.jQuery, window.angular)