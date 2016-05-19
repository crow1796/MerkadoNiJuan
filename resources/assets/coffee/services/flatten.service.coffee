((window, document, $, angular) ->

	class FlattenService
		flatten: (obj) ->
			tmp = $.map(obj, (value, $index) ->
				value 
			)
			tmp

	angular.module('lazymarket')
			.service('flattenService', [FlattenService])

)(window, document, window.jQuery, window.angular)