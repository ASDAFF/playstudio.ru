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

<div class="headline"></div>

<div class="page">
  <div class="header">
      <a href="http://playstudio.ru/"> <div class="logo"></div></a>
      <div class="head_txt">
        <div class="head_phone">+7(495)972-69-44 +7(909)917-26-53</div>
      </div>
  </div>
    
    <div class="menu_main">
      <a href="/servises/"><div id="button_1"></div></a>
      <a href="/portfolio/"><div id="button_2"></div></a>
      <a href="/contact/"><div id="button_3"></div></a>
      <a href="/studioz/"><div id="button_4"></div></a>
      <a href="/school/"><div id="button_5"></div></a>
      <a href="/playrooms/"><div id="button_6"></div></a>
    </div>
    
    <div class="line_kontent">
      
      <div class="kontent_main">
<?$APPLICATION->IncludeComponent("tochka:breadcrumb", "", Array(
	"START_FROM" => "0",	
	"PATH" => "",
	"SITE_ID" => "-",
	),
	false
);?>