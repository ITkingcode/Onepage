<?php
/**
* Template Name: lunchmeny
* Description: lunchmeny
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
     .content1{
        text-align: center;
         padding: 6% 7%;
     }
     .imgcont .image-content p {
        color: black;
       
        margin:0 16% 10px !important;
     }
.page-id-318 .imgcont .image-content.swap-side .content-wrapper{
         order: 1;
         margin-left: 24% ;
     }
@media  
  (min-width: 360px) and (max-width: 380px) { 
  .imgcont .image-content p {
    min-width: 203% !important;
    margin: 0 -50% 10px !important;
    margin-left: 6% !important;
    padding: 10px 14%;
}
}
@media
(min-width: 1201px) and (max-width: 1400px){
.imgcont .image-content p {
    margin:0 5% 10px !important;
  }
  .page-id-318 .imgcont .image-content.swap-side .content-wrapper{
         order: 1;
         margin-left: 2% !important;
     }
}
@media
(min-width: 1401px) and (max-width: 1650px){
.imgcont .image-content p {
    margin:0 10% 10px !important;
  }
}
@media
(min-width: 1060px) and (max-width: 1200px){
.imgcont .image-content p {
    margin:0 -5% 10px !important;
  }
}
 @media 
  (-webkit-min-device-pixel-ratio: 2), 
  (min-resolution: 192dpi) { 
  #footer {
    width: 207.5% !important;
}
}
@media 
(min-width: 1950px) and (max-width: 2800px){
.imgcont .image-content p {
        color: black;
       
        margin:0 24.5% 10px !important;
     }
    }
    @media 
(min-width: 1850px) and (max-width: 2050px){
.imgcont .image-content p {
        color: black;
       
        margin:0 19% 10px !important;
     }
    }
@media
(min-width: 769px) and (max-width: 1059px){
*  {
    margin:1% !important;
  }
.imgcont .image-content p{
	margin: 0 5.5% 10px !important;
}  
.content1{
	margin: 10px -70% !important;
  margin-left: 75px !important;
}
img{
	width: 99% !important;
}
#mainNavigationTopBar .pure-g{
    -webkit-flex-flow: unset;
}
}
@media
(min-width: 660px) and (max-width: 670px){
.imgcont .image-content p {
    max-width: 100% !important;
    margin: 0 -50% 10px !important;
    margin-left: 62% !important;
  }
  .page-id-318 .imgcont .image-content.swap-side .content-wrapper{
         order: 1;
         margin-left:0% !important;
     }
}
@media
(min-width: 380px) and (max-width: 700px){
.imgcont .image-content p {
    max-width: 100% !important;
    margin: 0 -50% 10px !important;
    margin-left: 62% !important;
  }
  .imgcont .image-content h3{
    margin-left: 56% !important;
    width: 100% !important;
  }
   .page-id-318 .imgcont .image-content.swap-side .content-wrapper{
         order: 1;
         margin-left: 0% !important;
     }
}
@media 
  (min-width: 660px) and (max-width: 670px) { 
  .imgcont .image-content h3 {
    margin-left: 98%;
  }
}
@media 
  (min-width: 360px) and (max-width: 380px) { 
  .imgcont .image-content h3 {
    margin-left: 55% !important;
    width: 100% !important;
  }
}
     @media 
  (-webkit-min-device-pixel-ratio: 2), 
  (min-resolution: 302dpi) { 
  img {
    width:205% !important;
    margin-left:0 !important;
    height: auto !important;
  }
}
 @media 
 (min-width: 768px)  and (max-width: 968px)  {
  #mainNavigationTopBar {
    width: 100%;
    background: rgba(0, 0, 0, 0.8);
    height: 60px;
    position: fixed;
    z-index: 100;
    top: 0;
    transition: all .2s;
    display: block; } 
.imgcont .image-content p {
    color: black;
    margin: 0 2% 10px !important;
}
}
@media screen and (min-width: 568px) {
  #mainNavigationTopBar {
    transition: all .5s ease;
   background: rgba(0, 0, 0, 0.8);
    height: 140px;
    padding: 15px 0 10px; } }

</style>
<link rel="stylesheet" href="style.css?v=3.4.2">
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
          <li><a data-scroll="ompaganini" href="http://paganini.nu/#ompaganini" class="dot">Om Paganini</a></li>
                    <li><a data-scroll="kontakt" href="http://paganini.nu/lunchmeny/" class="dot">Lunch</a></li>
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
                        <li><a data-scroll="hem" href="http://paganini.nu/lunchmeny/#home" class="dot"><span>Hem</span></a></li>
                        <li><a data-scroll="ompaganini" href="http://paganini.nu/#ompaganini" class="dot">Om Paganini</a></li>
                        <li><a class="dot" href="http://paganini.nu/lunchmeny/" target="_blank">Lunch</a></li>
                        <li><a data-scroll="meny" href="http://paganini.nu/#meny" class="dot"><span>Meny</span></a></li>
                        <li><a data-scroll="kontakt" href="#footer" class="dot"><span>Kontakt</span></a></li>
                        <li><a data-scroll="galleri" href="http://paganini.nu/#galleri" class="dot">Galleri</a></li>
                        <li><a data-scroll="bokabord" href="http://paganini.nu/#bokabord" class="dot"><span>Boka bord</span></a></li>
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
<img src="http://paganini.nu/wp-content/uploads/2018/06/lunchmeny-pris-1.png" style="margin-left: 14%;width: 72%;"> 
    <div>
        <?php 
            // vars
        $puff_2 = get_field('puff_2');  
        if( $puff_2 ): ?>
        <img src="<?php echo $puff_2['image']['url']; ?>">
        <h2> <?php echo $puff_2['title']; ?></h2>
        <span><?php echo $puff_2['breadcrumb']; ?></span>
    <?php endif; ?>
</div>
<div>
    <?php 
            // vars
    $puff_3 = get_field('puff_3');  
    if( $puff_3 ): ?>
    <img src="<?php echo $puff_3['image']['url']; ?>">
    <h2><?php echo $puff_3['title']; ?></h2>
    <span><?php echo $puff_3['breadcrumb']; ?></span>
<?php endif; ?>
</div>
</div> 
</div> 
<div id="ompaganini" class="imgcont">

	
</div>

<?php if( have_rows('block_2') ): 
while( have_rows('block_2') ): the_row(); 
        // vars
    $file = get_sub_field('button');
    $linktext = get_sub_field('button');
    $file2 = get_sub_field('button');
    $linktext2 = get_sub_field('button');
    $fil3 = get_sub_field('button');
    $linktext3 = get_sub_field('button');
    ?>
<?php endwhile; ?>
<?php endif; ?>
<?php if( have_rows('block_5') ): 
while( have_rows('block_5') ): the_row(); 
        // vars
    
    $fil3 = get_sub_field('button');
    $linktext3 = get_sub_field('button');
    ?>
<?php endwhile; ?>
<?php endif; ?>
<div id="kontakt" class="imgcont">
 <section class="image-content swap-side">
    <?php 
                // vars
    $block_5 = get_field('block_5');
    if( $block_5 ): ?>
    <ul class="pure-g">
              
          <li class="pure-u-1 pure-u-md-1-2 content-wrapper     bg-pink-light">
             <div class="content1">
                <h3><?php echo $block_5['title']; ?></h3>
                <p>
                    <?php echo $block_5['brodtext']; ?>
                </p>
               
            </div>
        </li>
       </li>
       <li class="pure-u-1 pure-u-md-1-2 image-wrapper" style="background: url('<?php echo $block_5['image']['url']; ?>'); background-size: cover; background-position: center;">
          
          <li class="pure-u-1 pure-u-md-1-2 content-wrapper     bg-pink-light">
             <div class="content1">
                
                <h3><?php echo $block_5['title2']; ?></h3>
                <p>
                    <?php echo $block_5['brodtext2']; ?>
                </p>
            </div>
        </li>
       </li>

    </ul>
    <ul class="pure-g">     
          <li class="pure-u-1 pure-u-md-1-2 content-wrapper     bg-pink-light">
             <div class="content1">
                <h3><?php echo $block_5['title3']; ?></h3>
                <p>
                    <?php echo $block_5['brodtext3']; ?>
                </p>
               
            </div>
        </li>
       </li>
       
          
          <li class="pure-u-1 pure-u-md-1-2 content-wrapper     bg-pink-light">
             <div class="content1">
                
                <h3><?php echo $block_5['title4']; ?></h3>
                <p id="svart">
                    <?php echo $block_5['brodtext4']; ?>
                </p>
            </div>
        </li>
       </li>

    </ul>

    </ul>
    <ul class="pure-g">     
          <li class="pure-u-1 pure-u-md-1-2 content-wrapper     bg-pink-light">
             <div class="content1">
                <h3><?php echo $block_5['title5']; ?></h3>
                <p class="svart">
                    <?php echo $block_5['brodtext5']; ?>
                </p>
               
            </div>
        </li>
       </li>
    </ul>
<?php endif; ?>
</section>
</div>
<div id="meny" class="imgcont">
    <section class="image-content ">
        <?php 
        // vars
        $block_2 = get_field('block_2');
        if( $block_2 ): ?>
        <ul class="pure-g">
            <li class="pure-u-1 pure-u-md-1-2 image-wrapper" style="background: url('<?php echo $block_2['image']['url']; ?>'); background-size: cover; background-position: center;">
                <img class="pure-img" src="<?php echo $block_2['image']['url']; ?>" alt="Paganini">    </li>

                <li class="pure-u-1 pure-u-md-1-2 content-wrapper     bg-pink-light">
                    <div class="content">
                        <h3><?php echo $block_2['title']; ?></h3>
                        <p class="menyp"><?php echo $block_2['breadcrumb']; ?></p>
                        <a target="_blank" href="<?php echo $file['file']; ?>" class="white button pulse2"><?php echo $linktext['linktext']; ?></a>

                        <a target="_blank" href="<?php echo $file2['file2']; ?>" class="white button pulse2"><?php echo $linktext2['linktext2']; ?></a>
                    </div>
                </li>
            </ul>
        <?php endif; ?>
    </section>
</div>

<img src="http://paganini.nu/wp-content/uploads/2018/05/sallad-copy-1-1024x365.jpg" style="margin-left: 13%;width: 74%;">





<?php get_footer(); ?>