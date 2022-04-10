<?php
/*
 Template Name: サービス紹介
 */
get_header();
?>
<h1 class="page-h1">サービス紹介</h1>
<div class="h1-desc">
  <p>私たちが提供しているサービスを紹介いたします。<br>お客様に適したコンテンツ内容・課題解決に向けたサイト構築をご提供いたします。</p>
</div>


<div class="service-container">
  <div class="service-block">
    <a href="<?php echo home_url(); ?>/service/homepage">
      <div class="s-icon">
        <img src="<?php echo get_template_directory_uri(); ?>/IMG/service/service1.png" alt="ホームページアイコン">
      </div>
      <div class="s-desc">
        <p>ホームページ制作</p>
        <p>新規顧客の集客、採用の強化、メディアの構築など、資産である企業サイトを活用して、それぞれの課題解決に向けたご提案をいたします。</p>
        <span>ホームページ制作についてみる　＞</span>
      </div>
    </a>
  </div>
  <div class="service-block">
    <a href="<?php echo home_url(); ?>/service/lp">
      <div class="s-icon">
        <img src="<?php echo get_template_directory_uri(); ?>/IMG/service/service2.png" alt="LPアイコン">
      </div>
      <div class="s-desc">
        <p>ランディングページ制作</p>
        <p>1枚の縦に長いWEBページのことを指します。ユーザー心理に沿った構成により、商品やサービスの訴求から成約までの導線設計を行います。</p>
        <span>ランディングページ制作についてみる　＞</span>
      </div>
    </a>
  </div>
  <div class="service-block">
    <a href="<?php echo home_url(); ?>/service/advertisement">
      <div class="s-icon">
        <img src="<?php echo get_template_directory_uri(); ?>/IMG/service/service3.png" alt="広告運用アイコン">
      </div>
      <div class="s-desc">
        <p>運用型広告・運用代行</p>
        <p>お客様の商品・サービスに適したweb広告運用をご提案いたしす。リスティング広告の運用代行やSNS広告を活用して事業成果の効率化を目指します。</p>
        <span>運用型広告・運用代行についてみる　＞</span>
      </div>
    </a>
  </div>
  <div class="service-block">
    <a href="<?php echo home_url(); ?>/service/advertisement">
      <div class="s-icon">
        <img src="<?php echo get_template_directory_uri(); ?>/IMG/service/service4.png" alt="サイト保守・運用アイコン">
      </div>
      <div class="s-desc">
        <p>Webサイト保守・管理</p>
        <p>サーバーやドメインの管理などの技術的なサポートを代行いたします。定期的なアップデートにより、サイト運営の不具合を未然に防ぐことができます。</p>
        <span>Webサイト保守・管理についてみる　＞</span>
      </div>
    </a>
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