<title>
  <?php
    if(is_front_page()):
      echo "home";
    elseif(is_post_type_archive('work')):
      echo "work一覧";
    elseif(is_singular('work')):
      echo the_title();
    elseif(is_page('about')):
      echo the_title();
    elseif(is_page('contact')):
      echo the_title();
    else:
      echo '404 not found';
   endif;?>
   -my portfolio
</title>