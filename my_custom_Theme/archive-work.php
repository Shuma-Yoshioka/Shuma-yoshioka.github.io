<?php get_header();?>


<main id="work">
    <div class="inner">
        <h1 class="myname-en">Work</h1>
        <div class="my-appeal">Experience Innovative<br>Design Solutions and Concepts</div>    
    </div>
        <?php if(have_posts()):?>
          <?php 
            $query = new WP_Query(array(
              'post_type' => "work",
              'order' => 'ASC',
              'orderby' => 'date',
            ));
            while($query->have_posts()):$query->the_post();
          ?>
          <a href="<?php the_permalink();?>" class="work">
            <div class="work-img">
              <img src="<?php echo get_field('work_thumbnail');?>" alt="<?php the_title();?>">
            </div>
            <div class="work-inner">
              <ul class="work-section">
                  <li class="work-section-1">
                      <div class="work-title"><?php the_title();?></div>
                  </li>
                  <li class="work-section-2">
                      <div class="design-detail"><?php echo the_content(); ?></div>
                      <ul class="work-section-btn">
                          <li><div class="btn w-btn">Webdesign</div></li>
                          <li><div class="btn b-btn">Branding</div></li>
                      </ul>
                  </li>
              </ul>  
            </div>
          </a>          
        <?php endwhile;endif;?>

</main>
<?php get_footer();?>