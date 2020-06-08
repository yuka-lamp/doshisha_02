<?php
$home = esc_url(home_url());
$wp_url = get_template_directory_uri();
get_header(); ?>

<section id="greeting" class="sec">
<div class="wrap">
  <h2 class="ttl2"><span class="eng upper">greeting</span></h2>
  <h3>持続可能な社会の創出に大きく貢献する
  <br>中小企業の卓越したマネジメントを科学的に探究</h3>
  <p>2015 年に国連サミットで採択された「持続可能な開発目標 (SDGs)」は、国際的なコンセンサスである。この目標達成に向けて全企業数の大多数を占める中小 企業が担うべき役割は大きい。本年4月に設置された中小企業マ ネジメント研究センターでは、特に100年以上続く長寿企業に着目し、その存続と伸展を支える卓越した企業経営の新たな在り方を科学的に分析・考察することによって、日本はもとより世界の中小企業の発展に寄与し、持続可能な国際社会の実現に貢献したいと考えている。</p>
</div>
</section>

<section id="info" class="sec">
<div class="wrap">
  <div class="flex">
    <div class="img-wrap">
      <img src="<?php $home ?>/about/seki-tomohiro.png" alt="関 智宏">
    </div>
    <div class="">
      <p class="name">関 智宏<span>セキ トモヒロ / Seki Tomohiro</span></p>
      <p>同志社大学商学部教授
        <br>同志社大学中小企業マネジメント研究センター長
        <br>博士（経営学）
      </p>
      <p>職歴</p>
      <ul>
        <li><span>1978年8月</span>山口県宇部市生まれ。</li>
        <li><span>2006年3月</span>神戸商科大学大学院経営学研究科博士後期課程単位取得退学</li>
        <li><span>2006年4月</span>阪南大学経営情報学部専任講師</li>
        <li><span>2009年4月</span>阪南大学経営情報学部准教授</li>
        <li><span>2014年４月</span>阪南大学経営情報学部教授</li>
        <li><span>2015年4月</span>同志社大学商学部准教授</li>
        <li>同志社大学商学部教授（現職）</li>
        <li>同志社大学中小企業マネジメント研究センター長（現職）</li>
        <li><span>2018年4月</span>オックスフォード大学日産現代日本研究所客員研究員（2021年3月まで）</li>
      </ul>
    </div>
  </div>
</div>
</section>

<section id="expo" class="sec">
<div class="wrap">
</div>
</section>

<?php get_footer();
