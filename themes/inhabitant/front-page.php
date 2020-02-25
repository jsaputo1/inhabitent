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
<?php if( have_posts() ) :

//The WordPress Loop: loads post content 
    while( have_posts() ) :
        the_post(); ?>

<h2><?php the_title(); ?></h2>
<?php the_content(); ?>

<!-- Loop ends -->
<?php endwhile;?>

<?php the_posts_navigation();?>

<?php else : ?>
    <p>No posts found</p>
<?php endif;?>

<!-- Footer -->
<?php get_footer();?>






<h2><?php the_title(); ?></h2>