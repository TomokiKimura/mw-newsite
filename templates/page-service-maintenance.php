<?php
/*
 Template Name: サービス-運用
 */
get_header();
?>
<h1 class="page-h1">サイト保守・管理</h1>
<div class="h1-desc">
  <p>納品後のサイト保守・管理をお任せ頂ければ、下記のようなご不安を解決いたします。<br>例えばこのようなお困りのお声をよくお聞きします。</p>
</div>
<div class="service-contents">
  <div class="maintenance-container">

    <div class="block1">
      <h2></h2>
      <div class="block1-2">
        <h3>サーバーやドメインの障害対応・管理が手間なので、誰かに任せたい。</h3>
        <h3>Webサイトのセキュリティに漠然と不安を感じている。</h3>
        <h3>CMSなどのアップデートを定期的に行って欲しい。</h3>
      </div>
      <p>CMSのアップデートは、バックアップから試験運用、データ更新を一貫して承っておりますので、社内リソースの効率化に向けてご活用ください。<br><br>サーバー・ドメインに関する相談窓口も承っておりますので、初めてサイトを開設されて漠然とご不安を感じてる方は、無料相談より保守・管理プランのご相談頂ければと思います。</p>
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