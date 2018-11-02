<?if(!defined("B_PROLOG_INCLUDED")||B_PROLOG_INCLUDED!==true)die();?>
<div class="mfeedback">
<?if(!empty($arResult["ERROR_MESSAGE"]))
{
	foreach($arResult["ERROR_MESSAGE"] as $v)
		ShowError($v);
}
if(strlen($arResult["OK_MESSAGE"]) > 0)
{
	?><div class="mf-ok-text"><?=$arResult["OK_MESSAGE"]?></div><?
}
?>

<form action="#" method="POST">
<?=bitrix_sessid_post()?>
	<?foreach($arParams["NEW_EXT_FIELDS"] as $i => $ext_field):?>
	<div class="input-wrapper">
		<input type="tel" class="masked-phone" name="custom[<?$i?>]" value="<?=$arResult["custom_$i"]?>" placeholder="Ваш телефон"><input type="submit" name="submit" value="<?=GetMessage("MFT_SUBMIT")?>">
	</div>
	<?endforeach;?>
</form>
</div>