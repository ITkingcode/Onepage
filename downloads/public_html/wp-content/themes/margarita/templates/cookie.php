<?php
/**
* Template Name: cookie
* Description: cookie
*/
?>

<head>

    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="msapplication-config" content="none">
    
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
     <style> 
     .imgcont .image-content p {
        color: black;
     }
     .section-text{
			padding: 45px 19%;
}
 @media screen and (min-width: 768px) {
  #mainNavigationTopBar {
    width: 100%;
    background: rgba(0, 0, 0, 0.8);
    height: 60px;
    position: fixed;
    z-index: 100;
    top: 0;
    transition: all .2s;
    display: block; } }
@media screen and (min-width: 568px) {
  #mainNavigationTopBar {
    transition: all .5s ease;
   background: rgba(0, 0, 0, 0.8);
    height: 140px;
    padding: 15px 0 10px; } }

</style>
</head>
<?php 
$lunchLank = get_field( "lunchLank", 4 );
?>
<body <?php body_class(); ?> data-spy="scroll" data-target=".navbar" data-offset="50">

<nav class="nav-menu" id="mainNavigationTopBar">
    <div id="paganiniLogo">
        <div class="logotype">
        <nav id="navbar">
        <a data-scroll="home" href="paganini.nu" class="dot logotype">
            <i alt="<?php wp_title( '-', true, 'right' ); bloginfo( 'name' ); ?>" title="<?php wp_title( '-', true, 'right' ); bloginfo( 'name' ); ?>" class="paganini-icon"></i>
            </a>
        </nav>
    </div>
    </div>
    <div id="featuredNavigation" class="pure-g">
        <div class="pure-u-1-2">
            <nav id="navbar">
                <ul class="pt-1">
          <li><a data-scroll="ompaganini" href="http://paganini.nu/#ompaganini" class="dot">Om Paganini</a></li>
                    <li><a data-scroll="kontakt" href="http://paganini.nu/#kontakt" class="dot">Lunch</a></li>
                    <li><a data-scroll="meny" href="http://paganini.nu/#meny" class="dot">Meny</a></li>
                </ul>
            </nav>
        </div>
        <div class="pure-u-1-2">
            <nav id="navbar">
                <ul class="pt-2">
                    <li><a data-scroll="galleri" href="http://paganini.nu/#galleri" class="dot">Galleri</a></li>
                    <li><a data-scroll="bokabord" href="http://paganini.nu/#bokabord" class="dot">Boka bord</a></li>
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
                            <a target="_blank" href="https://www.instagram.com/paganiniristorante/" class="fab fa-instagram new-window dot brand navbar-brand" title="Opens in a new tab/window"></a>
                            
                            <a target="_blank" href="https://www.facebook.com/paganini.stockholm/" class="fab fa-facebook-f new-window dot brand navbar-brand" title="Opens in a new tab/window"></a>
                            
                        </li>
                    </ul>
                </nav>
            </div>
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <nav id="navbar" class="navbarleft">
                    <ul id="menu-main">
                        <li><a data-scroll="hem" href="#home" class="dot"><span>Hem</span></a></li>
                        <li><a data-scroll="ompaganini" href="#ompaganini" class="dot">Om Paganini</a></li>
                        <li><a class="dot" href="<?php echo $lunchLank; ?>" target="_blank">Lunch</a></li>
                        <li><a data-scroll="meny" href="#meny" class="dot"><span>Meny</span></a></li>
                        <li><a data-scroll="kontakt" href="#kontakt" class="dot"><span>Kontakt</span></a></li>
                        <li><a data-scroll="galleri" href="#galleri" class="dot">Galleri</a></li>
                        <li><a data-scroll="bokabord" href="#bokabord" class="dot"><span>Boka bord</span></a></li>
                    </ul>
                </nav>
            </div>
        </div>
    </nav>
    <!-- ********* Hero Content ********* -->
 
    <div id="wrapper" class="hfeed">
</head>
    
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<div align="center" class="section-text">
	En kaka (cookie) är en liten textbaserad datafil som en webbserver kan be att få spara i webbplatsbesökarens dator. Genom att kakorna i allmänhet skickas tillbaka med varje förfrågan till webbplatsen ifråga är det möjligt för servern att hålla reda på besökarens preferenser eller identitet (i den mån den är känd). Kakorna kan innehålla information i klartext (till exempel preferenser: språk=sv), men ofta krypteras innehållet i kakan, så att användaren inte kan veta vilken information den innehåller. Ofta innehåller kakan endast en nyckel till en databaspost på servern, varvid användaren inte har någon kontroll över hur mycket information som finns lagrad om honom eller henne. I kakorna kan en tidpunkt efter vilken kakorna inte längre används anges. Då sparas kakorna (beroende på webbläsarens inställningar) på datorns hårddisk, för att kunna returneras också senare. I annat fall lagras kakorna endast i datorns primärminne och gäller tills webbläsaren stängs av. Den senare typens kakor kallas ofta session cookies eftersom de används för en enskild session, inte för att lagra information om en kund mellan sessionerna. Den 25 juli 2003 trädde den nya lagen om elektronisk kommunikation i kraft, vilket innebär att alla som besöker en webbplats ska informeras om användning av cookies och ges möjlighet att vägra sådan användning

</div>




<?php get_footer(); ?>