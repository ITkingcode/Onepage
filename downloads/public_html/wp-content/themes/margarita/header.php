<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<meta name="msapplication-config" content="none">
	<link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/assets/img/favicon.png">
	<meta name="description" content="x">
	<meta name="keywords" content="x">
	<meta name="description" content="x">
	<meta property="og:title" content="x" data-dynamic="true">
	<meta property="og:site_name" content="x" data-dynamic="true">
	<meta property="og:description" content="x" data-dynamic="true">
	<meta property="og:image:type" content="image/png" data-dynamic="true">
	<meta property="og:image:width" content="1200" data-dynamic="true">
	<meta property="og:image:height" content="630" data-dynamic="true">
	<meta property="og:locale" content="sv_SE">
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width" />
	<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/assets/css/style.css" />
	<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/assets/fontawesome/css/fontawesome-all.css" />
	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/lightgallery/latest/css/lightgallery.css">
	
	<?php wp_head(); ?>
</head>
<?php 
$lunchLank = get_field( "lunchLank", 4 );
?>
<body <?php body_class(); ?> data-spy="scroll" data-target=".navbar" data-offset="50">

<nav class="nav-menu" id="mainNavigationTopBar">
    <div id="paganiniLogo">
    	<div class="logotype">
    	<nav id="navbar">
        <a data-scroll="home" href="#home" class="dot logotype">
        	<i alt="<?php wp_title( '-', true, 'right' ); bloginfo( 'name' ); ?>" title="<?php wp_title( '-', true, 'right' ); bloginfo( 'name' ); ?>" class="paganini-icon"></i>
        	</a>
    	</nav>
    </div>
    </div>
    <div id="featuredNavigation" class="pure-g">
        <div class="pure-u-1-2">
        	<nav id="navbar">
            	<ul class="pt-1">
					<li><a data-scroll="kontakt" href="#kontakt" class="dot">Margarita</a></li>
					<li><a data-scroll="meny" href="#meny" class="dot">Mixed</a></li>
            	</ul>
        	</nav>
        </div>
        <div class="pure-u-1-2">
        	<nav id="navbar">
            	<ul class="pt-2">
               		<li><a data-scroll="galleri" href="#galleri" class="dot">Galleri</a></li>
               		<li><a data-scroll="footer" href="#footer" class="dot">Kontakt</a></li>
            	</ul>
        	</nav>
        </div>
    </div>
</nav>

	<nav class="navbar navbar-default navbar-fixed-top mobilemenu">
		<div class="container-fluid">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
					<span class="sr-only">Menu</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<nav id="navbar">
					<ul id="menu-main">
						<li>
							<a target="_blank" href="https://www.instagram.com/explore/tags/margaritadrink/" class="fab fa-instagram new-window dot brand navbar-brand" title="Opens in a new tab/window"></a>
							
							<a target="_blank" href="https://www.facebook.com/margarita.drinks" class="fab fa-facebook-f new-window dot brand navbar-brand" title="Opens in a new tab/window"></a>
							
						</li>
					</ul>
				</nav>
			</div>
			<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
				<nav id="navbar" class="navbarleft">
					<ul id="menu-main">
						<li><a data-scroll="hem" href="#home" class="dot"><span>Hem</span></a></li>
						<li><a class="dot" href="#kontakt" target="_blank">Margarita</a></li>
						<li><a data-scroll="meny" href="#meny" class="dot"><span>Mixed</span></a></li>
						<li><a data-scroll="kontakt" href="#footer" class="dot"><span>Kontakt</span></a></li>
						<li><a data-scroll="galleri" href="#galleri" class="dot">Galleri</a></li>
					</ul>
				</nav>
			</div>
		</div>
	</nav>
	<!-- ********* Hero Content ********* -->
	<?php include('templates/hero-landing.php');  ?>
	<div id="wrapper" class="hfeed">