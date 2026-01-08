
<?php
  if(is_front_page()):
    echo 'わたしのページ。';
  elseif(is_post_type_archive('work')):
    echo 'わたしが今までに作ったモノをご紹介します。';
  elseif(is_singular('work')):
    echo 'わたしが作った'.the_title().'をご紹介します。';
  elseif(is_page('about')):
    echo 'わたしについて。';
  elseif(is_page('contact')):
    echo 'わたしへのお問い合わせです。';
  else:
    echo '404 not found';
  endif;?>