			<!-- Footer -->
			<div id="footer">
				<div class="footer-inner">
					<div class="row gutter_wider clear">
									
					<section class="col col-lg-3 col-md-3 col-sm-6 col-xs-12">
						<?php if(!function_exists('dynamic_sidebar') || !dynamic_sidebar('footer-column-1')) ?>
					</section>
									
					<!-- Posts -->
					<section class="col col-lg-3 col-md-3 col-sm-6 col-xs-12">
						<?php if(!function_exists('dynamic_sidebar') || !dynamic_sidebar('footer-column-2')) ?>
					</section>
					<!-- /Posts -->
									
					<!-- About -->
					<section class="col col-lg-3 col-md-3 col-sm-6 col-xs-12">
						<?php if(!function_exists('dynamic_sidebar') || !dynamic_sidebar('footer-column-3')) ?>
					</section>
					<!-- /About -->
												
					<!-- Contact -->
					<section class="col col-lg-3 col-md-3 col-sm-6 col-xs-12">
						<?php if(!function_exists('dynamic_sidebar') || !dynamic_sidebar('footer-column-4')) ?>
					</section>
					<!-- /Contact -->
									
				</div>
				</div>
									
				<!-- Contact bar -->
				<div class="footer-inner">
					<div class="row footer-creds light align_items_bottom">
					<ul>
						<li>&copy; Volta. All rights reserved.</li>
					</ul>
					<ul class="icons">
						<li><a href="#" class="icon brands fa-twitter"><span class="label">Twitter</span></a></li>
						<li><a href="#" class="icon brands fa-facebook"><span class="label">Facebook</span></a></li>
						<li><a href="#" class="icon brands fa-instagram"><span class="label">Instagram</span></a></li>
						<li><a href="#" class="icon brands fa-linkedin"><span class="label">Linkedin</span></a></li>
						<li><a href="#" class="icon brands fa-youtube"><span class="label">YouTube</span></a></li>
					</ul>
				</div>
				</div>
				<!-- /Contact bar -->
			</div>
			<!-- /Footer -->
		
		<?php wp_footer(); ?>

	</body>
</html>
