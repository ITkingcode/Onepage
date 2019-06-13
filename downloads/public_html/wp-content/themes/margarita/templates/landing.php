<?php
/**
* Template Name: Landingpage
* Description: Landingpage
*/
?>
<?php get_header(); ?>
     <?php get_template_part('templates/popup', 'partial'); ?>

<div id="puff">
	<div class="threeblock">
		<div>
            <?php 
            // vars
            $puff_1 = get_field('puff_1');  
            if( $puff_1 ): ?>
            <img src="<?php echo $puff_1['image']['url']; ?>">
            <h2> <?php echo $puff_1['title']; ?></h2>
            <span><?php echo $puff_1['breadcrumb']; ?></span>
        <?php endif; ?>
    </div>
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
<?php if( have_rows('block_3') ): 
while( have_rows('block_3') ): the_row(); 
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
    $block_3 = get_field('block_3');
    if( $block_3 ): ?>
    <ul class="pure-g">
      
 <li class="pure-u-1 pure-u-md-1-2 image-wrapper" style="background: url('<?php echo $block_3['image']['url']; ?>'); background-size: 100%; background-position: center;">
          <img class="pure-img" src="<?php echo $block_3['image']['url']; ?>" alt="Paganini">    </li>
          <li class="pure-u-1 pure-u-md-1-2 content-wrapper     bg-pink-light">
             <div class="content">
                <h3><?php echo $block_3['title']; ?></h3>
                <p>
                    <?php echo $block_3['brodtext']; ?>
                </p>
                <a target="_blank" href="https://www.youtube.com/watch?v=q-gYcvipozY" class="white button pulse2"><?php echo $linktext3['linktext3']; ?></a>
            </div>
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
                        <a target="_blank" href="" class="white button pulse2"><?php echo $linktext['linktext']; ?></a>

                        <a target="_blank" href="" class="white button pulse2"><?php echo $linktext2['linktext2']; ?></a>
                    </div>
                </li>
            </ul>
        <?php endif; ?>
    </section>
</div>


<div id="galleri" class="imgcont">
    <section class="galleri">
        <?php 
        // vars
        $block_4 = get_field('block_4');
        if( $block_4 ): ?>
        <div>
         <h4>Galleri</h4>
     <?php endif; ?>
     <?php get_template_part('templates/galleri', 'partial'); ?>
 </div>
</section>
</div>


<?php get_footer(); ?>