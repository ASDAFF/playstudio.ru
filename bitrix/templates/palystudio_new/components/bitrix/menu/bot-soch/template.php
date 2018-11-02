<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>

<?if (!empty($arResult)):?>

<?

foreach($arResult as $arItem):
$ind++;?>

<a href="<?=$arItem["LINK"]?>" class="nchild<?=$ind?><?if ($arItem["SELECTED"]):?> selected<?else:?><?endif?>"><?=$arItem["TEXT"]?></a>

<?endforeach?>

<?endif?>