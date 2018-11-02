<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetPageProperty("description", "Студия звукозаписи. Записываем песни под ключ, высококачественные аранжировки и минусовки");
$APPLICATION->SetPageProperty("title", "Профессиональная студия звукозаписи в Москве - Play Studio");
//$APPLICATION->SetPageProperty("NOT_SHOW_NAV_CHAIN", "Y");
$APPLICATION->SetTitle("Профессиональная студия звукозаписи в Москве - Play Studio");
?> 
<div class="song-preview"> 	
  <div class="content-wrapper"> 		
    <h2 class="song-preview-head"> 			Примеры звукозаписи 		</h2>
   		 		<? /*
		<iframe width="100%" height="166" scrolling="no" frameborder="no" allow="autoplay" src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/347615198&color=%23fe0000&auto_play=false&hide_related=false&show_comments=true&show_user=true&show_reposts=false&show_teaser=true"></iframe>
		*/?> 		
    <div class="clear-div"></div>
   		<?sound_view('main_top')?> 		
    <div class="clear-div"></div>
   	</div>
 </div>
 
<div class="page-padding40-left">
    <h2 style="text-align: center;font-size: 1.7em;">
        Студия звукозаписи <br>
        для вашего творчества
   </h2>
 <strong>Play Studio</strong> &ndash; это студия звукозаписи в Москве полностью отвечающая требованиям профессиональной студии. У нас вы почувствуете себя настоящей звездой, ведь рядом с вами будут квалифицированные специалисты, работавшие с известными исполнителями в самых разных жанрах. 					 
  <br />
 
  <br />
 					А еще вы можете представить такую возможность дорогому человеку, вручив ему подарочный сертификат на запись в <strong>Play Studio</strong>. Столь необычный подарок придется по душе творческой личности, особенному тому, кто увлекается музыкой. Попробуйте подарить запись песни в студии – и кто знает, вдруг вы поможете открыть новый талант. 					 
  <br />
 
  <br />
 					Гарантируем высокое качество звукозаписи и оперативность. Запишем для вас музыкальный материал любой сложности. Для этого у нас есть профессионалы, отличное звукозаписывающее оборудование и удобное помещение. 
  <br />
 					Вы найдете все, что нужно, для записи своей песни в студии <strong>Play Studio</strong>. 					 
  <br />
 
  <br />
 				</div>
 
<div class="ps-you-can"> 		
  <div class="ps-proch365"> 			
    <div class="ps-proch25 ps-floatright"> 				 			</div>
   		</div>
 		
  <div class="ps-proch635"> 			
    <div class="ps-proch75"> 				
      <div class="ps-you-can-block"> 					
        <h2 class="ps-you-can-head"> 						С нами вы можете: 					</h2>
       					 					
        <div class="ps-li"> 						
          <div>Записать песню на минусовку под ключ</div>
         						
          <div>Заказать аранжировку или минусовку</div>
         						
          <div>Записать корпоративный гимн или джингл</div>
         						
          <div>Записать песню в подарок</div>
         						
          <div>Заказать авторскую песню под ключ</div>
         					</div>
       					 					<a href="/prices/" class="ps-price-list" >Подробные цены</a> 					 				</div>
     				 				
      <div class="ps-recall-block"> 					
        <h3>Свяжитесь с нами для консультации</h3>
       					
        <div class="clear-div"></div>
       					
        <div class="ps-recall-form" data-id="recall"> 						<input type="hidden" name="blink" value="<?=$APPLICATION->GetCurPage(false)?>" />						<input type="hidden" name="bform" value="Консультация по услугам" /> 						<input type="text" name="bname" placeholder="Имя" /> 						<input type="text" name="bphone" placeholder="Телефон" />
          <div class="clear-div"></div>
         						
          <div class="form-submit" data-form="recall">Отправить</div>
         					</div>
       				</div>
     				 			</div>
   		</div>
 </div>
 
<div class="services-head"> 	
  <div class="content-wrapper"> 		
    <div class="ps-proch35">&nbsp;</div>
   		
    <div class="ps-proch65"> 			
      <h2>Услуги</h2>
     		</div>
   	</div>
 </div>
 
<div class="services-block"> 	
  <div class="ps-proch365"> 		&nbsp; 	</div>
 	
  <div class="ps-proch635"> 		 				<?$APPLICATION->IncludeComponent(
	"bitrix:news.list",
	"service_list",
	Array(
		"DISPLAY_DATE" => "Y",
		"DISPLAY_NAME" => "Y",
		"DISPLAY_PICTURE" => "Y",
		"DISPLAY_PREVIEW_TEXT" => "Y",
		"AJAX_MODE" => "N",
		"IBLOCK_TYPE" => "services_main",
		"IBLOCK_ID" => "3",
		"NEWS_COUNT" => "5",
		"SORT_BY1" => "ACTIVE_FROM",
		"SORT_ORDER1" => "DESC",
		"SORT_BY2" => "SORT",
		"SORT_ORDER2" => "ASC",
		"FILTER_NAME" => "",
		"FIELD_CODE" => array(),
		"PROPERTY_CODE" => array('PRICE','COLS'),
		"CHECK_DATES" => "Y",
		"DETAIL_URL" => "",
		"PREVIEW_TRUNCATE_LEN" => "",
		"ACTIVE_DATE_FORMAT" => "d.m.Y",
		"SET_TITLE" => "Y",
		"SET_BROWSER_TITLE" => "Y",
		"SET_META_KEYWORDS" => "Y",
		"SET_META_DESCRIPTION" => "Y",
		"SET_STATUS_404" => "N",
		"INCLUDE_IBLOCK_INTO_CHAIN" => "Y",
		"ADD_SECTIONS_CHAIN" => "Y",
		"HIDE_LINK_WHEN_NO_DETAIL" => "N",
		"PARENT_SECTION" => "",
		"PARENT_SECTION_CODE" => "",
		"INCLUDE_SUBSECTIONS" => "Y",
		"CACHE_TYPE" => "A",
		"CACHE_TIME" => "36000000",
		"CACHE_FILTER" => "N",
		"CACHE_GROUPS" => "Y",
		"PAGER_TEMPLATE" => ".default",
		"DISPLAY_TOP_PAGER" => "N",
		"DISPLAY_BOTTOM_PAGER" => "Y",
		"PAGER_TITLE" => "Новости",
		"PAGER_SHOW_ALWAYS" => "Y",
		"PAGER_DESC_NUMBERING" => "N",
		"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
		"PAGER_SHOW_ALL" => "Y",
		"AJAX_OPTION_JUMP" => "N",
		"AJAX_OPTION_STYLE" => "Y",
		"AJAX_OPTION_HISTORY" => "N"
	)
);?> 			 	</div>
 </div>
 <?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>