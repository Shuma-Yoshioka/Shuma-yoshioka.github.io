<?php
 /*
  template Name:about-page
 */
?>

<?php get_header();?>

<main id="about">
    <ul class="detail-main">
        <li><div class="my-detail-img">
            <img src="<?php echo get_template_directory_uri().'/assets/img/about.png';?>" alt="about">
        </div></li>
        <li><div class="inner">
            <div class="my-data-title">私について</div>
            <h1 class="myname-en">HINATA NINJA</h1>
            <ul class="about-detail">
                <li>
                    <div class="my-appeal">I consistently incorporate the latest design trends and technologies to deliver designs that maximize the brand value for my clients.</div>
                    <p class="about-text">テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト</p>
                </li>
                <li>
                    <h2 class="bph">Biography</h2>
                    <p class="about-text">テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト</p>
                </li>
        </ul>        
        </div></li>
    </ul>

</main>
<?php get_footer();?>