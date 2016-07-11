window.onload = function () {
	
	// register the grid component
	Vue.component('datepicker', {
		template: '#datepicker-template',
		replace: true,
		props: ['data', 'columns', 'filter-key'],
		data: function () {
			
		},
		compiled: function () {
			// initialize reverse state
			
		},
		methods: {
			
		}
	})

	// bootstrap the demo
	var datepicker = new Vue({
		el: '#datepicker',
		data: {
			selDate : ''
		}
	})
	
	$('#datetimepicker2').datetimepicker();
	
}