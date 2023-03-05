<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die(); ?>

<!-- <div class="menu-block popup-wrap">

                    <a href="" class="btn-menu btn-toggle"></a>
                    <div class="menu popup-block">
                        <ul class="">
                            <li class="main-page"><a href="">Главная</a>
                            </li>
                            <li>
                                <a href="">Компания</a>
                                <ul>
                                    <li>
                                        <a href="">Пункт 1</a>
                                        <ul>
                                            <li><a href="">Пункт 1</a>
                                            </li>
                                            <li><a href="">Пункт 2</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li><a href="">Пункт 2</a>
                                    </li>
                                    <li><a href="">Пункт 3</a>
                                    </li>
                                    <li><a href="">Пункт 4</a>
                                    </li>
                                </ul>
                            </li>
                            <li><a href="">Новости</a>
                            </li>
                            <li>
                                <a href="">Каталог</a>
                                <ul>
                                    <li>
                                        <a href="">Пункт 1</a>
                                        <ul>
                                            <li><a href="">Пункт 1</a>
                                            </li>
                                            <li><a href="">Пункт 2</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li><a href="">Пункт 2</a>
                                    </li>
                                    <li><a href="">Пункт 3</a>
                                    </li>
                                    <li><a href="">Пункт 4</a>
                                    </li>
                                </ul>
                            </li>
                            <li><a href="">Фотогалерея</a>
                            </li>
                            <li><a href="">Партнерам</a>
                            </li>
                            <li><a href="">Контакты</a>
                            </li>
                        </ul>
                        <a href="" class="btn-close"></a>
                    </div>
                    <div class="menu-overlay"></div>
                </div>  -->
<? 
// echo '<pre>';
// print_r($arResult);
// echo '</pre>';
?>
<? if (!empty($arResult)) { ?>
	<ul id="horizontal-multilevel-menu">

		<?
		$previousLevel = 0;
		foreach ($arResult as $arItem) { ?>

			<? if ($previousLevel && $arItem["DEPTH_LEVEL"] < $previousLevel) { ?>
				<?= str_repeat("</ul></li>", ($previousLevel - $arItem["DEPTH_LEVEL"])); ?>
			<? } ?>

			<? if ($arItem["IS_PARENT"])  {?>

				<? if ($arItem["DEPTH_LEVEL"] == 1) {?>
					<li><a href="<?= $arItem["LINK"] ?>" class="<? if ($arItem["SELECTED"]) : ?>root-item-selected<? else : ?>root-item<? endif ?>"><?= $arItem["TEXT"] ?></a>
						<ul>
						<? } else { ?>
							<li<? if ($arItem["SELECTED"]) : ?> class="item-selected" <? endif ?>><a href="<?= $arItem["LINK"] ?>" class="parent"><?= $arItem["TEXT"] ?></a>
								<ul>
								<? } ?>

							<? } else { ?>

								<? if ($arItem["PERMISSION"] > "D") { ?>

									<? if ($arItem["DEPTH_LEVEL"] == 1) { ?>
										<li><a href="<?= $arItem["LINK"] ?>" class="<? if ($arItem["SELECTED"]) : ?>root-item-selected<? else : ?>root-item<? endif ?>"><?= $arItem["TEXT"] ?></a></li>
									<? } else { ?>
										<li<? if ($arItem["SELECTED"]) : ?> class="item-selected" <? endif ?>><a href="<?= $arItem["LINK"] ?>"><?= $arItem["TEXT"] ?></a>
					</li>
				<? } ?>

			<? } else { ?>

				<? if ($arItem["DEPTH_LEVEL"] == 1) {?>
					<li><a href="" class="<? if ($arItem["SELECTED"]) : ?>root-item-selected<? else : ?>root-item<? endif ?>" title="<?= GetMessage("MENU_ITEM_ACCESS_DENIED") ?>"><?= $arItem["TEXT"] ?></a></li>
				<? } else { ?>
					<li><a href="" class="denied" title="<?= GetMessage("MENU_ITEM_ACCESS_DENIED") ?>"><?= $arItem["TEXT"] ?></a></li>
				<? } ?>

			<? } ?>

		<? } ?>

		<? $previousLevel = $arItem["DEPTH_LEVEL"]; ?>

	<? } ?>

	<? if ($previousLevel > 1) { //close last item tags
	?>
		<?= str_repeat("</ul></li>", ($previousLevel - 1)); ?>
	<? } ?>

	</ul>
	<div class="menu-clear-left"></div>
<? } ?>