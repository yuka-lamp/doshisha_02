<?php
$home = esc_url(home_url());
$wp_url = get_template_directory_uri();
get_header(); ?>
<section id="top-news" class="sec">
<div class="wrap">
  <div class="flex">
    <h2 class="ttl2"><span class="eng upper">NEWS</span>ニュース</h2>
    <div class="pc-only btn-nomal">
      <a class="eng upper"href="<?php echo $home; ?>/news">view more</a>
    </div>
  </div>
  <ul>
    <?php
    $arg = array(
      'posts_per_page' => 4,
      'orderby' => 'date',
      'order' => 'DESC',
      'post_type' => 'news',
    );
    $posts = get_posts($arg);
    if ($posts): ?>
    <?php foreach ($posts as $post): setup_postdata($post);
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
    <?php endforeach; ?>
    <?php endif; wp_reset_postdata(); ?>
  </ul>
  <div class="sp-only btn-border">
    <a class="eng upper"href="<?php echo $home; ?>/news">view more</a>
  </div>
</div>
</section>

<section id="top-research" class="sec">
<div class="wrap">
  <h2 class="ttl2"><span class="eng upper">research</span>研究コラム・成果</h2>
  <ul class="flex">
    <?php
    $arg = array(
      'posts_per_page' => 3,
      'orderby' => 'date',
      'order' => 'DESC',
      'post_type' => 'research',
    );
    $posts = get_posts($arg);
    if ($posts): ?>
    <?php foreach ($posts as $post): setup_postdata($post);
    ?>
    <li>
      <a href="<?php the_permalink(); ?>">
        <div class="img-wrap">
          <?php the_post_thumbnail(); ?>
        </div>
        <p class="eng"><?php the_time('Y-m-d'); ?></p>
        <h3><?php the_title(); ?></h3>
      </a>
    </li>
    <?php endforeach; ?>
    <?php endif; wp_reset_postdata(); ?>
  </ul>
  <div class="btn-border">
    <a class="eng upper"href="<?php echo $home; ?>/research">view more</a>
  </div>
</div>
</section>
<?php get_footer();
