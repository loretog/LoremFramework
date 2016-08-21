<?php $template_url = ROOT_URL . "/templates/typed" ?>
<!DOCTYPE HTML>
<html>
	<head>
		<title>No Sidebar - Strongly Typed by HTML5 UP</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
		<link rel="stylesheet" href="<?php echo $template_url ?>/assets/css/main.css" />
		<!--[if lte IE 8]><link rel="stylesheet" href="assets/css/ie8.css" /><![endif]-->
	</head>
	<body class="no-sidebar">
		<div id="page-wrapper">

			<?php include 'header.php'; ?>

			<!-- Main -->
				<div id="main-wrapper">
					<div id="main" class="container">
						<div id="content">
							<div class="row">
								<h1>Products</h1>
							</div>
							<div class="row">			
							<?php while( $product = $products->fetch_object() ) : ?>							
								<div class="4u 12u(mobile)">
									<!-- Feature -->
										<section>
											<a href="#" class="image featured"><img src="<?php echo $template_url ?>/images/pic01.jpg" alt="" /></a>
											<header>
												<h3><?php echo $product->ProductName ?> <span style="float: right;">Php <?php echo $product->Price ?></span></h3>
											</header>
											<div class="clear: both;"></div>
											<p>This is <strong>Strongly Typed</strong>, a free, fully responsive site template
											by <a href="http://html5up.net">HTML5 UP</a>. Free for personal and commercial use under the
											<a href="http://html5up.net/license">CCA 3.0 license</a>.</p>
										</section>
								</div>						
							<?php endwhile; ?>
							</div>							
						</div>
					</div>
				</div>

			<!-- Footer -->
				<div id="footer-wrapper">
					<div id="footer" class="container">
						<header>
							<h2>Questions or comments? <strong>Get in touch:</strong></h2>
						</header>
						<div class="row">
							<div class="6u 12u(mobile)">
								<section>
									<form method="post" action="#">
										<div class="row 50%">
											<div class="6u 12u(mobile)">
												<input name="name" placeholder="Name" type="text" />
											</div>
											<div class="6u 12u(mobile)">
												<input name="email" placeholder="Email" type="text" />
											</div>
										</div>
										<div class="row 50%">
											<div class="12u">
												<textarea name="message" placeholder="Message"></textarea>
											</div>
										</div>
										<div class="row 50%">
											<div class="12u">
												<a href="#" class="form-button-submit button icon fa-envelope">Send Message</a>
											</div>
										</div>
									</form>
								</section>
							</div>
							<div class="6u 12u(mobile)">
								<section>
									<p>Erat lorem ipsum veroeros consequat magna tempus lorem ipsum consequat Phaselamet
									mollis tortor congue. Sed quis mauris sit amet magna accumsan tristique. Curabitur
									leo nibh, rutrum eu malesuada.</p>
									<div class="row">
										<div class="6u 12u(mobile)">
											<ul class="icons">
												<li class="icon fa-home">
													1234 Somewhere Road<br />
													Nashville, TN 00000<br />
													USA
												</li>
												<li class="icon fa-phone">
													(000) 000-0000
												</li>
												<li class="icon fa-envelope">
													<a href="#">info@untitled.tld</a>
												</li>
											</ul>
										</div>
										<div class="6u 12u(mobile)">
											<ul class="icons">
												<li class="icon fa-twitter">
													<a href="#">@untitled-tld</a>
												</li>
												<li class="icon fa-instagram">
													<a href="#">instagram.com/untitled-tld</a>
												</li>
												<li class="icon fa-dribbble">
													<a href="#">dribbble.com/untitled-tld</a>
												</li>
												<li class="icon fa-facebook">
													<a href="#">facebook.com/untitled-tld</a>
												</li>
											</ul>
										</div>
									</div>
								</section>
							</div>
						</div>
					</div>
					<div id="copyright" class="container">
						<ul class="links">
							<li>&copy; Untitled. All rights reserved.</li><li>Design: <a href="http://html5up.net">HTML5 UP</a></li>
						</ul>
					</div>
				</div>

		</div>

		<!-- Scripts -->
			<script src="<?php echo $template_url ?>/assets/js/jquery.min.js"></script>
			<script src="<?php echo $template_url ?>/assets/js/jquery.dropotron.min.js"></script>
			<script src="<?php echo $template_url ?>/assets/js/skel.min.js"></script>
			<script src="<?php echo $template_url ?>/assets/js/skel-viewport.min.js"></script>
			<script src="<?php echo $template_url ?>/assets/js/util.js"></script>
			<!--[if lte IE 8]><script src="assets/js/ie/respond.min.js"></script><![endif]-->
			<script src="<?php echo $template_url ?>/assets/js/main.js"></script>

	</body>
</html>