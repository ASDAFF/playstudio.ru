<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
IncludeTemplateLangFile(__FILE__);

$page = ($APPLICATION->GetCurPage(false)=='/'?1:0);
$cur_page = $APPLICATION->GetCurPage(false);

?>
<!DOCTYPE html>
<html lang="ru">
<head>
	<?$APPLICATION->ShowHead();?>
	<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
	
	<?
	$APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH.'/js/jquery-3.3.1.min.js');
	$APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH.'/js/jquery-migrate-1.4.1.min.js');
	
	$APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH.'/js/owl.carousel.min.js');
	$APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH.'/js/jquery.magnific-popup.min.js');
	$APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH.'/js/masonry.pkgd.min.js');
	$APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH.'/js/instagramGet.js');
	$APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH.'/js/APlayer.min.js');
	
	$APPLICATION->AddHeadString('<link href="'.SITE_TEMPLATE_PATH.'/css/owl.carousel.min.css" type="text/css" rel="stylesheet" />',true);
	$APPLICATION->AddHeadString('<link href="'.SITE_TEMPLATE_PATH.'/css/owl.theme.default.min.css" type="text/css" rel="stylesheet" />',true);
	$APPLICATION->AddHeadString('<link href="'.SITE_TEMPLATE_PATH.'/css/magnific-popup.css" type="text/css" rel="stylesheet" />',true);
	$APPLICATION->AddHeadString('<link href="'.SITE_TEMPLATE_PATH.'/css/APlayer.min.css" type="text/css" rel="stylesheet" />',true);
	?>
	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-126327281-1"></script>
	<script>
	  window.dataLayer = window.dataLayer || [];
	  function gtag(){dataLayer.push(arguments);}
	  gtag('js', new Date());

	  gtag('config', 'UA-126327281-1');
	</script>
	<title><?$APPLICATION->ShowTitle()?></title>
	<link href="https://fonts.googleapis.com/css?family=Roboto+Condensed:300,700%7CRoboto:300,400,500,700" rel="stylesheet">
</head>

<body class="<?if($page):?>main<?else:?>page<?endif;?>">

<?$APPLICATION->ShowPanel()?>

<div class="top-line-menu">
	<div class="content-wrapper">
		<div class="top-line-menu-block ps-proch80"><?
          $APPLICATION->IncludeComponent(
            "bitrix:menu",
            "top-line",
            Array(
              "ROOT_MENU_TYPE" => "top", 
              "MAX_LEVEL" => "3", 
              "CHILD_MENU_TYPE" => "left", 
              "USE_EXT" => "Y", 
              "MENU_CACHE_TYPE" => "A",
              "MENU_CACHE_TIME" => "3600",
              "MENU_CACHE_USE_GROUPS" => "Y",
              "MENU_CACHE_GET_VARS" => Array()
            )
          );
          ?></div>
		<div class="top-line-menu-soch ps-proch20"><?
          $APPLICATION->IncludeComponent(
            "bitrix:menu",
            "top-soch",
            Array(
              "ROOT_MENU_TYPE" => "soch", 
              "MAX_LEVEL" => "3", 
              "CHILD_MENU_TYPE" => "left", 
              "USE_EXT" => "Y", 
              "MENU_CACHE_TYPE" => "A",
              "MENU_CACHE_TIME" => "3600",
              "MENU_CACHE_USE_GROUPS" => "Y",
              "MENU_CACHE_GET_VARS" => Array()
            )
          );
          ?></div>
	</div>
</div>

<div class="top-logo-block">
	<div class="content-wrapper">
		<a href="/" title="PlayStudio" class="top-logo-item"><img src="<?=SITE_TEMPLATE_PATH?>/images/playstudio-logo.png" alt="Лого PlayStudio"></a>
		
		<div class="top-logo-adress"><?$APPLICATION->IncludeComponent(
			"bitrix:main.include",
			"",
			Array(
				"AREA_FILE_SHOW" => "sect",
				"AREA_FILE_SUFFIX" => "topadress",
				"AREA_FILE_RECURSIVE" => "Y",
				"EDIT_TEMPLATE" => ""
			),
		false
		);?></div>
		
		<div class="top-logo-contact"><?$APPLICATION->IncludeComponent(
			"bitrix:main.include",
			"",
			Array(
				"AREA_FILE_SHOW" => "sect",
				"AREA_FILE_SUFFIX" => "contact",
				"AREA_FILE_RECURSIVE" => "Y",
				"EDIT_TEMPLATE" => ""
			),
		false
		);?></div>
	</div>
	<div class="clear-div"></div>
</div>

<!--noindex-->
	<div class="top-mobile-menu">
		<?$APPLICATION->IncludeComponent(
			"bitrix:main.include",
			"",
			Array(
				"AREA_FILE_SHOW" => "sect",
				"AREA_FILE_SUFFIX" => "mobile-menu",
				"AREA_FILE_RECURSIVE" => "Y",
				"EDIT_TEMPLATE" => ""
			),
		false
		);?>
	</div>
<!--/noindex-->

<div class="top-uslugi-block">
	<div class="content-wrapper">
		
		<?$APPLICATION->IncludeComponent(
			"bitrix:main.include",
			"",
			Array(
				"AREA_FILE_SHOW" => "sect",
				"AREA_FILE_SUFFIX" => "uslugi-main-menu",
				"AREA_FILE_RECURSIVE" => "Y",
				"EDIT_TEMPLATE" => ""
			),
		false
		);?>

		
		<?if(!$page):?><div class="breadcrumb"><?$APPLICATION->IncludeComponent("bitrix:breadcrumb", "ps", Array(
	"START_FROM" => "0",	// Номер пункта, начиная с которого будет построена навигационная цепочка
		"PATH" => "",	// Путь, для которого будет построена навигационная цепочка (по умолчанию, текущий путь)
		"SITE_ID" => "ps",	// Cайт (устанавливается в случае многосайтовой версии, когда DOCUMENT_ROOT у сайтов разный)
	),
	false
);?></div><?endif;?>
		
	</div>
</div>	


<?if(!$page):?><div class="clear-div"></div><?$APPLICATION->IncludeComponent(
			"bitrix:main.include",
			"",
			Array(
				"AREA_FILE_SHOW" => "sect",
				"AREA_FILE_SUFFIX" => "page-head-h1",
				"AREA_FILE_RECURSIVE" => "Y",
				"EDIT_TEMPLATE" => ""
			),
		false
		);?><div class="clear-div"></div><?endif;?>

	