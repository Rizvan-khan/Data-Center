<head>
<style>
.footer {
   position: fixed;
   left: 0;
   bottom: 0;
   width: 100%;
   background: rgb(0 0 0 / 20%);
   color: white;
   text-align: center;
   padding: 7px;
}
</style>
</head>
<footer class="footer">
			<p class="mb-0">Copyright © 2022. Hosting All right reserved.</p>
		</footer>
	</div>
	
	<script src="{{ asset('AdminCss/assets/js/bootstrap.bundle.min.js')}}"></script>
	<!--plugins-->
	<!--plugins-->
	<script src="{{ asset('AdminCss/assets/js/jquery.min.js')}}"></script>
	<script src="{{ asset('AdminCss/assets/plugins/simplebar/js/simplebar.min.js')}}"></script>
	<script src="{{ asset('AdminCss/assets/plugins/metismenu/js/metisMenu.min.js')}}"></script>
	<script src="{{ asset('AdminCss/assets/plugins/perfect-scrollbar/js/perfect-scrollbar.js')}}"></script>
	<script src="{{ asset('AdminCss/assets/plugins/datatable/js/jquery.dataTables.min.js')}}"></script>
	<script src="{{ asset('AdminCss/assets/plugins/datatable/js/dataTables.bootstrap5.min.js')}}"></script>
	
	<script src="{{ asset('AdminCss/assets/plugins/vectormap/jquery-jvectormap-2.0.2.min.js')}}"></script>
	<script src="{{ asset('AdminCss/assets/plugins/vectormap/jquery-jvectormap-world-mill-en.js')}}"></script>
	
	<script src="{{ asset('AdminCss/assets/plugins/highcharts/js/exporting.js')}}"></script>
	<script src="{{ asset('AdminCss/assets/plugins/highcharts/js/variable-pie.js')}}"></script>
	<script src="{{ asset('AdminCss/assets/plugins/highcharts/js/export-data.js')}}"></script>
	<script src="{{ asset('AdminCss/assets/plugins/highcharts/js/accessibility.js')}}"></script>
	<script src="{{ asset('AdminCss/assets/plugins/apexcharts-bundle/js/apexcharts.min.js')}}"></script>
		<script src="{{ asset('AdminCss/assets/plugins/sparkline-charts/jquery.sparkline.min.js')}}"></script>
	<script src="{{ asset('AdminCss/assets/js/dashboard-sales.js')}}"></script>
	<!--app JS-->
	<script src="{{ asset('AdminCss/assets/js/index.js')}}"></script>
	<script src="{{ asset('AdminCss/assets/plugins/jquery-knob/jquery.knob.js')}}"></script>
	<script src="{{ asset('AdminCss/assets/plugins/jquery-knob/excanvas.js')}}"></script>
	<script src="{{ asset('AdminCss/assets/plugins/jquery.easy-pie-chart/jquery.easypiechart.min.js')}}"></script>
	<script src="{{ asset('AdminCss/assets/plugins/chartjs/js/Chart.min.js')}}"></script>
	<script>
		new PerfectScrollbar('.customers-list');
		new PerfectScrollbar('.store-metrics');
		new PerfectScrollbar('.product-list-2');
	</script>
	
	<script>
	  
	  $(document).ready(function() {
	  $('#example').DataTable()
	});
	  
	</script>
	
	
	<script>
		$(document).ready(function() {
			var table = $('#example2').DataTable( {
				lengthChange: false,
				buttons: [ 'copy', 'excel', 'pdf', 'print']
			} );
		 
			table.buttons().container()
				.appendTo( '#example2_wrapper .col-md-6:eq(0)' );
		} );
	</script>
	<!--app JS-->
	
	<script>
		  $(function() {
			  $(".knob").knob();
		  });
	  </script>
	<script src="{{ asset('AdminCss/assets/js/app.js"></script>

	
</body>
</html>




