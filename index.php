<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetPageProperty("description", "Описание страницы кулинарного блога");
$APPLICATION->SetPageProperty("h1", "Кулинарный блог.");
$APPLICATION->SetTitle("Кулинарный блог. И все такое...");
?><!-- Main Content -->
<div class="container">
    <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
            <div class="post-preview">
                <a href="post.html">
                    <h2 class="post-title">
                        Люля-кебаб
                    </h2>
                    <h3 class="post-subtitle">
                        Люля-кебаб — это разновидность мясного шашлыка, преимущественно готовят его в Турции, Средней
                        Азии
                    </h3>
                </a>
                <p class="post-meta">Опубликовала
                    <a href="author.html">Светлана Петрова</a>
                    24 Сентября 2018</p>
            </div>
            <hr>
            <div class="post-preview">
                <a href="post.html">
                    <h2 class="post-title">
                        Песочное печенье через мясорубку
                    </h2>
                </a>
                <p class="post-meta">Опубликовал
                    <a href="author.html">Пётр Петров</a>
                    18 Сентября 2018</p>
            </div>
            <hr>
            <div class="post-preview">
                <a href="post.html">
                    <h2 class="post-title">
                        Тарт с лимонным курдом
                    </h2>
                    <h3 class="post-subtitle">
                        Пришла очередь и этого замечательного десерта
                    </h3>
                </a>
                <p class="post-meta">Опубликовала
                    <a href="author.html">Светлана Петрова</a>
                    8 Июля 2019</p>
            </div>
            <hr>
            <div class="post-preview">
                <a href="post.html">
                    <h2 class="post-title">
                        Кукурузная халва
                    </h2>
                </a>
                <p class="post-meta">Опубликовал
                    <a href="author.html">Пётр Петров</a>
                    24 Сентября 2018</p>
            </div>
            <hr>
            <div class="post-preview">
                <a href="post.html">
                    <h2 class="post-title">
                        Рататуй
                    </h2>
                    <h3 class="post-subtitle">
                        Самое летнее блюдо
                    </h3>
                </a>
                <p class="post-meta">Опубликовал
                    <a href="author.html">Пётр Петров</a>
                    12 Июня 2018</p>
            </div>
            <!-- Pager -->
            <div class="clearfix">
                <a class="btn btn-primary float-left" href="index.html">&larr; Посты позже</a>
                <a class="btn btn-primary float-right" href="index.html">Посты ранее &rarr;</a>
            </div>
        </div>
    </div>
</div>

<hr>

<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>