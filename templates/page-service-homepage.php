<?php
/*
 Template Name: サービス-ホームページ
 */
get_header();
?>
<h1 class="page-h1">ホームページ制作</h1>
<div class="h1-desc">
  <p>事業の様々な課題に対して、WEB制作による課題解決のご提案をいたします。<br>中小企業のコーポレートサイトやECサイトなど、幅広いWEB制作を承っております。</p>
</div>




<div class="service-contents">
  <div class="homepage-container">
    <div class="homepage-block">
      <div class="case"><span>CASE１</span></div>
      <h2>新規見込み客の開拓をしたい</h2>
      <div class="block-desc">
        <p>
          売上が既存顧客に依存しており、新規顧客への開拓がうまくできていないと、長期的には売上の頭打ちが予測されます。<br>また、広告や仲介業者に頼り切ってしまうと、収益の増加を鈍らせてしまうことがあります。<br>WEBサイトを戦略的に制作して、ユーザーの導線を設計することで、新規見込み客としてアプローチをすることが可能です。
        </p>
      </div>
    </div>
    <div class="homepage-block">
      <div class="case"><span>CASE２</span></div>
      <h2>効率的に採用したい</h2>
      <div class="block-desc">
        <p>
          大手の採用媒体や、ハローワークの求人では、限られたスペースでの訴求になる為、他社との差別化が困難な場合があります。<br>掲載はしているが反響がなくコストが拡大していくケースをよくお聞きします。<br>自社サイトによる求人では、自社のアピールを存分に行うことができる為、お問い合わせ後のユーザー心理の相違も軽減することが期待できます。
        </p>
      </div>
    </div>
    <div class="homepage-block">
      <div class="case"><span>CASE３</span></div>
      <h2>WEBシステムの構築で業務を効率化</h2>
      <div class="block-desc">
        <p>WEBフォームのシステム化により、顧客データの自動管理が可能になる為、人員リソースの軽減ができます。<br>また、自動見積もりの構築や、よくある質問のページ作成により、サポート窓口の負担を軽減することが可能です。
        </p>
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