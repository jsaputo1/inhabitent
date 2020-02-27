
<?php wp_footer();?>
<footer style="background-image:
    url(<?php echo get_template_directory_uri() . '/images/dark-wood@2x.png);'?>)">


<div class="footer-info-container">
<?php dynamic_sidebar ('contact-info-footer')?>
    <?php dynamic_sidebar ('business-hours-footer')?>
    <img src='<?php echo get_template_directory_uri() . "/images/logos/inhabitent-logo-text.svg"?>'>
</div>

    <?php dynamic_sidebar ('copy-right-footer')?>

 




<?php dynamic_sidebar ('copyright-footer')?>


</footer>
</body>
</html>