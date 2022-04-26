<!DOCTYPE html>
<html lang="ja">

<head>
  <!-- Global site tag (gtag.js) - Google Analytics -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=G-TZQSB9JD5L"></script>
  <script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
      dataLayer.push(arguments);
    }
    gtag('js', new Date());

    gtag('config', 'G-TZQSB9JD5L');
  </script>
  <meta charset="UTF-8">
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/CSS/common.css">
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/CSS/style.css">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Make Web</title>
  <meta name="description" content="東京のweb制作事業所です。ホームページ制作、ランディングページ制作、広告運用など承ります。課題に向き合いニーズにこたえるをモットーに、事業課題の解決に取り組むご提案をいたします。">
  <link rel="icon" href="<?php echo get_template_directory_uri(); ?>/IMG/common/favicon.jpg">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <?php wp_head(); ?>
  <!-- Begin Mieruca Embed Code -->
  <script type="text/javascript" id="mierucajs">
    window.__fid = window.__fid || [];
    __fid.push([827860001]);
    (function() {
      function mieruca() {
        if (typeof window.__fjsld != "undefined") return;
        window.__fjsld = 1;
        var fjs = document.createElement('script');
        fjs.type = 'text/javascript';
        fjs.async = true;
        fjs.id = "fjssync";
        var timestamp = new Date;
        fjs.src = ('https:' == document.location.protocol ? 'https' : 'http') + '://hm.mieru-ca.com/service/js/mieruca-hm.js?v=' + timestamp.getTime();
        var x = document.getElementsByTagName('script')[0];
        x.parentNode.insertBefore(fjs, x);
      };
      setTimeout(mieruca, 500);
      document.readyState != "complete" ? (window.attachEvent ? window.attachEvent("onload", mieruca) : window.addEventListener("load", mieruca, false)) : mieruca();
    })();
  </script>
  <!-- End Mieruca Embed Code -->
</head>

<!-- <body id="top"> -->

<body <?php body_class(); ?>>
  <header>
    <div class="wrapper">
      <div class="sub-header">
        <h1>東京のweb制作事務所　|　メイクウェブ</h1>
      </div>
      <div class="h-wrap">
        <div class="h-logo">
          <a href="<?php echo home_url(); ?>">
            <img src="<?php echo get_template_directory_uri(); ?>/IMG/common/1.svg" alt="MakeWeb">
          </a>
        </div>
        <div class="h-nav">
          <ul>

            <?php if (is_home() || is_front_page()) : ?>
              <li><a id="user-page" href="<?php echo home_url(); ?>">HOME</a></li>
            <?php else : ?>
              <li><a href="<?php echo home_url(); ?>">HOME</a></li>
            <?php endif; ?>


            <?php if (is_page('43')) : ?>
              <li><a id="user-page" href="<?php echo home_url(); ?>/office">事務所概要</a></li>
            <?php else : ?>
              <li><a href="<?php echo home_url(); ?>/office">事務所概要</a></li>
            <?php endif; ?>


            <?php if (is_page('46')) : ?>
              <li><a id="user-page" href="<?php echo home_url(); ?>/service">サービス</a></li>
            <?php else : ?>
              <li><a href="<?php echo home_url(); ?>/service">サービス</a></li>
            <?php endif; ?>



            <?php if (is_post_type_archive('product')) : ?>

              <li><a id="user-page" href="<?php echo home_url(); ?>/product">制作実績</a></li>
            <?php else : ?>
              <li><a href="<?php echo home_url(); ?>/product">制作実績</a></li>
            <?php endif; ?>


            <?php if (is_page('63')) : ?>
              <li><a id="user-page" href="<?php echo home_url(); ?>/flow">制作の流れ</a></li>
            <?php else : ?>
              <li><a href="<?php echo home_url(); ?>/flow">制作の流れ</a></li>
            <?php endif; ?>


            <?php if (is_page('66')) : ?>
              <li><a id="user-page" href="<?php echo home_url(); ?>/price">料金</a></li>
            <?php else : ?>
              <li><a href="<?php echo home_url(); ?>/price">料金</a></li>
            <?php endif; ?>



            <?php
            $url = $_SERVER['REQUEST_URI'];
            if (strstr($url, 'blogs') == true) :
            ?>

              <li><a id="user-page" href="<?php echo home_url(); ?>/blogs">ブログ</a></li>
            <?php else : ?>
              <li><a href="<?php echo home_url(); ?>/blogs">ブログ</a></li>
            <?php endif; ?>

            <li class="detail-btn"><a href="<?php echo home_url(); ?>/contact"><span>無料相談をする</span></a></li>


          </ul>
        </div>
        <div class="sp-h-nav">
          <span class="material-icons" id="open">menu</span>
        </div>
        <div class="overlay">
          <span class="material-icons" id="close">close</span>
          <nav>
            <ul id="close2">
              <li><a href="<?php echo home_url(); ?>">HOME</a></li>
              <li><a href="<?php echo home_url(); ?>/office">事務所概要</a></li>
              <li><a href="<?php echo home_url(); ?>/service">サービス</a></li>
              <li><a href="<?php echo home_url(); ?>/product">制作実績</a></li>
              <li><a href="<?php echo home_url(); ?>/flow">制作の流れ</a></li>
              <li><a href="<?php echo home_url(); ?>/price">料金</a></li>
              <li><a href="<?php echo home_url(); ?>/blogs">ブログ</a></li>
            </ul>
          </nav>
        </div>
      </div>
    </div>
  </header>

  <!-- パンクずリスト -->
  <?php if (!(is_home() || is_front_page())) : ?>
    <div class="breadCrumb block-layout">
      <div class="breadcrumb-area">
        <?php
        if (function_exists('bcn_display')) {
          bcn_display();
        }
        ?>
      </div>
    </div>
  <?php endif; ?>