<?php
/*
 Template Name: お問い合わせ
 */
get_header();
?>

<h1 class="page-h1">お問い合わせ</h1>
<div class="h1-desc">
  <p>サイト制作についてご質問などございましたら、<br>下記フォームより無料相談を承っております。</p>
</div>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

    <div class="c-layout">
      <div class="form-container">

        <?php the_content(); ?>
      </div>
    </div>

<?php endwhile;
endif; ?>

<?php
get_footer();
?>