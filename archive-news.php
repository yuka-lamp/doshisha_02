<?php
$home = esc_url(home_url());
$wp_url = get_template_directory_uri();
get_header(); ?>

<section id="top-news" class="sec">
<div class="wrap">
  <ul class="list">
    <?php if (have_posts()): while (have_posts()):
    the_post();
    $t = get_the_title();
    $text = get_the_content();
    ?>
    <li>
      <a href="<?php the_permalink(); ?>">
        <div class="">
          <p><?php the_time('Y-m-d'); ?></p>
          <p class="cat">お知らせ</p>
        </div>
        <p><?php the_title(); ?></p>
      </a>
    </li>
  <?php endwhile;
  //wp_pagenaviの記述
    if(function_exists('wp_pagenavi')):
     wp_pagenavi();    //wp_pagenavi()の呼び出し
    endif;
  endif; ?>
  </ul>
</div>
</section>


<?php get_footer();
