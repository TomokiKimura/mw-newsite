<?php
/*
 Template Name: 事業所概要
 */
get_header();
?>

<h1 class="page-h1">事業所概要</h1>
<div class="address">
  <table>
    <tbody>
      <tr>
        <th>屋号</th>
        <td>Make Web（メイクウェブ）</td>
      </tr>
      <tr>
        <th>所在地</th>
        <td>東京都府中市小柳町4-9-22-103</td>
      </tr>
      <tr>
        <th>開業日</th>
        <td>令和３年3月</td>
      </tr>
      <tr>
        <th>事業内容</th>
        <td>WEB制作・広告運用・WEBコンサルティング</td>
      </tr>
      <tr>
        <th>代表</th>
        <td>木村　知己</td>
      </tr>
    </tbody>
  </table>
</div>

<div class="policy">
  <!-- <h2 class="bl-b">制作に関するポリシー</h2> -->
  <h2>制作に関するポリシー</h2>
  <div class="policy-container">
    <div class="policy-wrap">
      <div class="policy-img"><img src="<?php echo get_template_directory_uri(); ?>/IMG/office/policy1.png" alt="わかりやすいをモットーに。"></div>
      <div class="policy-text">
        <h3>わかりやすいをモットーに。</h3>
        <p>私自身、元々PCが得意な方ではなかったです。<br>その為、ご依頼をいただいた際に少しでも不安を感じた方には、ご不明な点は誠意を持ってご説明いたします。</p>
      </div>
    </div>
    <div class="policy-wrap">
      <div class="policy-img"><img src="<?php echo get_template_directory_uri(); ?>/IMG/office/policy2.png" alt="サイト規模に適したご提案をいたします。"></div>
      <div class="policy-text">
        <h3>サイト規模に適したご提案をいたします。</h3>
        <p>大規模サイトや、ECサイトは他社の同業者をおすすめする場合があります。<br>最高のパフォーマンスで制作するために、目的に合った最適なご提案をします。</p>
      </div>
    </div>
    <div class="policy-wrap">
      <div class="policy-img"><img src="<?php echo get_template_directory_uri(); ?>/IMG/office/policy3.png" alt="事業の課題に向き合うパートナーとなります。"></div>
      <div class="policy-text">
        <h3>事業の課題に向き合うパートナーとなります。</h3>
        <p>モットーは「自分のエゴを捨て、相手の課題に向き合い、ニーズに応える」です。<br>（書籍「１分で話せ」より引用）<br>御社ビジネスの発展に貢献し、企業資産の一部であるホームページを、課題解決を目指して共に制作していきたいと考えます。 </p>
      </div>
    </div>
  </div>
</div>
<div class="self">
  <!-- <h2 class="bl-b">自己紹介</h2> -->
  <h2>自己紹介</h2>
  <div class="self-wrap">
    <div class="self-img"><img src="<?php echo get_template_directory_uri(); ?>/IMG/office/self.jpg" alt="木村知己"></div>
    <div class="self-text">
      <p>木村　知己</p>
      <p>Tomoki Kimura</p>
      <p>専門学校を卒業後、介護企業へ就職する。<br>「訪問入浴」とゆう在宅サービスに従事する中で、お客様にサービス提供をする喜びを学ぶ。<br>プレイングマネージャーとして従事する中で、webでの集客採用に興味を持ち、マークアップ言語の学習を始める。<br>web制作を通して事業の発展に貢献したいと考え、現在はフリーランスとしてweb制作を主軸に活動中。</p>
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