<?php
/*
 Template Name: 料金の参考例
 */
get_header();
?>
<h1 class="page-h1">料金の参考例</h1>
<div class="h1-desc">
  <p>ご予算に応じてご提案いたします。<br>下記、料金につきましては目安としてご参考ください。<br>下記の料金は、レスポンシブ対応・デザイン作成込みになります。</p>
</div>

<div class="price-container">

  <div class="select_btn">
    <ul>
      <li><a href="#web"><span>WEB制作</span></a></li>
      <li><a href="#advertisement"><span>運用・保守</span></a></li>
    </ul>
  </div>

  <div id="web" class="web-wrap">
    <div class="hp-block">
      <h2>ホームページ制作</h2>
      <div class="hp-wrap">
        <div class="priceWrap-img"><img src="<?php echo get_template_directory_uri(); ?>/IMG/price/hp1.svg" alt="ホームページ制作費用"></div>
        <div class="priceWrap-desc">
          <span class="p-case">CASE1</span>
          <p class="p-p2">小規模な企業サイト<span>（静的サイト 5P）</span></p>
          <p class="p-p3">¥ 200,000_<span>（税別）</span></p>
          <div class="p-p4">
            <ul>
              <li>オリジナルデザイン</li>
              <li>レスポンシブ対応</li>
              <li>原稿・ワイヤーフレーム作成</li>
              <li>各ブラウザの最新対応</li>
            </ul>
          </div>
        </div>
      </div>
      <div class="hp-wrap">
        <div class="priceWrap-img"><img src="<?php echo get_template_directory_uri(); ?>/IMG/price/hp2.svg" alt="ホームページ制作費用"></div>
        <div class="priceWrap-desc">
          <span class="p-case">CASE2</span>
          <p class="p-p2">ワードプレスの企業サイト<span>（動的サイト 6P）</span></p>
          <p class="p-p3">¥ 300,000_<span>（税別）</span></p>
          <div class="p-p4">
            <ul>
              <li>オリジナルデザイン</li>
              <li>レスポンシブ・各ブラウザ対応</li>
              <li>原稿・ワイヤーフレーム作成</li>
              <li>ブログ更新機能</li>
              <li>納品後の運用フォロー</li>
            </ul>
          </div>
        </div>
      </div>
    </div>

    <div class="hp-block">
      <h2>ランディングページ制作</h2>
      <div class="hp-wrap">
        <div class="priceWrap-img"><img src="<?php echo get_template_directory_uri(); ?>/IMG/price/lp.png" alt="ランディングページ制作費用"></div>
        <div class="priceWrap-desc">
          <span class="p-case">CASE3</span>
          <p class="p-p2">ランディングページ</p>
          <p class="p-p3">¥ 150,000_<span>（税別）</span></p>
          <div class="p-p4">
            <ul>
              <li>オリジナルデザイン</li>
              <li>レスポンシブ・各ブラウザ対応</li>
              <li>原稿・ワイヤーフレーム作成</li>
              <li>お問合せフォーム作成</li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div id="advertisement" class="advertisement-wrap">
    <div class="advertisement-block">
      <h2>サイト運用・保守</h2>
      <div>
        <table>
          <tr>
            <th>ドメイン・サーバー管理（1/M）</th>
            <td>¥ 10,000_〜(税別)</td>
          </tr>
          <tr>
            <th>サイトコンテンツ運用（1/M）</th>
            <td>¥ 20,000_〜(税別)</td>
          </tr>
          <tr>
            <th>サイト更新・相談窓口（適宜）</th>
            <td>¥ 10,000_〜(税別)</td>
          </tr>
        </table>
      </div>
    </div>

    <div class="advertisement-block">
      <h2>Web広告・運用</h2>
      <div>
        <table>
          <tr>
            <th>運用型広告代理</th>
            <td>¥ 30,000_〜(税別)</td>
          </tr>
        </table>
      </div>
    </div>
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