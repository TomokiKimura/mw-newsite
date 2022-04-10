<?php
/*
 Template Name: サービス-lpページ
 */
get_header();
?>
<h1 class="page-h1">ランディングページ制作</h1>
<div class="h1-desc">
  <p>ユーザーに商品やサービスの説明をして、お問い合わせなどの行動までを、<br>１ページで完結するように設計されたページを指します。</p>
</div>

<div class="service-contents">
  <div class="lp-container">


    <div class="block1">
      <h2>ユーザー心理に沿ったページ構成</h2>
      <div class="block-desc">
        <p>ユーザーに閲覧して頂く為には、情報設計をしっかり作り、サイトの離脱率を下げることが重要なポイントになります。<br>私たちが情報設計をする際は、まずヒアリングによるペルソナ設定を行います。その後、マーケティングで多用されているフレームワークである「AIDMAの法則」を基本にしたページ構成をご提案いたします。</p>
      </div>
    </div>


    <div class="block2">
      <h2>AIDMAの法則</h2>
      <div class="img-wrap">
        <ul>
          <li><img src="<?php echo get_template_directory_uri(); ?>/IMG/lp/lp-img1.png" alt="注目"></li>
          <li><img src="<?php echo get_template_directory_uri(); ?>/IMG/lp/lp-img2.png" alt="興味"></li>
          <li><img src="<?php echo get_template_directory_uri(); ?>/IMG/lp/lp-img3.png" alt="欲求"></li>
          <li><img src="<?php echo get_template_directory_uri(); ?>/IMG/lp/lp-img4.png" alt="記憶"></li>
          <li><img src="<?php echo get_template_directory_uri(); ?>/IMG/lp/lp-img5.png" alt="購買"></li>
        </ul>
      </div>
      <div class="block-desc">
        <p>ですが、フレームワークはあくまで一つの手法であると捉えています。</p>
        <p>最も重要な「ユーザー目線」を忘れて、制作者の自己満足にはならないように心がけて、テンプレの手法や流行りのデザインに固執せず、事業課題の解決に向けた設計をご提案いたします。</p>
      </div>
    </div>
  </div>

</div>




<div class="footer-serviceList">
  <p class="service-ttl">サービス一覧</p>
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
</div>
<div class="parallax cv-bg">
  <div class="cta">
    <p>業種を問わず、幅広くサイト制作を承っております。<br>お見積もりは無料ですので、お気軽にご連絡ください。</p>
    <div class="cta-btn">
      <a href="#"><span>無料相談をする</span></a>
    </div>
  </div>
</div>
<?php
get_footer();
?>