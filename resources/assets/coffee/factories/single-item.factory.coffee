((window, document, $, angular) ->
	class SingleItemFactory
		constructor: ->
			item = {
				'id': 1,
				'images': [
					'images/crow-wallpaper-10.jpg',
					'images/bg-02.jpg',
					'images/bg-03.jpg',
					'images/bg-04.jpg',
					'images/bg-04.jpg',
					'images/bg-03.jpg',
					'images/bg-02.jpg',
					'images/bg-01.jpg',
				],
				'name': 'Item 1',
				'price': 15000,
				'discount': .3,
				'views': 374234,
				'description': 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tenetur minus in repellendus recusandae ullam aut quis ducimus deserunt, deleniti quidem illum molestiae. Est optio voluptas perferendis a illo quidem facilis.',
				'stocks': 15,
				'posted_at': 'May 18, 2016',
				'location': 'Cagayan de Oro',
				'category': 'Pets',
				'comments': [
					{
						'name': 'Admin Admin',
						'commented_at': 'May 18, 2016',
						'content': "Lorem ipsum dolor sit amet, consectetur 
									adipisicing elit. Reiciendis voluptatum 
									voluptatibus rem quaerat perferendis! 
									Ducimus perspiciatis tempore odio minima, 
									rerum sapiente dolor, nihil, ut optio vitae 
									illo. Ut, autem ipsum."
						'replies': [
							{
								'name': 'Admin Admin',
								'commented_at': 'May 18, 2016',
								'content': "Lorem ipsum dolor sit amet, 
											consectetur adipisicing elit. 
											Reiciendis voluptatum voluptatibus rem 
											quaerat perferendis! 
											Ducimus perspiciatis 
											tempore odio minima, rerum sapiente 
											dolor, nihil, ut optio vitae illo. Ut, autem ipsum."
							},
							{
								'name': 'Fucc yu',
								'commented_at': '1 hour ago',
								'content': "Lorem ipsum dolor sit amet, 
											consectetur adipisicing elit. 
											Reiciendis voluptatum voluptatibus 
											rem quaerat perferendis! Ducimus."
							},
							{
								'name': 'Fucc yu',
								'commented_at': '1 hour ago',
								'content': "Lorem ipsum dolor sit amet, 
											consectetur adipisicing elit. 
											Reiciendis voluptatum voluptatibus 
											rem quaerat perferendis! Ducimus."
							}
						]
					}
				]
			}
			return item

	angular.module 'lazymarket'
			.factory 'singleItemFactory', SingleItemFactory
	on
)(window, document, window.jQuery, window.angular)