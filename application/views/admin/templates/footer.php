
	<script>
        ClassicEditor
            .create( document.querySelector( '#editor' ) )
            .catch( error => {
                console.error( error );
            } );
    </script>
		
		<!-- Required jQuery first, then Bootstrap Bundle JS -->
		<script src="<?php echo base_url('assets/admin/js/jquery.min.js'); ?>"></script>
		<script src="<?php echo base_url('assets/admin/js/bootstrap.bundle.min.js'); ?>"></script>
		<script src="<?php echo base_url('assets/admin/js/modernizr.js'); ?>"></script>
		<script src="<?php echo base_url('assets/admin/'); ?>js/moment.js"></script>
		
		<!-- Megamenu JS -->
		<script src="<?php echo base_url('assets/admin/vendor/megamenu/js/megamenu.js'); ?>"></script>
		<script src="<?php echo base_url('assets/admin/vendor/megamenu/js/custom.js'); ?>"></script>

		<!-- Slimscroll JS -->
		<script src="<?php echo base_url('assets/admin/vendor/slimscroll/slimscroll.min.js'); ?>"></script>
		<script src="<?php echo base_url('assets/admin/vendor/slimscroll/custom-scrollbar.js'); ?>"></script>

		<!-- Search Filter JS -->
		<script src="<?php echo base_url('assets/admin/vendor/search-filter/search-filter.js'); ?>"></script>
		<script src="<?php echo base_url('assets/admin/vendor/search-filter/custom-search-filter.js'); ?>"></script>

		<!-- Apex Charts -->
		<script src="<?php echo base_url('assets/admin/vendor/apex/apexcharts.min.js'); ?>"></script>
		<script src="<?php echo base_url('assets/admin/vendor/apex/custom/home/salesGraph.js'); ?>"></script>
		<script src="<?php echo base_url('assets/admin/vendor/apex/custom/home/ordersGraph.js'); ?>"></script>
		<script src="<?php echo base_url('assets/admin/vendor/apex/custom/home/earningsGraph.js'); ?>"></script>
		<script src="<?php echo base_url('assets/admin/vendor/apex/custom/home/visitorsGraph.js'); ?>"></script>
		<script src="<?php echo base_url('assets/admin/vendor/apex/custom/home/customersGraph.js'); ?>"></script>
		<script src="<?php echo base_url('assets/admin/vendor/apex/custom/home/sparkline.js'); ?>"></script>

		<!-- Circleful Charts -->
		<script src="<?php echo base_url('assets/admin/vendor/circliful/circliful.min.js'); ?>"></script>
		<script src="<?php echo base_url('assets/admin/vendor/circliful/circliful.custom.js'); ?>"></script>

		<!-- Main Js Required -->
		<script src="<?php echo base_url('assets/admin/js/main.js'); ?>"></script>

        <!-- Data Tables -->
		<script src="<?php echo base_url('assets/admin/vendor/datatables/dataTables.min.js') ?>"></script>
		<script src="<?php echo base_url('assets/admin/vendor/datatables/dataTables.bootstrap.min.js') ?>"></script>
		
		<!-- Custom Data tables -->
		<script src="<?php echo base_url('assets/admin/vendor/datatables/custom/custom-datatables.js') ?>"></script>
		<script src="<?php echo base_url('assets/admin/vendor/datatables/custom/fixedHeader.js') ?>"></script>

		<!-- Download / CSV / Copy / Print -->
		<script src="<?php echo base_url('assets/admin/vendor/datatables/buttons.min.js') ?>"></script>
		<script src="<?php echo base_url('assets/admin/vendor/datatables/jszip.min.js') ?>"></script>
		<script src="<?php echo base_url('assets/admin/vendor/datatables/pdfmake.min.js') ?>"></script>
		<script src="<?php echo base_url('assets/admin/vendor/datatables/vfs_fonts.js') ?>"></script>
		<script src="<?php echo base_url('assets/admin/vendor/datatables/html5.min.js') ?>"></script>
        <script src="<?php echo base_url('assets/admin/vendor/datatables/buttons.print.min.js') ?>"></script>		
				

		<!-- Rating JS -->
		<script src="<?php echo base_url('assets/admin/vendor/rating/raty.js') ?>"></script>
		<script src="<?php echo base_url('assets/admin/vendor/rating/raty-custom.js') ?>"></script>

		<!-- Steps wizard JS -->
		<script src="<?php echo base_url('assets/admin/vendor/wizard/jquery.steps.min.js') ?>"></script>
		<script src="<?php echo base_url('assets/admin/vendor/wizard/jquery.steps.custom.js') ?>"></script>

		<!-- Summernote JS -->
		<script src="<?php echo base_url('assets/admin/vendor/summernote/summernote-bs4.js') ?>"></script>

		<!-- Bootstrap Select JS -->
		<script src="<?php echo base_url('assets/admin/vendor/bs-select/bs-select.min.js') ?>"></script>
		<script src="<?php echo base_url('assets/admin/vendor/bs-select/bs-select-custom.js') ?>"></script>

		<!-- Dropzone JS -->
		<script src="vendor/dropzone/dropzone.min.js"></script>

		<!-- Input Tags JS -->
		<script src="<?php echo base_url('assets/admin/vendor/input-tags/tagsinput.min.js') ?>"></script>
		<script src="<?php echo base_url('assets/admin/vendor/input-tags/typeahead.js') ?>"></script>
		<script src="<?php echo base_url('assets/admin/vendor/input-tags/tagsinput-custom.js') ?>"></script>

		<!-- Main Js Required -->
		<script src="<?php echo base_url('assets/admin/js/main.js') ?>"></script>

		<script>

			// Summernote
			$(document).ready(function() {
				$('.summernote').summernote({
					height: 120,
					tabsize: 2,
					focus: true,
					toolbar: [
	          ['font', ['bold', 'underline', 'clear']],
	          ['para', ['ul', 'ol']],
	          ['insert', ['link', 'picture', 'video']],
	          ['view', ['fullscreen', 'codeview', 'help']],
	        ]
				});
			});

		</script>

	</body>		

	</body>
</html>