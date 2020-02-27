
    <?php the_posts_navigation();?>
   <!-- Hero banner -->
<div class="hero-banner" 
        style="background-image: linear-gradient(
      to bottom,
      rgba(0, 0, 0, 0.4) 0%,
      rgba(0, 0, 0, 0.4) 100%
    ),
        url(<?php echo get_the_post_thumbnail_url();?>)"
    >
 <!-- Header    -->
    <?php get_header(); ?>





    

<!-- Main Logo -->
    <div class="main-logo">
        <img src="<?php echo get_template_directory_uri() . '/images/logos/inhabitent-logo-full.svg' ;?>"></a>
    </div>
</div>



<!-- Product Type Loop -->
<div class="home-product-grid">

    <?php 
    $terms = get_terms(array(
        'taxonomy' => 'product-type',
        'hide_empty' => false
    )); ?>
    <?php

    foreach($terms as $term) :
        $file_name = $term->name . '.svg';?>
    
    <div class="home-product-container">

            <img src='<?php echo get_template_directory_uri() . "/images/product-type-icons/$file_name"?>'>

            <p><?php echo $term->description;?></p>

            <p><a href="<?php echo get_permalink() . 'product-type/' . $term->slug ?>"><?php echo $term->name;?> Stuff</a></p>
    </div>

        <?php endforeach;?>
    </div>


<div class="home-journal-grid">

    <!-- Custom Post Loop Starts -->
    <?php
    $args = array( 
        'post_type' => 'post', 
        'order' => 'ASC',
        'numberposts' => 3
        );
    $product_posts = get_posts( $args ); // returns an array of posts
    ​
    ?>

    <?php foreach ( $product_posts as $post ) : setup_postdata( $post ); ?>
    

    <div class="home-journal-container">
        <?php the_post_thumbnail(); ?>
        <p class="home-journal-small"><?php the_date();?><?php wp_count_comments() ?>Test</p>
        <a href="<?php the_permalink();?>"><h1 class="home-page-journal-title"><?php the_title();?></h1></a>
        <button class="home-journal-button">Read Entry</button>
    </div>

    <?php endforeach; wp_reset_postdata(); ?>
    </div>



<!-- Footer -->
<?php get_footer();?>