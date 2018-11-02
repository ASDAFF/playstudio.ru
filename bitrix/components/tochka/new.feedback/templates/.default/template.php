<?
if(!defined("B_PROLOG_INCLUDED")||B_PROLOG_INCLUDED!==true)die();
/**
 * Bitrix vars
 *
 * @var array $arParams
 * @var array $arResult
 * @var CBitrixComponentTemplate $this
 * @global CMain $APPLICATION
 * @global CUser $USER
 */
?>
<div class="mfeedback">
<h3>Заказать обратный звонок</h3>
<?if(!empty($arResult["ERROR_MESSAGE"]))
{
	foreach($arResult["ERROR_MESSAGE"] as $v)
		ShowError($v);
}
if(!empty($arResult['OK']))
{
	?><div class="mf-ok-text">Ваше сообщение отправлено!</div><?
}
?>
<form method="POST">
<?=bitrix_sessid_post()?>
	<div class="mf-name form_row">
		<div class="mf-text">
			<?=GetMessage("MFT_NAME")?>
		</div>
		<input type="text" name="user_name" value="<?=$arResult["AUTHOR_NAME"]?>">
	</div>

	<div class="mf-phone form_row">
		<div class="mf-text">
			<?=GetMessage("MFT_PHONE")?><span class="mf-req">*</span>
		</div>
		<input type="text" name="phone" value="<?=$arResult["PHONE"]?>">
	</div>
	<input type="hidden" name="PARAMS_HASH" value="<?=$arResult["PARAMS_HASH"]?>">
	<div class="submit_block">
		<input type="submit" value="Отправить" name="submit" onclick="yaCounter7545230.reachGoal('zvonok');">
	</div>		
</form>
</div>