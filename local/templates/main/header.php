<!DOCTYPE html>
<html lang="<?= LANGUAGE_ID ?>">

<head>

    <?php
    /** @global \CMain $APPLICATION */
    $APPLICATION->Showhead();

    if (!defined("SITE_TEMPLATE_PATH")) {
        define("SITE_TEMPLATE_PATH", '/local/templates/main');
    }

    $assets = \Bitrix\Main\Page\Asset::getInstance();
    $assets->addCss(SITE_TEMPLATE_PATH . '/css/bootstrap.min.css');
    $assets->addCss(SITE_TEMPLATE_PATH . '/css/all.min.css');
    $assets->addCss('https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic');
    $assets->addCss('https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800');
    $assets->addCss(SITE_TEMPLATE_PATH . '/css/clean-blog.min.css');

    $assets->addJs(SITE_TEMPLATE_PATH . '/js/jquery/jquery.min.js');
    $assets->addJs(SITE_TEMPLATE_PATH . '/js/bootstrap.bundle.min.js');
    $assets->addJs(SITE_TEMPLATE_PATH . '/js/clean-blog.min.js');
    ?>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title><?php $APPLICATION->ShowTitle(false); ?></title>

</head>

<body>

<!-- Navigation -->
<nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
    <div class="container">
        <a class="navbar-brand" href="index.html">Start Bootstrap</a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse"
                data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false"
                aria-label="Toggle navigation">
            Меню
            <i class="fas fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="index.html">Главная</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="about.html">О сайте</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="contact.html">Контакты</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<!-- Page Header -->
<header class="masthead" style="background-image: url('img/home-bg.jpg')">
    <div class="overlay"></div>
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-10 mx-auto">
                <div class="site-heading">
                    <h1><?php $APPLICATION->ShowTitle('h1'); ?></h1>
                    <span class="subheading">Блог с рецептами</span>
                </div>
            </div>
        </div>
    </div>
</header>