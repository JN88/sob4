<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
	<head>
		<meta charset="<?php bloginfo('charset'); ?>">
		<title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' :'; } ?> <?php bloginfo('name'); ?></title>

		<link href="//www.google-analytics.com" rel="dns-prefetch">
        <link href="<?php echo get_template_directory_uri(); ?>/img/icons/favicon.ico" rel="shortcut icon">
        <link href="<?php echo get_template_directory_uri(); ?>/img/icons/touch.png" rel="apple-touch-icon-precomposed">
        <link href='http://fonts.googleapis.com/css?family=Roboto:400,700|Roboto+Condensed:700&subset=latin,vietnamese' rel='stylesheet' type='text/css'>

		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">

		<?php wp_head(); ?>

		<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
	    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	    <!--[if lt IE 9]>
	      <script src="<?php echo get_template_directory_uri(); ?>/js/html5shiv.min.js"></script>
	      <script src="<?php echo get_template_directory_uri(); ?>/js/respond.min.js"></script>
	    <![endif]-->

		<script>
        // conditionizr.com
        // configure environment tests
        conditionizr.config({
            assets: '<?php echo get_template_directory_uri(); ?>',
            tests: {}
        });
        </script>

	</head>
	<body <?php body_class(); ?>>
		<div id="fb-root"></div>
		<script>(function(d, s, id) {
		var js, fjs = d.getElementsByTagName(s)[0];
		if (d.getElementById(id)) return;
		js = d.createElement(s); js.id = id;
		js.src = "//connect.facebook.net/vi_VN/sdk.js#xfbml=1&appId=211974428954152&version=v2.0";
		fjs.parentNode.insertBefore(js, fjs);
		}(document, 'script', 'facebook-jssdk'));</script>
		<!-- wrapper -->
		<div class="wrapper">

			<!-- header -->
			<header id="header" class="header clear" role="banner" >
				<div class="logo-box hidden-xs">
					<div class="container">
						<h1 class="logo pull-left">
							<a href="<?php echo home_url(); ?>">
								<img src="<?php echo get_template_directory_uri(); ?>/img/logo.png" alt="Logo Sob.vn" class="logo-img">
							</a>
						</h1>
						<div class="contact-box pull-right">
							<ul class="nav-contact">
								<li>
									<b>Kinh doanh</b>
									<p>093.6453.188
									<a href="skype:giangnt.skype?chat" class="skype">
			                            <i class="fa fa-skype"></i>
			                        </a></p>
								</li>
								<li>
									<b>Hỗ trợ khách hàng</b>
									<p>093.6453.188
									<a href="skype:giangnt.skype?chat" class="skype">
			                            <i class="fa fa-skype"></i>
			                        </a></p>
								</li>
								<li>
									<b>Hỗ trợ kỹ thuật</b>
									<p>094.6028.882<a href="skype:giangnt.skype?chat" class="skype">
			                            <i class="fa fa-skype"></i>
			                        </a></p>
								</li>
							</ul>
						</div>
					</div>
				</div>
				<div class="affix-nav affix-top" role="navigation" data-spy="affix" data-offset-top="98" data-offset-bottom="200">
					<nav class="navbar navbar-default" role="navigation">
						<div class="container">
							<!-- Brand and toggle get grouped for better mobile display -->
							<div class="navbar-header">
								<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
									<span class="sr-only">Toggle navigation</span>
									<span class="icon-bar"></span>
									<span class="icon-bar"></span>
									<span class="icon-bar"></span>
								</button>
								<a class="navbar-brand hidden-lg hidden-md hidden-sm logo" href="<?php echo home_url(); ?>"><img src="<?php echo get_template_directory_uri(); ?>/img/logo-navbar.png" alt="<?php echo bloginfo("name"); ?>"></a>
							</div>

							<!-- Collect the nav links, forms, and other content for toggling -->
							<div class="collapse navbar-collapse navbar-ex1-collapse">
								<?php navbar_nav_left(); ?>

								<?php navbar_nav_right(); ?>
							</div><!-- /.navbar-collapse -->
						</div><!-- /.container -->
					</nav>
					<nav class="nav-float">
						<ul class="nav">
							<li><a href="#my-info">Giới thiệu</a></li>
							<li><a href="#my-service">Dịch vụ</a></li>
							<li><a href="#my-featured">Tính năng</a></li>
							<li><a href="#my-product">Sản phẩm</a></li>
							<li><a href="#my-custom-review">Khách hàng</a></li>
						</ul>
					</nav>
				</div>
			</header>
			<!-- /header -->
