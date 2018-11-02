<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<!DOCTYPE html>
<html lang="ru">
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?$APPLICATION->ShowTitle()?></title>
  <link rel="stylesheet" href="<?=SITE_TEMPLATE_PATH?>/css/bootstrap.min.css">
  <link rel="stylesheet" href="<?=SITE_TEMPLATE_PATH?>/css/font-awesome.min.css">
  <script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
  <script src="<?=SITE_TEMPLATE_PATH?>/js/mediaelement-and-player.min.js"></script>
  <script src="<?=SITE_TEMPLATE_PATH?>/js/mep-feature-playlist.js"></script>
  <link type="text/css" rel="stylesheet" href="<?=SITE_TEMPLATE_PATH?>/css/mediaelementplayer.css" />
  <link type="text/css" rel="stylesheet" href="<?=SITE_TEMPLATE_PATH?>/css/mep-feature-playlist.css" />
  <?$APPLICATION->ShowHead()?>
  <?$APPLICATION->AddHeadString('<link rel="canonical" href="https://playstudio.ru' . $APPLICATION->GetCurPage(false) . '" />'); ?>
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-117904157-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-117904157-1');
</script>

<!-- Yandex.Metrika counter -->
  <script>
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
  <!-- Global site tag (gtag.js) - Google Analytics -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=UA-21358151-9"></script>
  <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());
  
    gtag('config', 'UA-21358151-9');
  </script>

</head>
<body>
  <?$APPLICATION->ShowPanel();?>
  <header class="container-fluid">
    <div class="container">
      <div class="row">
        <div class="col-md-4 col-sm-4 col-xs-6">
          <? if ($APPLICATION->GetCurPage(false) !== '/'): ?><a href="/"><? endif; ?> 
            <div class="logo"></div>
            <? if ($APPLICATION->GetCurPage(false) !== '/'): ?></a><? endif; ?>
          </div>
          <div class="col-md-8 col-sm-8 col-xs-6">
            <div class="row">
              <div class="col-md-6 col-sm-12 description">
                <? if ($APPLICATION->GetCurPage(false) !== '/'): ?><a href="/"><? endif; ?> 
                  <span class="head">Cтудия звукозаписи
                    <span class="hidden-xs ">Запишем вас в центре Москвы</span>
                  </span>
                  <? if ($APPLICATION->GetCurPage(false) !== '/'): ?></a><? endif; ?>
                </div>
                <div class="col-md-6 col-sm-12 contacts">
                 <span class="phone"><a href="tel:+74959726944">+7(495)972-69-44</a></span>
                 <span class="phone"><a href="tel:+79099172653">+7(909)917-26-53</a></span>
               </div>
             </div>
           </div>

           <div class="col-md-8 col-sm-12 col-xs-12 pull-right text-center">
            <p class="address">г. Москва, ул. Воронцовская ул., дом 35 Б, корпус 3, проходная № 1</p>
          </div>
        </div>
      </div>
<!--     <div class="container">
      <div class="row">
        <div class="col-md-3 col-sm-2 col-xs-2">
          <div class="row">
            <? if ($APPLICATION->GetCurPage(false) !== '/'): ?><a href="/"><? endif; ?> 
            <div class="logo"></div>
            <? if ($APPLICATION->GetCurPage(false) !== '/'): ?></a><? endif; ?>
          </div>
        </div>
        <div class="col-md-4 col-sm-5 col-xs-5">
          <? if ($APPLICATION->GetCurPage(false) !== '/'): ?><a href="/"><? endif; ?> 
          <span class="head">Cтудия звукозаписи
            <span>Запишем вас в центре Москвы</span></span>
            <? if ($APPLICATION->GetCurPage(false) !== '/'): ?></a><? endif; ?>
          </div>
          <div class="col-md-5 col-sm-5 pull-right hidden-xs contacts">
            <div class="row">
              <span class="phone"><a href="tel:+74959726944">+7(495)972-69-44</a></span>
              <span class="phone"><a href="tel:+79099172653">+7(909)917-26-53</a></span>
              <p class="hidden-sm">г. Москва, ул. Воронцовская ул., дом 35 Б, корпус 3, проходная № 1</p>
            </div>
          </div>
          <div class="col-sm-12 col-xs-5 hidden-md hidden-lg text-center">          
            <p class="">г. Москва, ул. Воронцовская ул., дом 35 Б, корпус 3, проходная № 1</p>
          </div>
        </div>
      </div> -->
    </header>
    <div class="top-menu">
      <div class="container">
        <div class="row">
          <div id="menu-icon"><span></span></div>
          <?
          $APPLICATION->IncludeComponent(
            "bitrix:menu",
            "horizontal_multilevel",
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
          ?>
        </div>
      </div>
    </div>
    <main>
