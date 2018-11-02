<?php
if(!defined("B_PROLOG_INCLUDED")||B_PROLOG_INCLUDED!==true)die();

/**
 * Bitrix vars
 *
 * @var array $arParams
 * @var array $arResult
 * @var CBitrixComponent $this
 * @global CMain $APPLICATION
 * @global CUser $USER
 */

$arResult["PARAMS_HASH"] = md5(serialize($arParams).$this->GetTemplateName());
$arParams["EVENT_NAME"] = trim($arParams["EVENT_NAME"]);
if($arParams["EVENT_NAME"] == '') $arParams["EVENT_NAME"] = "FEEDBACK_FORM";

if($_SERVER["REQUEST_METHOD"] == "POST" && (!isset($_POST["PARAMS_HASH"]) || $arResult["PARAMS_HASH"] === $_POST["PARAMS_HASH"]))
{
	$arResult["ERROR_MESSAGE"] = array();
	if(check_bitrix_sessid())
	{
		if(empty($_POST['phone'])) $arResult["ERROR_MESSAGE"][] = GetMessage("MF_REQ_PHONE");
		if(empty($arResult["ERROR_MESSAGE"]))
		{
			$arResult['OK']=true;
			$arFields = Array(
				"AUTHOR" => $_POST["user_name"],
				"PHONE" => $_POST["phone"],
			);
			if(!empty($arParams["EVENT_MESSAGE_ID"]))
			{
				foreach($arParams["EVENT_MESSAGE_ID"] as $v)
					if(IntVal($v) > 0)
						CEvent::Send($arParams["EVENT_NAME"], SITE_ID, $arFields, "N", IntVal($v));
			}
			else
				CEvent::Send($arParams["EVENT_NAME"], SITE_ID, $arFields);
			$_SESSION["MF_NAME"] = htmlspecialcharsbx($_POST["user_name"]);					
		}		
		
		$arResult["AUTHOR_NAME"] = htmlspecialcharsbx($_POST["user_name"]);
		$arResult["PHONE"] = htmlspecialcharsbx($_POST["phone"]);		
	}
	else
		$arResult["ERROR_MESSAGE"][] = GetMessage("MF_SESS_EXP");
}
elseif($_REQUEST["success"] == $arResult["PARAMS_HASH"]) $arResult["OK_MESSAGE"] = $arParams["OK_TEXT"];

if(empty($arResult["ERROR_MESSAGE"])) {
	if($USER->IsAuthorized()) $arResult["AUTHOR_NAME"] = $USER->GetFormattedName(false);		
	else {
		if(strlen($_SESSION["MF_NAME"]) > 0) $arResult["AUTHOR_NAME"] = htmlspecialcharsbx($_SESSION["MF_NAME"]);		
	}
}
$this->IncludeComponentTemplate();
