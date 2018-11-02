<?
if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true) die();

if(!CModule::IncludeModule("iblock"))
{
	ShowError(GetMessage("IBLOCK_MODULE_NOT_INSTALLED"));
	return 0;
}
/*************************************************************************
	Processing of received parameters
*************************************************************************/
if(!isset($arParams["CACHE_TIME"]))
	$arParams["CACHE_TIME"] = 36000000;

$arParams["IBLOCK_TYPE"] = trim($arParams["IBLOCK_TYPE"]);
$arParams["IBLOCK_ID"] = intval($arParams["IBLOCK_ID"]);


$arParams["ELEMENT_ID"] = intval($arParams["~ELEMENT_ID"]);
if($arParams["ELEMENT_ID"] > 0 && $arParams["ELEMENT_ID"]."" != $arParams["~ELEMENT_ID"])
{
	ShowError(GetMessage("CATALOG_ELEMENT_NOT_FOUND"));
	@define("ERROR_404", "Y");
	if($arParams["SET_STATUS_404"]==="Y")
		CHTTP::SetStatus("404 Not Found");
	return;
}

/*************************************************************************
			Work with cache
*************************************************************************/
if($this->StartResultCache(false, array(($arParams["CACHE_GROUPS"]==="N"? false: $USER->GetGroups()), $bUSER_HAVE_ACCESS, $arNavigation, $arrFilter)))
{
	//Handle case when ELEMENT_CODE used

		//SELECT
		$arSelect = array(
			"ID",
            "IBLOCK_ID",
			"NAME",
			"CODE",
			"ACTIVE_FROM",
			"DATE_CREATE",
			"CREATED_BY",
			"IBLOCK_ID",
			"IBLOCK_SECTION_ID",
			"DETAIL_PAGE_URL",
			"LIST_PAGE_URL",
			"DETAIL_TEXT",
			"DETAIL_TEXT_TYPE",
			"DETAIL_PICTURE",
			"PREVIEW_TEXT",
			"PREVIEW_TEXT_TYPE",
			"PREVIEW_PICTURE",
			"PROPERTY_*",
		);
		//WHERE
		$arFilter = array(
			"ID" => $arParams["ELEMENT_ID"],
			"IBLOCK_ID" => $arParams["IBLOCK_ID"],
			"IBLOCK_LID" => SITE_ID,
			"IBLOCK_ACTIVE" => "Y",
			"ACTIVE_DATE" => "Y",
			"ACTIVE" => "Y",
			"CHECK_PERMISSIONS" => "Y",
			"SHOW_HISTORY" => $WF_SHOW_HISTORY,
		);
		//ORDER BY
		$arSort = array( );
		$rsElement = CIBlockElement::GetList($arSort, $arFilter, false, false, $arSelect);
		if($obElement = $rsElement->GetNextElement())
		{
			$arResult = $obElement->GetFields();

            $arButtons = CIBlock::GetPanelButtons(
				$arResult["IBLOCK_ID"],
				$arResult["ID"],
				0,
				array("SECTION_BUTTONS"=>false, "SESSID"=>false)
			);
			$arResult["EDIT_LINK"] = $arButtons["edit"]["edit_element"]["ACTION_URL"];
			$arResult["DELETE_LINK"] = $arButtons["edit"]["delete_element"]["ACTION_URL"];



			$arResult["PREVIEW_PICTURE"] = CFile::GetFileArray($arResult["PREVIEW_PICTURE"]);
			$arResult["DETAIL_PICTURE"] = CFile::GetFileArray($arResult["DETAIL_PICTURE"]);

			$arResult["PROPERTIES"] = $obElement->GetProperties();

            $arResult["playlist"] = array();
            // составим массив аудио файлов из описания и пути
            foreach ($arResult["PROPERTIES"][$arParams["PROPERTY_CODE"]]["VALUE"] as $key => $value){
               $arResult["playlist"]['trackList'][$key]['location'] = CFile::GetPath($value);
               $arResult["playlist"]['trackList'][$key]['title'] = $arResult["PROPERTIES"][$arParams["PROPERTY_CODE"]]["DESCRIPTION"][$key];
            }

		}

        $pathdewplayer = $this->GetPath();
        $arResult['dewplayer']['path'] = $pathdewplayer.'/dewplayer/dewplayer-playlist.swf';
        $xmlfile = '/playlist'.$arParams["ELEMENT_ID"].'.xml';
        $arResult['dewplayer']['xml'] = $pathdewplayer.'/xml'.$xmlfile ;
        // составим XML файл с mp3 файлами

        $xml=new DomDocument('1.0','UTF-8');
        $playlist = $xml->appendChild($xml->createElement('playlist'));
        $list = $playlist->appendChild($xml->createElement('trackList'));
        foreach ($arResult["playlist"]['trackList'] as $key => $value){
            $mp3 = $list->appendChild($xml->createElement('mp3'));
            $location = $mp3->appendChild($xml->createElement('location'));
            $location->appendChild($xml->createTextNode($value['location']));
            $title = $mp3->appendChild($xml->createElement('title'));
            $title->appendChild($xml->createTextNode($value['title']));
        }
        $xml->formatOutput = true;
       //$xml->save($_SERVER['DOCUMENT_ROOT'].$pathdewplayer.'/xml'.$xmlfile);
       $xmlget = $xml->saveXML();

        $xmlfileput = fopen($_SERVER['DOCUMENT_ROOT'].$pathdewplayer.'/xml'.$xmlfile, "w");
        
        $strQueryText = $GLOBALS['APPLICATION']->ConvertCharset($xmlget, 'utf-8', LANG_CHARSET);    
        
        //fputs($xmlfileput, iconv('cp1251', 'utf-8', $xmlget));
        fputs($xmlfileput, $strQueryText);
        
        fclose ($xmlfileput);

        $this->IncludeComponentTemplate();
}






?>
