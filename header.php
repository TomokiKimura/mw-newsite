<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/CSS/common.css">
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/CSS/home.css">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Make Web</title>
  <meta name="description" content="">
  <link rel="icon" href="<?php echo get_template_directory_uri(); ?>/IMG/common/favicon.jpg">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <?php wp_head(); ?>
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
          <a href="#">
            <img src="<?php echo get_template_directory_uri(); ?>/IMG/common/1.svg" alt="ロゴ">
          </a>
        </div>
        <div class="h-nav">
          <ul>
            <li><a id="user-page" href="#">HOME</a></li>
            <li><a href="office/index.html">事務所概要</a></li>
            <li><a href="service/index.html">サービス</a></li>
            <li><a href="#">制作実績</a></li>
            <li><a href="#">制作の流れ</a></li>
            <li><a href="#">料金</a></li>
            <li><a href="#">ブログ</a></li>
            <li class="detail-btn"><a href="#"><span>無料相談をする</span></a></li>
          </ul>
        </div>
        <div class="sp-h-nav">
          <span class="material-icons" id="open">menu</span>
        </div>
        <div class="overlay">
          <span class="material-icons" id="close">close</span>
          <nav>
            <ul id="close2">
              <li><a href="#">HOME</a></li>
              <li><a href="office/index.html">事務所概要</a></li>
              <li><a href="service/index.html">サービス</a></li>
              <li><a href="#">制作実績</a></li>
              <li><a href="#">制作の流れ</a></li>
              <li><a href="#">料金</a></li>
              <li><a href="#">ブログ</a></li>
            </ul>
          </nav>
        </div>
      </div>
    </div>
  </header>