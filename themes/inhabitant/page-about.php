
<!-- About Hero Banner -->
<div class="about-banner" 
    style="background-image: linear-gradient(
      to bottom,
      rgba(0, 0, 0, 0.4) 0%,
      rgba(0, 0, 0, 0.4) 100%
    ), 
    url(<?php echo get_the_post_thumbnail_url();?>)">
<!-- Header -->
    <?php get_header(); ?>
    <h2><?php the_title(); ?></h2>
</div>

<div class="content-container">

    <!-- About Content -->

    <section class="about-content">
    <?php if( have_posts() ) :

    //The WordPress Loop: loads post content 
    while( have_posts() ) :
    the_post(); ?>

    <?php the_content(); ?>

    <!-- Loop ends -->
    <?php endwhile;?>

    <?php the_posts_navigation();?>

    <?php else : ?>
    <p>No posts found</p>
    <?php endif;?>
    </section>
</div>

<!-- Footer -->
<?php get_footer();?>