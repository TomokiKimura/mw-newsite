<?php
get_header();
?>



<?php if (have_posts()) : ?>
  <?php while (have_posts()) : the_post(); ?>

    <div class="blog-contents">
      <div class="blogSingle-container">
        <div class="main">
          <h1><?php the_title(); ?></h1>
          <p class="b-date"><?php echo get_the_date(); ?></p>
          <?php if (has_post_thumbnail()) : ?>
            <div class="blog-kv"><?php the_post_thumbnail(); ?></div>
          <?php endif; ?>

          <?php the_content(); ?>
        </div>
      </div>
    </div>
<?php endwhile;
endif; ?>



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