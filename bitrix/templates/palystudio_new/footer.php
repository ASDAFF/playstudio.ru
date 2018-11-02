<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true) die();?>

<?$APPLICATION->IncludeComponent(
			"bitrix:main.include",
			"",
			Array(
				"AREA_FILE_SHOW" => "sect",
				"AREA_FILE_SUFFIX" => "uslugi-main-menu-bottom",
				"AREA_FILE_RECURSIVE" => "Y",
				"EDIT_TEMPLATE" => ""
			),
		false
		);?>

<div class="ymap-container grayscale">
	<div class="loader loader-default"></div>
	<div class="content-wrapper">
		<div class="ps-proch40 ps-floatright ps-ya-contact">
			<div class="ps-ya-contact-div">
				<a href="/" title="PlayStudio" class="footer-logo ps-floatleft"></a>
				<?$APPLICATION->IncludeComponent(
					"bitrix:main.include",
					"",
					Array(
						"AREA_FILE_SHOW" => "sect",
						"AREA_FILE_SUFFIX" => "yacontact",
						"AREA_FILE_RECURSIVE" => "Y",
						"EDIT_TEMPLATE" => ""
					),
				false
				);?>
				
				
				<div class="footer-block-soch ps-textalign-left"><?
				  $APPLICATION->IncludeComponent(
					"bitrix:menu",
					"bot-soch",
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
	</div>
	<div id="map-yandex"></div>
</div>

<div class="footer-recall footer-recall-bottom">
	<div class="content-wrapper">
		<div class="ps-proch25">&nbsp;</div>
		<div class="ps-proch75">
			<div class="footer-recall-block">
				<h3>Мы перезвоним</h3>
				<div class="clear-div"></div>
				<div class="footer-recall-form" data-id="recall-footer">
					<input type="hidden" name="blink" value="<?=$APPLICATION->GetCurPage(false)?>" />
					<input type="hidden" name="bform" value="Консультация по услугам (Форма в подвале)" />
					<input type="text" name="bname" placeholder="Имя" />
						<input type="text" name="bphone" placeholder="Телефон" />
					<div class="clear-div"></div>
					<div class="form-submit" data-form="recall-footer" onclick="yaCounter49743235.reachGoal('sendform-cg'); return true;">Отправить</div>
				</div>
			</div>	
		</div>
	</div>
</div>


<div class="footer-block">
	<div class="content-wrapper">
		<div class="ps-proch25">
			<a href="/" title="PlayStudio" class="footer-logo"></a>
			
			<div class="clear-div"></div>
			
			<div class="footer-block-soch"><?
          $APPLICATION->IncludeComponent(
            "bitrix:menu",
            "bot-soch",
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
		<div class="ps-proch75">
		
			<div class="ps-proch30 footer-menu-block"><?
			  $APPLICATION->IncludeComponent(
				"bitrix:menu",
				"footer-menu",
				Array(
				  "ROOT_MENU_TYPE" => "fmenu1", 
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
			  
			  <div class="ps-proch30 footer-menu-block"><?
			  $APPLICATION->IncludeComponent(
				"bitrix:menu",
				"footer-menu",
				Array(
				  "ROOT_MENU_TYPE" => "fmenu2", 
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
</div>

<div id="popup-order" style="display:none;">
	<div class="white-popup">
		<h3>Оставьте заявку</h3>
		<div class="page-recall-block">
					<div class="popup-order-info">
					<a href="tel:+74951370876">+7(495)137-08-76, <a href="tel:+79099172653">+7(909)917-26-53</a><br>
					г. Москва, ул. Воронцовская ул., дом 35 Б, корпус 3, проходная № 1<br>
					<a href="mailto:info@playstudio.ru">info@playstudio.ru</a>
					</div>
					<div class="clear-div"></div>
					<div class="page-recall-form" data-id="order-price">
						<input type="hidden" name="blink" value="<?=$APPLICATION->GetCurPage(false)?>" />
						<input type="hidden" name="bform" value="Заказ услуг с прайса" />
						<input type="text" name="bname" placeholder="Имя" />
						<input type="text" name="bphone" placeholder="Телефон" />
						<div class="clear-div"></div>
						<div class="form-submit" data-form="order-price" data-order="Y">Отправить</div>
					</div>
		</div>
		<div class="popup-order-err" style="display:none;">Необходимо заполнить поля: Имя и Телефон<br><div class="order-price-back">Назад к форме</div></div>
		<div class="popup-order-result" style="display:none;"><svg version="1.1" id="L9" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
  viewBox="0 0 100 100" enable-background="new 0 0 0 0" xml:space="preserve" style="width: 150px;margin: -60px 0 0 0;">
    <rect x="20" y="50" width="4" height="10" fill="#fff">
      <animateTransform attributeType="xml"
        attributeName="transform" type="translate"
        values="0 0; 0 20; 0 0"
        begin="0" dur="0.6s" repeatCount="indefinite" />
    </rect>
    <rect x="30" y="50" width="4" height="10" fill="#fff">
      <animateTransform attributeType="xml"
        attributeName="transform" type="translate"
        values="0 0; 0 20; 0 0"
        begin="0.2s" dur="0.6s" repeatCount="indefinite" />
    </rect>
    <rect x="40" y="50" width="4" height="10" fill="#fff">
      <animateTransform attributeType="xml"
        attributeName="transform" type="translate"
        values="0 0; 0 20; 0 0"
        begin="0.4s" dur="0.6s" repeatCount="indefinite" />
    </rect>
</svg></div>
	</div>
</div>


<script>

//Переменная для включения/отключения индикатора загрузки
var spinner = $('.ymap-container').children('.loader');
//Переменная для определения была ли хоть раз загружена Яндекс.Карта (чтобы избежать повторной загрузки при наведении)
var check_if_load = false;

$(document).ready(function(){
	
	var startWindowScroll = 0;
	
	<?if($APPLICATION->GetCurPage(false)=='/prices/'):?>
	  $(window).scroll(function(){
		  var ind = 0;
		  //$('.order-price-metka span').text($(this).scrollTop()+' - '+$(".price-block-view").outerHeight(true)+' - '+$(".order-price-metka").scrollTop());
		  $(".checkbox").each(function(indx, element){ if($(this).prop("checked")) ind++; });
		  
		  if(ind>0)
		  {
			  if ($(this).scrollTop() > $(".price-block-view").outerHeight(true) - 200) {
				  
				   $('.order-price-but').removeClass('order-price-but-fix');
			  } else {
				 $('.order-price-but').addClass('order-price-but-fix');
			  }
		  }
	  });
	<?endif;?>
	
	
	
	
	
	$('.ya-map-popup').on('click', function(e) {
		$.magnificPopup.open({
					  fixedContentPos: true,
				      fixedBgPos: true,
				      overflowY: 'auto',
					  items: {
						src: '<div class="white-popup" style="padding: 97px 0px 0px 0px;"><iframe src="https://yandex.ru/map-widget/v1/-/CBuKvYf9xB" width="100%" height="600" frameborder="0" allowfullscreen="true"></iframe></div>',
						type: 'inline'
					  },
					   callbacks: {
					  beforeOpen: function() {
						startWindowScroll = $(window).scrollTop();
					  },
					  open: function(){
						if ( $('.mfp-content').height() < $(window).height() ){
						  $('body').on('touchmove', function (e) {
							  e.preventDefault();
						  });
						}
					  },
					  close: function() {
						$(window).scrollTop(startWindowScroll);
						$('body').off('touchmove');
					  }
					}
				});
	});
	
	
	$('.order-price-back').on('click', function(e) {
		$('#popup-order .page-recall-block').css('display','block');
		$('#popup-order .popup-order-err').css('display','none');
	});	
		
	$('.checkbox').on('click', function(e) {
	
		var ind = 0;
		
		$(".checkbox").each(function(indx, element){
			if($(this).prop("checked"))ind++;
		});
	
		if(ind>0) $('.order-price-but').addClass('order-price-but-fix');
		else  $('.order-price-but').removeClass('order-price-but-fix');
	
	});
	
	$('.form-submit').on('click', function(e) {
		
		var n = $('div[data-id="'+$(this).attr('data-form')+'"] input[name="bname"]').val();
		var p = $('div[data-id="'+$(this).attr('data-form')+'"] input[name="bphone"]').val();
		var l = $('div[data-id="'+$(this).attr('data-form')+'"] input[name="blink"]').val();
		var f = $('div[data-id="'+$(this).attr('data-form')+'"] input[name="bform"]').val();
		var nn = $('div[data-id="'+$(this).attr('data-form')+'"] input[name="bname"]');
		var pp = $('div[data-id="'+$(this).attr('data-form')+'"] input[name="bphone"]');
		
		if(n!='' && p!='')
		{
			$('#popup-order .page-recall-block').css('display','none');
			$('#popup-order .popup-order-err').css('display','none');
			$('#popup-order .popup-order-result').css('display','block');
			
			if($(this).attr('data-order')=='Y')
			{
				
				
				var ar = [];
				$(".checkbox").each(function(indx, element){
					if($(this).prop("checked"))
					{
						$("div[rel='"+$(this).attr("id")+"']").each(function(indx, element){
							
							var tx = $(this).text();
							
							if(!!$(this).attr("data-sec"))
							{
								ar.push($("div[rel='"+$(this).attr("data-sec")+"']").text()+" - "+tx);
							}
							else ar.push(tx);
						});
						
					}
				});
				
				var my = ar.join('<br>');
				
			}
			
			$.ajax({
			  type: "POST",
			  url: "/include/ajax.php",
			  data: "NAME="+n+"&PHONE="+p+"&LINK="+l+"&FNAME="+f+"&TEXT="+my,
			  success: function(msg){
				//alert( "Прибыли данные: " + msg );
				
				nn.val('');
				pp.val('');
				
				$.magnificPopup.open({
				  fixedContentPos: true,
				  fixedBgPos: true,
				  overflowY: 'auto',
				  items: {
					src: '<div class="white-popup">'+msg+'</div>',
					type: 'inline'
				  },
					  callbacks: {
					  beforeOpen: function() {
						startWindowScroll = $(window).scrollTop();
					  },
					  open: function(){
						if ( $('.mfp-content').height() < $(window).height() ){
						  $('body').on('touchmove', function (e) {
							  e.preventDefault();
						  });
						}
					  },
					  close: function() {
						$(window).scrollTop(startWindowScroll);
						$('body').off('touchmove');
					  }
					}
				});
				
			  }
			});
		}
		else {
			
			if($(this).attr('data-order')=='Y')
			{
				$('#popup-order .page-recall-block').css('display','none');
				$('#popup-order .popup-order-err').css('display','block');
				$('#popup-order .popup-order-result').css('display','none');
			}
			else
			{
				$.magnificPopup.open({
					  fixedContentPos: true,
				      fixedBgPos: true,
				      overflowY: 'auto',
					  items: {
						src: '<div class="white-popup">Необходимо заполнить поля: Имя и Телефон</div>',
						type: 'inline'
					  },
					   callbacks: {
					  beforeOpen: function() {
						startWindowScroll = $(window).scrollTop();
					  },
					  open: function(){
						if ( $('.mfp-content').height() < $(window).height() ){
						  $('body').on('touchmove', function (e) {
							  e.preventDefault();
						  });
						}
					  },
					  close: function() {
						$(window).scrollTop(startWindowScroll);
						$('body').off('touchmove');
					  }
					}
				});
			}
		}
		
		//alert($(this).attr('data-form'));
	});
	
	
	
	
	$('.cmn-toggle-switch').on('click', function(e) {
		
		e.preventDefault();
		
		if($(this).hasClass("active"))
		{
			$(this).removeClass("active");
			$('.top-mobile-menu').removeClass("active");
		}
		else
		{
			$(this).addClass("active");
			$('.top-mobile-menu').addClass("active");
		}
	});
	
	
	$('.order-price-but').on('click', function(e) {
		
		e.preventDefault();
		var ind = 0;
		var ar = [];
		$(".checkbox").each(function(indx, element){
			if($(this).prop("checked"))
			{
				ind++;
				$("div[rel='"+$(this).attr("id")+"']").each(function(indx, element){
					
					var tx = $(this).text();
					
					if(!!$(this).attr("data-sec"))
					{
						ar.push($("div[rel='"+$(this).attr("data-sec")+"']").text()+" - "+tx);
					}
					else ar.push(tx);
				});
				
			}
		});
		
		var myJsonString = JSON.stringify(ar);
		
		if(ind>0)
		{
			$('#popup-order .page-recall-block').css('display','block');
			$('#popup-order .popup-order-err').css('display','none');
			
			console.log(myJsonString);
			$.magnificPopup.open({
			  fixedContentPos: true,
			  fixedBgPos: true,
			  overflowY: 'auto',
			  items: {
				  src: '#popup-order',
				  type: 'inline'
			  },
			  
			   callbacks: {
					  beforeOpen: function() {
						startWindowScroll = $(window).scrollTop();
					  },
					  open: function(){
						  
						 $('#popup-order').css('display','block');
						if ( $('.mfp-content').height() < $(window).height() ){
						  $('body').on('touchmove', function (e) {
							  e.preventDefault();
						  });
						}
					  },
					  close: function() {
						$('#popup-order').css('display','none');
						$(window).scrollTop(startWindowScroll);
						$('body').off('touchmove');
					  }
					}

			});
		}
		
		
		
	});
	
	
	$('.ymap-container').mouseenter(function(){
	  
	  var win_w = $(window).width();
	  
	  if(win_w>850)
	  {
		  if (!check_if_load) { // проверяем первый ли раз загружается Яндекс.Карта, если да, то загружаем
		
		  // Чтобы не было повторной загрузки карты, мы изменяем значение переменной
			check_if_load = true; 
		
		// Показываем индикатор загрузки до тех пор, пока карта не загрузится
			spinner.addClass('is-active');

		// Загружаем API Яндекс.Карт
			loadScript("https://api-maps.yandex.ru/2.1/?lang=ru_RU&amp;loadByRequire=1", function(){
			   // Как только API Яндекс.Карт загрузились, сразу формируем карту и помещаем в блок с идентификатором "map-yandex"
			   ymaps.load(init);
			});                
		  }
	  }
    }
  ); 
	
});


//Необходимые переменные для того, чтобы задать координаты на Яндекс.Карте
var myMapTemp, myPlacemarkTemp;

//Функция создания карты сайта и затем вставки ее в блок с идентификатором "map-yandex"
function init () {
  var myMapTemp = new ymaps.Map("map-yandex", {
    center: [55.734501, 37.664240], // координаты центра на карте
	
    zoom: 16, // коэффициент приближения карты
    controls: ['zoomControl', 'fullscreenControl'] // выбираем только те функции, которые необходимы при использовании
  });
  var myPlacemarkTemp = new ymaps.GeoObject({
    geometry: {
        type: "Point",
        coordinates: [55.734501, 37.664240] // координаты, где будет размещаться флажок на карте
    }
  });
  myMapTemp.geoObjects.add(myPlacemarkTemp); // помещаем флажок на карту

  // Получаем первый экземпляр коллекции слоев, потом первый слой коллекции
  var layer = myMapTemp.layers.get(0).get(0);

  // Решение по callback-у для определния полной загрузки карты
  waitForTilesLoad(layer).then(function() {
    // Скрываем индикатор загрузки после полной загрузки карты
    spinner.removeClass('is-active');
  });
  /*
  myMapTemp.balloon.open([55.734501, 37.664240], 'г. Москва, ул. Воронцовская ул., дом 35 Б, корпус 3, проходная № 1', {
        // Опция: не показываем кнопку закрытия.
        closeButton: false
    });*/
	
  myMapTemp.behaviors.disable('scrollZoom');
}

// Функция для определения полной загрузки карты (на самом деле проверяется загрузка тайлов) 
function waitForTilesLoad(layer) {
  return new ymaps.vow.Promise(function (resolve, reject) {
    var tc = getTileContainer(layer), readyAll = true;
    tc.tiles.each(function (tile, number) {
      if (!tile.isReady()) {
        readyAll = false;
      }
    });
    if (readyAll) {
      resolve();
    } else {
      tc.events.once("ready", function() {
        resolve();
      });
    }
  });
}

function getTileContainer(layer) {
  for (var k in layer) {
    if (layer.hasOwnProperty(k)) {
      if (
        layer[k] instanceof ymaps.layer.tileContainer.CanvasContainer
        || layer[k] instanceof ymaps.layer.tileContainer.DomContainer
      ) {
        return layer[k];
      }
    }
  }
  return null;
}

// Функция загрузки API Яндекс.Карт по требованию (в нашем случае при наведении)
function loadScript(url, callback){
  var script = document.createElement("script");

  if (script.readyState){  // IE
    script.onreadystatechange = function(){
      if (script.readyState == "loaded" ||
              script.readyState == "complete"){
        script.onreadystatechange = null;
        callback();
      }
    };
  } else {  // Другие браузеры
    script.onload = function(){
      callback();
    };
  }

  script.src = url;
  document.getElementsByTagName("head")[0].appendChild(script);
}

/*
// Основная функция, которая проверяет когда мы навели на блок с классом "ymap-container"
var ymap = function() {
   
}

$(function() {

  //Запускаем основную функцию
  ymap();

});

*/
</script>

<!-- Yandex.Metrika counter -->
<script >
    (function (d, w, c) {
        (w[c] = w[c] || []).push(function() {
            try {
                w.yaCounter50259079 = new Ya.Metrika2({
                    id:50259079,
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
        s.src = "https://mc.yandex.ru/metrika/tag.js";

        if (w.opera == "[object Opera]") {
            d.addEventListener("DOMContentLoaded", f, false);
        } else { f(); }
    })(document, window, "yandex_metrika_callbacks2");
</script>
<noscript><div><img src="https://mc.yandex.ru/watch/50259079" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
<!-- /Yandex.Metrika counter -->

<script crossorigin="anonymous" async type="text/javascript" src="//api.pozvonim.com/widget/callback/v3/523d41bd25f2b664c7321987861a45eb/connect" id="check-code-pozvonim" charset="UTF-8"></script>
</body>
</html>