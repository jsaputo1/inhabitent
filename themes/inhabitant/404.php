<?php get_header();?>

<section class="broken-page">
    <div class="left-side">
        <h1> OOPS! That page can't be found. </h1>
        <p>It looks like nothing can be found at this location. Maybe try one of the links below or a search?<p>
        <div class="page-search">
            <?php get_search_form();?>
        </div>
        <h2> Recent Posts </h2>
         <!-- Recent Posts Loop -->
         <?php
        $args = array( 
            'post_type' => 'post', 
            'order' => 'ASC',
            'numberposts' => 5
            );
        $product_posts = get_posts( $args ); // returns an array of posts
        ?>
        <?php foreach ( $product_posts as $post ) : setup_postdata( $post ); ?>
        <h3><a href="<?php the_permalink();?>"><?php the_title(); ?></a></h3>
        <?php endforeach; wp_reset_postdata(); ?>

        <h2>Most Used Categories</h2>
        <?php echo wp_list_categories(array (
            'order'=>'DSC',
            'orderby'=>'count',
            'show_count'=> true,
            'title_li' => ''
        )); ?>

        <h2>Archives</h2>
        <p>Try looking in the monthly archives.</p>
        <select class="archive-drop-down">
            <option value="">
        </select>

    </div> <!-- closing left side div -->

 <!-- Sidebar -->
    <?php get_sidebar();?>

</section> <!-- closing main section -->
<!-- Footer -->
<?php get_footer();?>
