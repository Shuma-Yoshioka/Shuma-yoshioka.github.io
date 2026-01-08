<?php
 /*
  template Name:contact-page
 */
?>

<?php get_header();?>
<main id="contact">
    <div class="contact">
        <div class="contact-img"><img src="<?php echo get_template_directory_uri().'/assets/img/contact.png'; ?>" alt="contact"></div>
        <div class="inner contact-inner">
            <div class="contact-header">
                <div class="my-data-title">お問い合わせ</div>
                <div class="contact-title">Let’s get<br>in touch</div>
            </div>
            <?php echo the_content(); ?>
        </div>
    </div>
</main>
<?php get_footer();?>