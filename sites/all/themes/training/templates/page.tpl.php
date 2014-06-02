<?php

$template_path = path_to_theme();
drupal_add_js($template_path.'/js/jquery.browser.js');
drupal_add_js($template_path.'/js/cufon-yui.js');
drupal_add_js($template_path.'/js/cufon-replace.js');
drupal_add_js($template_path.'/js/Open_Sans_400.font.js');
drupal_add_js($template_path.'/js/Open_Sans_Light_300.font.js');
drupal_add_js($template_path.'/js/Open_Sans_Semibold_600.font.js');
drupal_add_js($template_path.'/js/tms-0.3.js');
drupal_add_js($template_path.'/js/tms_presets.js');
drupal_add_js($template_path.'/js/jquery.easing.1.3.js');
drupal_add_js($template_path.'/js/FF-cash.js');
?>
<!-- header -->
	<div class="bg">
		<div class="main">
			<header>
				<?php print render($page['header']);?>
			</header>
<!-- content --><div class="ic">More Website Templates  at TemplateMonster.com!</div>
			<section id="content">
				<div class="padding">
					<?php print render($page['markup']);?>
					<div class="wrapper">
						<div class="col-3">
							<div class="indent">
<!--								<h2>Our Mission</h2>
								<p class="color-4 p1">Donec vitae massa sit amet lectus condimentum aliquam vestibulum tempor nunc vel mi laoreet nec condimentum mauris convallis. Praesent lobortis, lectus a viverra faucibus, urna turpis sodales purus, magnaorem ipsum dolor ser adipiscing elit sed diam nonummy nibh euismod sit amet ornare urna augue ut mauris.</p>
								<div class="wrapper">
									<figure class="img-indent3"><img src="images/page1-img1.png" alt="" /></figure>
									<div class="extra-wrap">
										<div class="indent2">
											Cras placerat, risus ac porta auctor, dui neque varius libero, sed rutrum diam mauris sed lorem. Ut at risus eu dui pretium sodales proin fermentum condimentum eros quis tincidunt fraesent eleifend tempor nisi, in adipiscing felis molestie vitae. Sed et massa justo. Pellentesque turpis lorem, ornare sit amet vulputate at, consectetur
										</div>
									</div>
								</div>
								<a class="button-2" href="#">Read More</a>-->
<?php print render($page['content']);?>
							</div>
						</div>
						<?php print render($page['navigation']);?>
					</div>
				</div>
			</section>
<!-- footer -->
			<footer>
				<?php print render($page['footer']); ?>
			</footer>
		</div>
	</div>