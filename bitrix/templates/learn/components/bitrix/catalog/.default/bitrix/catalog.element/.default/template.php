<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<div class="catalog-detail">
	<div class="catalog-item">
<?
$width = 0;
if($arParams['DETAIL_SHOW_PICTURE'] != 'N' && (is_array($arResult["PREVIEW_PICTURE"]) || is_array($arResult["DETAIL_PICTURE"]))):
?>
		<div class="catalog-item-image">
<?
	if(is_array($arResult["DETAIL_PICTURE"])):
		$width = $arResult["DETAIL_PICTURE"]["WIDTH"];
?>
			<img border="0" src="<?=$arResult["DETAIL_PICTURE"]["SRC"]?>" width="<?=$arResult["DETAIL_PICTURE"]["WIDTH"]?>" height="<?=$arResult["DETAIL_PICTURE"]["HEIGHT"]?>" alt="<?=$arResult["NAME"]?>" title="<?=$arResult["NAME"]?>" />
<?
	elseif(is_array($arResult["PREVIEW_PICTURE"])):
		$width = $arResult["PREVIEW_PICTURE"]["WIDTH"];
?>
			<img border="0" src="<?=$arResult["PREVIEW_PICTURE"]["SRC"]?>" width="<?=$arResult["PREVIEW_PICTURE"]["WIDTH"]?>" height="<?=$arResult["PREVIEW_PICTURE"]["HEIGHT"]?>" alt="<?=$arResult["NAME"]?>" title="<?=$arResult["NAME"]?>" />
<?
	endif;
?>
		</div>
<?
endif;
?>
		<div class="catalog-item-desc<?=$width < 300 ? '-float' : ''?>">
<?if(!empty($arResult["DISPLAY_PROPERTIES"]["NOVELTY"]["DISPLAY_VALUE"])):?><div class="novelty"><?=$arResult["DISPLAY_PROPERTIES"]["NOVELTY"]["NAME"]?></div><?endif;?>
<?
if($arResult["DETAIL_TEXT"]):
	echo $arResult["DETAIL_TEXT"];
elseif($arResult["PREVIEW_TEXT"]):
	echo $arResult["PREVIEW_TEXT"];
endif;
?>
		</div>
<?
foreach($arResult["PRICES"] as $code=>$arPrice):
	if($arPrice["CAN_ACCESS"]):
?>
		<div class="catalog-item-price"><span><?=$arResult["CAT_PRICES"][$code]["TITLE"];?>:</span> <?=$arPrice["PRINT_VALUE"]?> <?=GetMessage("CATALOG_CURRENCY")?></div>
<?
	endif;
endforeach;
?>

<?

if(is_array($arResult["SECTION"])):
?>
		<br style="clear:both" /><br><a href="<?=$arResult["SECTION"]["SECTION_PAGE_URL"]?>">&larr; <?=GetMessage("CATALOG_BACK")?></a>
<?
elseif (is_array($arResult['IBLOCK'])):
?>
		<br style="clear:both" /><br><a href="<?=$arResult["IBLOCK"]["LIST_PAGE_URL"]?>">&larr; <?=GetMessage("CATALOG_BACK")?></a>
<?
endif;
?>
	</div>
</div>
