<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<?
IncludeTemplateLangFile(__FILE__);
?> 
<!DOCTYPE HTML>
<html lang="ru">
<head>
<meta charset="utf-8">
<title><?$APPLICATION->ShowTitle()?></title>
<?$APPLICATION->ShowHead();?>

<script src="http://code.jquery.com/jquery.min.js"></script>
<script type="text/javascript" src="http://playstudio.ru/portfolio/js/speakker-big-1.2.38r332.min.js"></script> 

<link rel="stylesheet" type="text/css" href="http://playstudio.ru/lightbox/css/jquery.lightbox-0.5.css" />
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.3.2/jquery.min.js"></script>
<script type="text/javascript" src="http://playstudio.ru/lightbox/js/jquery.lightbox-0.5.pack.js"></script>
<script type="text/javascript" src="http://playstudio.ru/lightbox/js/script.js"></script>

<!-- <script src="http://cdnjs.cloudflare.com/ajax/libs/fullcalendar/2.1.1/fullcalendar.min.js"></script> -->

<!-- <script src="http://playstudio.ru/calendar/lib/moment.min.js"></script>
<link href="http://playstudio.ru/calendar/fullcalendar.css" type="text/css" rel="stylesheet" /> -->
<!-- <link href="http://cdnjs.cloudflare.com/ajax/libs/fullcalendar/2.1.1/fullcalendar.min.css" type="text/css" rel="stylesheet" /> -->
<meta name="robots" content="noyaca"/>
<link href="/bitrix/templates/general.css" type="text/css" rel="stylesheet">
<!-- Yandex.Metrika counter -->
<script type="text/javascript">
    (function (d, w, c) {
        (w[c] = w[c] || []).push(function() {
            try {
                w.yaCounter44222219 = new Ya.Metrika({
                    id:44222219,
                    clickmap:true,
                    trackLinks:true,
                    accurateTrackBounce:true,
                    webvisor:true
                });
            } catch(e) { }
        });

        var n = d.getElementsByTagName("script")[0],
            s = d.createElement("script"),
            f = function () { n.parentNode.insertBefore(s, n); };
        s.type = "text/javascript";
        s.async = true;
        s.src = "https://mc.yandex.ru/metrika/watch.js";

        if (w.opera == "[object Opera]") {
            d.addEventListener("DOMContentLoaded", f, false);
        } else { f(); }
    })(document, window, "yandex_metrika_callbacks");
</script>
<noscript><div><img src="https://mc.yandex.ru/watch/44222219" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
<!-- /Yandex.Metrika counter -->
</head>

<body class="body">

<div id="panel"><?$APPLICATION->ShowPanel();?></div>
<div class="bgr"></div>

<div class="headline"></div>

<div class="page">
	<div class="header">
	    <a href="http://playstudio.ru/"> <div class="logo"></div></a>
	    <div class="head_txt">
	    	<div class="head_phone">+7(495)972-69-44 +7(909)917-26-53</div>
	    </div>

	    <div class="line_kontent">
	    <?php require($_SERVER["DOCUMENT_ROOT"]."/bitrix/left_menu.php");?>

			<div class="kontent_inner">

			<?$APPLICATION->IncludeComponent("tochka:breadcrumb", "", Array(
				"START_FROM" => "0",	// Номер пункта, начиная с которого будет построена навигационная цепочка
				"PATH" => "",	// Путь, для которого будет построена навигационная цепочка (по умолчанию, текущий путь)
				"SITE_ID" => "-",	// Cайт (устанавливается в случае многосайтовой версии, когда DOCUMENT_ROOT у сайтов разный)
				),
				false
			);?>