
<!-- About Hero Banner -->

<div class="about-banner" 
    style="background-image: linear-gradient(
      to bottom,
      rgba(0, 0, 0, 0.4) 0%,
      rgba(0, 0, 0, 0.4) 100%
    ), 
    url(<?php echo get_the_post_thumbnail_url();?>)"
>

<!-- Header -->
    <?php get_header(); ?>

<!-- Title -->
    <h2><?php the_title(); ?></h2>

</div>


<!-- About Content -->

<div class="about-content">
<?php if( have_posts() ) :

//The WordPress Loop: loads post content 
while( have_posts() ) :
the_post(); ?>

<div class="about-content">
<?php the_content(); ?>
</div>


<!-- Loop ends -->
<?php endwhile;?>

<?php the_posts_navigation();?>

<?php else : ?>
<p>No posts found</p>
<?php endif;?>


<!-- Footer -->
<?php get_footer();?>