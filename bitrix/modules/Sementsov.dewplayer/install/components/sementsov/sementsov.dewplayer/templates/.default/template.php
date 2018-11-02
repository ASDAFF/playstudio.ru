<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<?
$this->AddEditAction($arResult['ID'], $arResult['EDIT_LINK'], CIBlock::GetArrayByID($arResult["IBLOCK_ID"], "ELEMENT_EDIT"));
$this->AddDeleteAction($arResult['ID'], $arResult['DELETE_LINK'], CIBlock::GetArrayByID($arResult["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
?>
<div id="<?=$this->GetEditAreaId($arResult['ID']);?>">
    <object type="application/x-shockwave-flash" data="<?=$arResult['dewplayer']['path']?>" width="240" height="200" id="dewplayer" name="dewplayer">
        <param name="wmode" value="transparent" />
    	<param name="movie" value="<?=$arResult['dewplayer']['path']?>" />
    	<param name="flashvars" value="showtime=true&autoreplay=true&xml=<?=$arResult['dewplayer']['xml']?>" />
    </object>
</div>