<?php if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die(); ?>

<?php if (!empty($arResult)): ?>
    <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
        <div class="container">
            <a class="navbar-brand" href="/">Start Bootstrap</a>
            <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse"
                    data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false"
                    aria-label="Toggle navigation">
                Меню
                <i class="fas fa-bars"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ml-auto">
                    <?php foreach ($arResult as $arItem): ?>
                        <li class="nav-item">
                            <a class="nav-link" href="<?= $arItem["LINK"] ?>"><?= $arItem["TEXT"] ?></a>
                        </li>
                    <?php endforeach ?>
                </ul>
            </div>
        </div>
    </nav>
<?php endif ?>


