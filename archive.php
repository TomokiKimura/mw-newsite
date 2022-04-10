<?php
get_header();
?>

<h1 class="page-h1">ブログ一覧</h1>
<div class="h1-desc">
  <p>Web制作のご担当者様や企業向けに情報発信をいたします。<br>webマーケティングや、制作時に気になった事などを随時更新いたします。</p>
</div>


<div class="blog-container">
  <div class="blog-wrap">

    <?php query_posts('posts_per_page=6'); ?>
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        <div class="blog-block">
          <a href="<?php the_permalink(); ?>">

            <div class="blog-img">
              <?php if (has_post_thumbnail()) : ?>
                <?php the_post_thumbnail(array(160, 140)); ?>
              <?php else : ?>
                <img src="<?php echo get_template_directory_uri(); ?>/IMG/common/noimage.png">
              <?php endif; ?>
            </div>
            <div class="blog-text">
              <div class="blog-cate">
                <ul>
                  <?php
                  $categories = get_categories();
                  foreach ($categories as $category) {
                    echo '<li>' . $category->name . '</li>';
                  }
                  ?>
                </ul>
              </div>
              <span><?php echo get_the_date(); ?></span>
              <?php
              if (mb_strlen($post->post_title) > 12) {
                $title = mb_substr($post->post_title, 0, 12);
                echo '<h3>' . $title . '...' . '</h3>';
              } else {
                echo '<h3>' . $post->post_title . '</h3>';
              }
              ?>
            </div>


          </a>
        </div>

    <?php endwhile;
    endif; ?>
  </div>




</div>
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