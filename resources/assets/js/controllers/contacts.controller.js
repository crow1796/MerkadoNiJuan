(function(window, document, $, angular) {

	let ContactsController = function(){
		let vm = this;
		vm.count = 23;
	};
	
	angular.module('lazymarket')
			.controller('contactsController', [ContactsController]);

})(window, document, window.jQuery, window.angular);