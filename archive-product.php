<?php
get_header();
?>

<h1 class="page-h1">制作実績一覧</h1>
<div class="h1-desc">
  <p>制作実績の一部を紹介いたします。非公開実績もございますので、<br>ご希望の方は個別で参考資料として提示させて頂きますので、お気軽にお問い合わせください。</p>
</div>


<div class="product-container">

  <?php
  $args = array(
    'post_type' => 'product', // 投稿タイプを指定
    'posts_per_page' => 6, // 表示する記事数
  );
  $news_query = new WP_Query($args);
  if ($news_query->have_posts()) :
    while ($news_query->have_posts()) :
      $news_query->the_post();
  ?>

      <div class="product-box">
        <a href="<?php the_permalink(); ?>">

          <?php if (has_post_thumbnail()) : ?>
            <div class="pro-box-img"><?php the_post_thumbnail('full'); ?></div>
          <?php else : ?>
            <div class="pro-box-img"><img src="<?php echo get_template_directory_uri(); ?>/IMG/common/noimage.png"></div>
          <?php endif; ?>

          <p class="pro-cate"><?php the_field('industry'); ?></p>
          <?php
          if (mb_strlen($post->post_title) > 13) {
            $title = mb_substr($post->post_title, 0, 13);
            echo '<p class="pro-name">' . $title . '...' . '</p>';
          } else {
            echo '<p class="pro-name">' . $post->post_title . '</p>';
          }
          ?>
        </a>
      </div>
  <?php endwhile;
  endif;
  wp_reset_postdata();
  ?>

</div>

<!-- <div class="detail-btn">
  <a href="#"><span>事業所概要をみる</span></a>
</div> -->





<div class="parallax cv-bg">
  <div class="cta">
    <p>サイト制作に関するご相談や、お見積もりは無料で承っておりますので、お気軽にご連絡ください</p>
    <div class="cta-btn">
      <a href="#"><span>無料相談をする</span></a>
    </div>
  </div>
</div>

<?php
get_footer();
?>