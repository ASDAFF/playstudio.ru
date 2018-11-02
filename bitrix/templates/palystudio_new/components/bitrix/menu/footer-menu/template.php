<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>

<?if (!empty($arResult)):?>

<?

foreach($arResult as $arItem):?>

<a href="<?=$arItem["LINK"]?>" class="<?if ($arItem["SELECTED"]):?>selected<?else:?><?endif?>"><?=$arItem["TEXT"]?></a>
<div class="clear-div"></div>
<?endforeach?>

<?endif?>