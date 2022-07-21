<style>
    <?php include get_template_directory() . '/assets/templates/footers/footer.css'; ?>
</style>
<footer class="container-fluid bg-footer pt-5">
<!-- Footer -->
<div class="row">
	<div class="col-12 col-sm-12 col-md-10 col-lg-10 mx-auto">
		<div class="row">
			<div class="col-12 col-sm-6 col-md-3 col-lg-2">

			<?php
			if (is_active_sidebar('logo_footer')) :
				dynamic_sidebar('logo_footer');
			endif; ?>
			</div>
			<div class="col-12 col-sm-6 col-md-3 col-lg-2">

				<?php
				if (is_active_sidebar('columna_1')) :
					dynamic_sidebar('columna_1');
				endif; ?>
			</div>

			<div class="col-12 col-sm-6 col-md-3 col-lg-2">
 
				<?php 
				if (is_active_sidebar('columna_2')) :
					dynamic_sidebar('columna_2');
				endif; ?>
			</div>

			<div class="col-12 col-sm-6 col-md-3 col-lg-2">

				<?php
				if (is_active_sidebar('columna_2_2')) :
					dynamic_sidebar('columna_2_2');
				endif; ?>
			</div>

			<div class="col-12 col-sm-6 col-md-3 col-lg-2">

				<?php
				if (is_active_sidebar('columna_3')) :
					dynamic_sidebar('columna_3');
				endif; ?>
			</div>
			
		</div>
	</div>

</div>

<div class="menu-pie-pagina col-12 col-sm-12 col-md-12 col-lg-12 text-center">
	<?php
	if (is_active_sidebar('columna_12')) :
		dynamic_sidebar('columna_12');
	endif;
	?>

</div>
</footer>