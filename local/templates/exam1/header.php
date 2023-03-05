<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die(); ?>
<?
// Подключим языковой файл для текущего компонента
// Предполагаем, что языковой файл расположен стандартным образом
IncludeTemplateLangFile(__FILE__);
global $APPLICATION;
$sCurrentH = date('H', time());

?>
<!DOCTYPE html>
<html lang="<?= LANGUAGE_ID ?>">

<head>
    <title><?= $APPLICATION->ShowTitle() ?></title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta charset="utf-8" />
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <? $APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH . "/css/reset.css") ?>
    <? $APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH . "/css/style.css") ?>
    <? $APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH . "/css/owl.carousel.css") ?>

    <? $APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH . "/js/jquery.min.js") ?>
    <? $APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH . "/js/owl.carousel.min.js") ?>
    <? $APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH . "/js/scripts.js") ?>

    <link rel="icon" type="image/vnd.microsoft.icon" href="<?= SITE_TEMPLATE_PATH ?>./img/favicon.ico">
    <link rel="shortcut icon" href="<?= SITE_TEMPLATE_PATH ?>./img/favicon.ico">
    <?= $APPLICATION->ShowHead(); ?>
</head>

<body>
    <?= $APPLICATION->ShowPanel(); ?>
    <div class="wrap">
        <!-- header -->
        <header class="header">
            <div class="inner-wrap">
                <div class="logo-block"><a href="" class="logo">Мебельный магазин</a>
                </div>
                <div class="main-phone-block">
                    <? if ($sCurrentH >= 9 && $sCurrentH <= 18) { ?>
                        <a href="tel:84952128506" class="phone">8 (495) 212-85-06</a>
                    <? } else { ?>
                        <a href="mailto:store@store.ru" class="phone">store@store.ru</a>
                    <? } ?>
                    <div class="shedule">время работы с 9-00 до 18-00</div>
                </div>
                <div class="actions-block">
                    <form action="/" class="main-frm-search">
                        <input type="text" placeholder="Поиск">
                        <button type="submit"></button>
                    </form>
                    <nav class="menu-block">
                        <ul>
                            <li class="att popup-wrap">
                                <a id="hd_singin_but_open" href="" class="btn-toggle">Войти на сайт</a>
                                <form action="/" class="frm-login popup-block">
                                    <div class="frm-title">Войти на сайт</div>
                                    <a href="" class="btn-close">Закрыть</a>
                                    <div class="frm-row"><input type="text" placeholder="Логин"></div>
                                    <div class="frm-row"><input type="password" placeholder="Пароль"></div>
                                    <div class="frm-row"><a href="" class="btn-forgot">Забыли пароль</a></div>
                                    <div class="frm-row">
                                        <div class="frm-chk">
                                            <input type="checkbox" id="login">
                                            <label for="login">Запомнить меня</label>
                                        </div>
                                    </div>
                                    <div class="frm-row"><input type="submit" value="Войти"></div>
                                </form>
                            </li>
                            <li><a href="">Зарегистрироваться</a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </header>
        <!-- /header -->
        <!-- nav -->
        <nav class="nav">
            <div class="inner-wrap">
                <? $APPLICATION->IncludeComponent(
                    "bitrix:menu",
                    "top_menu_exam1",
                    array(
                        "ALLOW_MULTI_SELECT" => "N",    // Разрешить несколько активных пунктов одновременно
                        "CHILD_MENU_TYPE" => "left",    // Тип меню для остальных уровней
                        "DELAY" => "N",    // Откладывать выполнение шаблона меню
                        "MAX_LEVEL" => "3",    // Уровень вложенности меню
                        "MENU_CACHE_GET_VARS" => array(    // Значимые переменные запроса
                            0 => "",
                        ),
                        "MENU_CACHE_TIME" => "3600",    // Время кеширования (сек.)
                        "MENU_CACHE_TYPE" => "N",    // Тип кеширования
                        "MENU_CACHE_USE_GROUPS" => "Y",    // Учитывать права доступа
                        "ROOT_MENU_TYPE" => "top",    // Тип меню для первого уровня
                        "USE_EXT" => "Y",    // Подключать файлы с именами вида .тип_меню.menu_ext.php
                    ),
                    false
                ); ?>
            </div>
        </nav>
        <!-- /nav -->
        <!-- breadcrumbs -->
        <? if ($APPLICATION->GetCurDir() != '/') { ?>
            <div class="breadcrumbs-box">
                <div class="inner-wrap">
                    <a href="">Главная</a>
                    <a href="">Мебель</a>
                    <span>Выставки и события</span>
                </div>
            </div>
        <?php } ?>
        <!-- /breadcrumbs -->
        <!-- page -->
        <div class="page">
            <!-- content box -->
            <div class="content-box">
                <!-- content -->
                <div class="content">
                    <div class="cnt">
                        <? if ($APPLICATION->GetCurDir() != '/') { ?>
                            <header>
                                <h1><?= $APPLICATION->ShowTitle(true) ?></h1>
                            </header>
                        <?php } ?>


                        <? if ($APPLICATION->GetCurDir() == '/') { ?>
                            <p>«Мебельная компания» осуществляет производство мебели на высококлассном оборудовании с применением минимальной доли ручного труда, что позволяет обеспечить высокое качество нашей продукции. Налажен производственный процесс как массового и индивидуального характера, что с одной стороны позволяет обеспечить постоянную номенклатуру изделий и индивидуальный подход – с другой.
                            </p>


                            <!-- index column -->
                            <div class="cnt-section index-column">
                                <div class="col-wrap">

                                    <!-- main actions box -->
                                    <div class="column main-actions-box">
                                        <div class="title-block">
                                            <h2>Новинки</h2>
                                            <hr>
                                        </div>
                                        <div class="items-wrap">
                                            <div class="item-wrap">
                                                <div class="item">
                                                    <div class="title-block att">
                                                        Угловой диван!
                                                    </div>
                                                    <br>
                                                    <div class="inner-block">
                                                        <a href="" class="photo-block">
                                                            <img src="<?= SITE_TEMPLATE_PATH ?>./img/new01.jpg" alt="">
                                                        </a>
                                                        <div class="text"><a href="">Угловой диван "Титаник", с большим выбором расцветок и фактур.</a>
                                                            <a href="" class="btn-arr"></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="item-wrap">
                                                <div class="item">
                                                    <div class="title-block att">
                                                        Угловой диван!
                                                    </div>
                                                    <br>
                                                    <div class="inner-block">
                                                        <a href="" class="photo-block">
                                                            <img src="<?= SITE_TEMPLATE_PATH ?>./img/new02.jpg" alt="">
                                                        </a>
                                                        <div class="text"><a href="">Угловой диван "Титаник", с большим выбором расцветок и фактур.</a>
                                                            <a href="" class="btn-arr"></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="item-wrap">
                                                <div class="item">
                                                    <div class="title-block att">
                                                        Угловой диван!
                                                    </div>
                                                    <br>
                                                    <div class="inner-block">
                                                        <a href="" class="photo-block">
                                                            <img src="<?= SITE_TEMPLATE_PATH ?>./img/new03.jpg" alt="">
                                                        </a>
                                                        <div class="text"><a href="">Угловой диван "Титаник", с большим выбором расцветок и фактур.</a>
                                                            <a href="" class="btn-arr"></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <a href="" class="btn-next">Все новинки</a>
                                    </div>
                                    <!-- /main actions box -->
                                    <!-- main news box -->
                                    <div class="column main-news-box">
                                        <div class="title-block">
                                            <h2>Новости</h2>
                                        </div>
                                        <hr>
                                        <div class="items-wrap">
                                            <div class="item-wrap">
                                                <div class="item">
                                                    <div class="title"><a href="">29 августа 2012</a>
                                                    </div>
                                                    <div class="text"><a href="">Поступление лучших офисных кресел из Германии </a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="item-wrap">
                                                <div class="item">
                                                    <div class="title"><a href="">29 августа 2012</a>
                                                    </div>
                                                    <div class="text"><a href="">Мастер-класс дизайнеров из Италии для производителей мебели </a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="item-wrap">
                                                <div class="item">
                                                    <div class="title"><a href="">29 августа 2012</a>
                                                    </div>
                                                    <div class="text"><a href="">Поступление лучших офисных кресел из Германии </a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="item-wrap">
                                                <div class="item">
                                                    <div class="title"><a href="">29 августа 2012</a>
                                                    </div>
                                                    <div class="text"><a href="">Наша дилерская сеть расширилась теперь ассортимент наших товаров доступен в Казани </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <a href="" class="btn-next">Все новости</a>
                                    </div>
                                    <!-- /main news box -->

                                </div>
                            </div>
                            <!-- /index column -->

                            <!-- afisha box -->
                            <div class="cnt-section afisha-box">
                                <div class="section-title-block">
                                    <h2 class="second-ttile">Ближайшие мероприятия</h2>
                                    <a href="" class="btn-next">все мероприятия</a>
                                </div>
                                <hr>
                                <div class="items-wrap">
                                    <div class="item-wrap">
                                        <div class="item">
                                            <div class="title"><a href="">29 августа 2012, Москва</a>
                                            </div>
                                            <div class="text"><a href="">Семинар производителей мебели России и СНГ, Обсуждение тенденций.</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item-wrap">
                                        <div class="item">
                                            <div class="title"><a href="">29 августа 2012, Москва</a>
                                            </div>
                                            <div class="text"><a href="">Открытие шоу-рума на Невском проспекте. Последние модели в большом ассортименте.</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item-wrap">
                                        <div class="item">
                                            <div class="title"><a href="">29 августа 2012, Москва</a>
                                            </div>
                                            <div class="text"><a href="">Открытие нового магазина в нашей дилерской сети.</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- /afisha box -->
                        <? } ?>