<!DOCTYPE html>
<html lang="<?= LANGUAGE_ID ?>">

<head>

    <?php
    /** @global CMain $APPLICATION */
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
<?$APPLICATION->IncludeComponent("bitrix:menu", "top", Array(
    "ALLOW_MULTI_SELECT" => "N",	// Разрешить несколько активных пунктов одновременно
    "CHILD_MENU_TYPE" => "left",	// Тип меню для остальных уровней
    "DELAY" => "N",	// Откладывать выполнение шаблона меню
    "MAX_LEVEL" => "1",	// Уровень вложенности меню
    "MENU_CACHE_GET_VARS" => array(	// Значимые переменные запроса
        0 => "",
    ),
    "MENU_CACHE_TIME" => "3600000",	// Время кеширования (сек.)
    "MENU_CACHE_TYPE" => "A",	// Тип кеширования
    "MENU_CACHE_USE_GROUPS" => "N",	// Учитывать права доступа
    "ROOT_MENU_TYPE" => "top",	// Тип меню для первого уровня
    "USE_EXT" => "N",	// Подключать файлы с именами вида .тип_меню.menu_ext.php
),
    false
);?>

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