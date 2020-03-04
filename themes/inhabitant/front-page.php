
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

<!-- Main Content -->



<div class="content-container">

    <h1 class="product-title">Shop Stuff</h1>
    <!-- Product Type Loop -->
    <div class="home-product-section">
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
            <div class="green-button">
                <a href="<?php echo get_permalink() . 'product-type/' . $term->slug ?>"><?php echo $term->name;?> Stuff</a>
            </div>
        </div>
            <?php endforeach;?>
        </div>

    <h1 class="product-title">Shop Stuff</h1>
    <div class="home-journal-section">
        <!-- Custom Post Loop Starts -->
        <?php
        $args = array( 
            'post_type' => 'post', 
            'order' => 'ASC',
            'numberposts' => 3
            );
        $product_posts = get_posts( $args ); // returns an array of posts
        ?>
        <?php foreach ( $product_posts as $post ) : setup_postdata( $post ); ?>
        <div class="home-journal-container">
            <figure><?php the_post_thumbnail(); ?></figure>
            <p class="home-journal-small"><?php echo get_the_date();?><?php wp_count_comments() ?>Test</p>
            
        </div>
        <?php endforeach; wp_reset_postdata(); ?>
    </div>



</div>



<!-- Footer -->

<?php get_footer();?>