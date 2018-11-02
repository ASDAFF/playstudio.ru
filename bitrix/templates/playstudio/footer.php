
</main>

<!-- Modal -->
<div class="modal fade" id="entryrequest" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      <div class="modal-body contactform">
        <?$APPLICATION->IncludeComponent(
          "demo:main.feedback", 
          "main_tpl", 
          array(
            "USE_CAPTCHA" => "N",
            "OK_TEXT" => "Спасибо, ваше сообщение принято.",
            "EXT_FIELDS" => array(
              0 => "PHONE",
              ),
            "EMAIL_TO" => "info@propov.net",
            "REQUIRED_FIELDS" => array(
              0 => "PHONE",
              ),
            "EVENT_MESSAGE_ID" => array(
              0 => "8",
              )
            ),
          false
          );?>
      </div>
    </div>
  </div>
</div>

<footer>
  <div class="container">
    <div class="row">
      <div class="col-md-7">
       <div class="col-md-4 col-sm-4 hidden-xs">
        <? if ($APPLICATION->GetCurPage(false) !== '/'): ?><a href="/"><? endif; ?> 
        <div class="logo"></div>
        <? if ($APPLICATION->GetCurPage(false) !== '/'): ?></a><? endif; ?> 
      </div>
      <div class="col-md-4 col-sm-4 col-xs-12">
        <nav class="bottom-menu">
         <p class="hidden-xs">Звукозапись</p>
         <?$APPLICATION->IncludeComponent(
          "bitrix:menu", 
          "bottom-menu", 
          array(
            "ROOT_MENU_TYPE" => "bottom",
            "MAX_LEVEL" => "1",
            "CHILD_MENU_TYPE" => "bottom",
            "USE_EXT" => "N",
            "DELAY" => "N",
            "ALLOW_MULTI_SELECT" => "N",
            "MENU_CACHE_TYPE" => "N",
            "MENU_CACHE_TIME" => "3600",
            "MENU_CACHE_USE_GROUPS" => "Y",
            "MENU_CACHE_GET_VARS" => array(
              )
            ),
          false
          );?>
        </nav>
      </div>
      <div class="col-md-4 col-sm-4 col-xs-12">
       <span class="phone"><a href="tel:+74959726944">+7(495)972-69-44</a></span><span class="phone"><a href="tel:+74959726944">+7(909)917-26-53</a></span>
       <span class="address">г. Москва, ул. Воронцовская ул., дом 35 Б, корпус 3, проходная № 1</span>
     </div>
   </div>
   <div class="col-md-5 col-sm-12 col-xs-12">
     <div class="row">
       <div class="col-md-12 col-sm-8 col-xs-12">
        <p>Обратный звонок</p>

        <?$APPLICATION->IncludeComponent(
          "demo:main.feedback", 
          "main_tpl", 
          array(
            "USE_CAPTCHA" => "N",
            "OK_TEXT" => "Спасибо, ваше сообщение принято.",
            "EXT_FIELDS" => array(
              0 => "PHONE",
              ),
            "EMAIL_TO" => "info@propov.net",
            "REQUIRED_FIELDS" => array(
              0 => "PHONE",
              ),
            "EVENT_MESSAGE_ID" => array(
              0 => "8",
              )
            ),
          false
          );?>
        </div>
        <div class="col-md-12 col-sm-4 col-xs-3 hidden-xs">
          <div class="social-icons">
            <a href="https://vk.com/play___studio" target="_blank"><i class="fa fa-vk" aria-hidden="true"></i></a>
            <a href="https://www.facebook.com/playstudio.ru" target="_blank"><i class="fa fa-facebook-official" aria-hidden="true"></i></a>
            <a href="https://www.instagram.com/play__studio/" target="_blank"><i class="fa fa-instagram" aria-hidden="true"></i></a>
          </div>
        </div>
      </div>
    </div>

  </div>
</div>
<div class="copyright">
  <p>&copy; 2010-2017 playstudio.ru</p>
</div>
</footer>



<link rel="stylesheet" href="<?=SITE_TEMPLATE_PATH?>/css/owl.carousel.min.css">
<!--     <script src="<?=SITE_TEMPLATE_PATH?>/js/flip.js"></script>-->
<script type="text/javascript" src="<?=SITE_TEMPLATE_PATH?>/js/bootstrap.min.js"></script>
<script src="<?=SITE_TEMPLATE_PATH?>/js/jquery.maskedinput.min.js"></script>
<script src="<?=SITE_TEMPLATE_PATH?>/js/owl.carousel.min.js"></script>
<script src="<?=SITE_TEMPLATE_PATH?>/js/jquery.sticky.min.js" type="text/javascript"></script>
<script src="<?=SITE_TEMPLATE_PATH?>/js/jquery.nicescroll.js"></script>
<script src="<?=SITE_TEMPLATE_PATH?>/js/common.min.js"></script>
<!-- Rating@Mail.ru counter -->
<script type="text/javascript">
var _tmr = window._tmr || (window._tmr = []);
_tmr.push({id: "2913002", type: "pageView", start: (new Date()).getTime()});
(function (d, w, id) {
  if (d.getElementById(id)) return;
  var ts = d.createElement("script"); ts.type = "text/javascript"; ts.async = true; ts.id = id;
  ts.src = (d.location.protocol == "https:" ? "https:" : "http:") + "//top-fwz1.mail.ru/js/code.js";
  var f = function () {var s = d.getElementsByTagName("script")[0]; s.parentNode.insertBefore(ts, s);};
  if (w.opera == "[object Opera]") { d.addEventListener("DOMContentLoaded", f, false); } else { f(); }
})(document, window, "topmailru-code");
</script><noscript><div>
<img src="//top-fwz1.mail.ru/counter?id=2913002;js=na" style="border:0;position:absolute;left:-9999px;" alt="" />
</div></noscript>
<!-- //Rating@Mail.ru counter -->
<script type="text/javascript">(window.Image ? (new Image()) : document.createElement('img')).src = 'https://vk.com/rtrg?p=VK-RTRG-185338-aOInQ';</script>
</body>
</html>