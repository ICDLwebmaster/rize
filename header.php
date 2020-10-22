<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package rise_test
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0,  user-scalable=0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/assets/css/reset.css" media="screen" />
	<link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,600;0,700;1,300;1,400;1,600;1,700&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=M+PLUS+Rounded+1c:wght@100;300;400;500;700;800;900&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/earlyaccess/notosansjapanese.css" rel="stylesheet" />
	<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/assets/slick/slick.css" media="screen" />
	<link href="//db.onlinewebfonts.com/c/0d49fc455f4a8951a42daf952412a713?family=Helvetica+Neue" rel="stylesheet" type="text/css"/>
	<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/assets/slick/slick-theme.css" media="screen" />
	<script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
	<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/assets/slick/slick.min.js"></script>
	<script src="<?php echo get_template_directory_uri(); ?>/assets/js/app.js"></script>

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">

	<header id="masthead" class="site-header">
		<h1 class="site-branding">
			<a href="<?php echo esc_url( home_url( '/' ) ); ?>"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo.svg" alt="RIZE"></a>
		</h1><!-- .site-branding -->
		<div class="main-menu">
			<nav id="site-navigation" class="main-navigation">
				<div id="hamburger-menu" class="hamburger-menu">
					<p class="hamburger-button">
			            <span class="line line01"></span>
			            <span class="line line02"></span>
			            <span class="line line03"></span>
		            	<span class="hamburger-text">MENU</span>
					</p>
		        </div>
		        <a class="hd-mail">
		        	<figure>
						<img src="<?php echo get_template_directory_uri(); ?>/assets/img/mail-icon01.svg" alt="Mail">
		        	</figure>
		        </a>
			</nav><!-- #site-navigation -->
			<div class="nav-menu">
	        	<ul class="menu-list">
					<li><a href="<?php echo esc_url( home_url( '/' ) ); ?>">ホーム</a></li>
					<li><a href="<?php echo esc_url( home_url( '/' ) ); ?>company">会社概要</a></li>
					<li><a href="<?php echo esc_url( home_url( '/' ) ); ?>repair">火災保険併用修繕</a></li>
					<li><a href="<?php echo esc_url( home_url( '/' ) ); ?>roof">屋根にお困りの方</a></li>
					<li><a href="<?php echo esc_url( home_url( '/' ) ); ?>">施工事例</a></li>
					<li><a href="<?php echo esc_url( home_url( '/' ) ); ?>contact-us">お問い合わせ</a></li>
				</ul>
				<div class="contact-btn01">
					<a href="#">
						<figure>
							<img src="<?php echo get_template_directory_uri(); ?>/assets/img/ph-number.svg" alt="Phone Number">
						</figure>
					</a>
				</div>
	        </div>
		</div>
		
	</header><!-- #masthead -->
