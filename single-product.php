<?php
get_header();
?>


<div class="productDesc-container">
  <h1 class="page-h1">〇〇〇〇〇〇〇〇株式会社</h1>
  <div class="product-kv">
    <?php the_post_thumbnail('full'); ?>
  </div>
  <div class="productDesc-wrap">
    <table>
      <tr>
        <td>クライアント</td>
        <td><?php the_field('client'); ?></td>
      </tr>
      <tr>
        <td>制作サイトURL</td>
        <td><a href="<?php the_field('site-url'); ?>" target="_blank"><?php the_field('site-url'); ?></a></td>
      </tr>
      <tr>
        <td>制作範囲</td>
        <td><?php the_field('working-range'); ?></td>
      </tr>
    </table>
  </div>
  <div class="fullscreen-img">
    <td>
      <?php
      $image = get_field('product-img');
      $src = $image['url'];
      $width = $image['width'];
      $height = $image['height'];
      ?>
      <img src="<?php echo $src; ?>" width="<?php echo $width; ?>" height="<?php echo $height; ?>" alt="">
    </td>
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