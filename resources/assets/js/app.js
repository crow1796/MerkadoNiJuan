(function(window, document, $, angular){

	$(function(){
		$('.contact-list-container').draggable({
			containment: 'window'
			});

		$('.contact-list-container').on('click', function(){
			$(this).toggleClass('active');
			if($(this).hasClass('active')){
				$('.contact-list-title #dropdown-icon')
					.removeClass()
					.addClass('fa fa-caret-up dropdown-icon');
			}else{
				$('.contact-list-title #dropdown-icon')
					.removeClass()
					.addClass('fa fa-caret-down dropdown-icon');
			}
		});

		$('.chatbox-title').on('click', function(){
			$(this).next().toggleClass('active');
		});

		$('.chatbox-control-minimize').on('click', function(){
			$(this).parent().next().addClass('active');
		});

		$('.chatbox-control-close').on('click', function(){
			$(this).parent().parent().remove();
		})
	});

	angular.module('lazymarket', []);

})(window, document, window.jQuery, window.angular);