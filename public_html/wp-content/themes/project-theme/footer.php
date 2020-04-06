<?php
use App\Helper\WordpressHelper;
$wordpress = new WordpressHelper;
?>

			</main>

			<footer class="u-section c-footer">

				<div class="c-footer__inner">

					<!-- Footer CTA -->
					<?php include('partials/footer-cta.php'); ?>

					<!-- Social links -->
					<?php include('partials/social-icons.php'); ?>

					<div class="u-bg-color--primary-base u-l-horizontal-padding u-l-vertical-padding--small">

						<div class="u-l-container u-l-container--row">
							
							<div class="c-footer__column">
								<header class="c-site-title">
									<h2 class="c-site-title__name">
										<a href="/" class="c-site-title__link">
											<svg class="c-site-title__icon">
												<use xlink:href='#shape-arcollect-logo'></use>
											</svg>
										</a>
									</h2>
								</header>
							</div>
							
							<div class="c-footer__column">
								<div class="c-footer__inner-row">					
									<div class="u-l-container">		
										<p class="c-footer__copyright"><?php echo $themeData['copyright']['details'];?></p>
									</div>
								</div>
							<div>

						</div>

					</div>

				</div>


			</footer>

	 	</div>

		<?php 
		wp_footer(); 

		// $googleAnalyticID = get_field('google_analytics', 'option');
		
		// //Google Analytics
		// $template = 'c-google-analytics';
		// $data = [
		// 	'UA' => $googleAnalyticID
		// ];

		// echo $render->view('Components/' . $template, $data);

		?>
	</body>
</html>
