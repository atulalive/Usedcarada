		<!-- Back to top -->
		<a href="#top" id="back-to-top" ><i class="fa fa-rocket"></i></a>
		
		<!-- JQuery js-->
		<!-- <script src="<?php echo URL_JS.URL_SEPARATOR.'jquery-3.2.1.min.js'; ?>"></script> -->
		<script src="<?php echo base_url().URL_SEPARATOR; ?>assets/js/jquery-3.2.1.min.js"></script>

		<!-- Bootstrap js -->
		<script src="<?php echo base_url().URL_SEPARATOR; ?>assets/plugins/bootstrap-4.3.1/js/popper.min.js"></script>
		<script src="<?php echo base_url().URL_SEPARATOR; ?>assets/plugins/bootstrap-4.3.1/js/bootstrap.min.js"></script>

		<!--JQueryVehiclerkline Js-->
		<script src="<?php echo base_url().URL_SEPARATOR; ?>assets/js/jquery.sparkline.min.js"></script>

		<!-- Circle Progress Js-->
		<script src="<?php echo base_url().URL_SEPARATOR; ?>assets/js/circle-progress.min.js"></script>

		<!-- Star Rating Js-->
		<script src="<?php echo base_url().URL_SEPARATOR; ?> assets/plugins/rating/jquery.rating-stars.js"></script>

		<!-- P-scroll js-->
		<script src="<?php echo base_url().URL_SEPARATOR; ?>assets/plugins/p-scrollbar/p-scrollbar.js"></script>
		<script src="<?php echo base_url().URL_SEPARATOR; ?>assets/plugins/p-scrollbar/p-scroll1.js"></script>

		<!-- Fullside-menu Js-->
		<script src="<?php echo base_url().URL_SEPARATOR; ?>assets/plugins/sidemenu/sidemenu.js"></script>

		<!--Select2 js -->
		<script src="<?php echo base_url().URL_SEPARATOR; ?>assets/plugins/select2/select2.full.min.js"></script>
		<script src="<?php echo base_url().URL_SEPARATOR; ?>assets/js/select2.js"></script>

		<!-- Timepicker js -->
		<script src="<?php echo base_url().URL_SEPARATOR; ?>assets/plugins/time-picker/jquery.timepicker.js"></script>
		<script src="<?php echo base_url().URL_SEPARATOR; ?>assets/plugins/time-picker/toggles.min.js"></script>

		<!-- Datepicker js -->
		<script src="<?php echo base_url().URL_SEPARATOR; ?>assets/plugins/date-picker/spectrum.js"></script>
		<script src="<?php echo base_url().URL_SEPARATOR; ?>assets/plugins/date-picker/jquery-ui.js"></script>
		<script src="<?php echo base_url().URL_SEPARATOR; ?>assets/plugins/input-mask/jquery.maskedinput.js"></script>

		<!-- Inline js -->
		<script src="<?php echo base_url().URL_SEPARATOR; ?>assets/js/formelements.js"></script>

		<!-- file uploads js -->
        <script src="<?php echo base_url().URL_SEPARATOR; ?>assets/plugins/fileuploads/js/fileupload.js"></script>
		
		<!--Counters -->
		<script src="<?php echo base_url().URL_SEPARATOR; ?>assets/plugins/counters/counterup.min.js"></script>
		<script src="<?php echo base_url().URL_SEPARATOR; ?>assets/plugins/counters/waypoints.min.js"></script>

		
		
		<!-- Custom, Common Js-->
		
		<script src="<?php echo base_url().URL_SEPARATOR; ?>assets/js/admin-custom.js"></script>
		<script src="<?php echo base_url().URL_SEPARATOR; ?>assets/js/cms/common.js"></script>
		<!-- <script src="<?php echo URL_JS.URL_SEPARATOR.'admin-custom.js'; ?>"></script> -->
		<!-- <script src="<?php echo URL_REL_CMS_JS.'common.js'; ?>"></script> -->
		<script src="//cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.js"></script>
		<script>
			
			$.ajaxSetup({
				headers: {
					'X-CSRF-TOKEN': $('meta[name="X-CSRF-TOKEN"]').attr('content')
				}
			});
			
			var Body = $('body');

		</script>
  <script src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>
	</body>
</html>