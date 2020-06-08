<?php
$home = esc_url(home_url());
$wp_url = get_template_directory_uri();
get_header(); ?>

<section id="top-research" class="sec">
<div class="wrap">
  <ul class="">
    <?php if (have_posts()): while (have_posts()):
    the_post();
    $t = get_the_title();
    $text = get_the_content();
    ?>
    <li>
      <a href="<?php the_permalink(); ?>">
        <div class="img-wrap">
          <img src="<?php echo $wp_url; ?>/lib/images/top/sample.png" alt="タイトル">
        </div>
        <p class="eng">2020.01.01</p>
        <h3>日本人の胃がんリスクとなる遺伝的背景と生活習慣～人種横断的大規模胃がんゲノム解析の成果～</h3>
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
