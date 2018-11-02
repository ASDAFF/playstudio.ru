<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetPageProperty("description", "Студия звукозаписи. Записываем песни под ключ, высококачественные аранжировки и минусовки");
$APPLICATION->SetPageProperty("title", "Аранжировка | PlayStudio.ru");
//$APPLICATION->SetPageProperty("NOT_SHOW_NAV_CHAIN", "Y");
$APPLICATION->SetTitle("Аранжировка");
?> 
<div class="ps-you-can soundrecord songasgift arrangement"> 		 
  <div class="ps-proch365"> 			 
    <div class="ps-proch25 ps-floatright"> 				 			</div>
   		</div>
 		 
  <div class="ps-proch635"> 			 
    <div class="pages-h1"> 				 
      <div class="ps-proch75"> 
        <h1><?$APPLICATION->ShowTitle(false)?></h1>
       </div>
     			</div>
   			 			 
    <div class="ps-proch75"> 				 				 
      <div class="page-proch35"> 					 
        <div class="page-padding40"> 						<strong>В услугу входит:</strong> 					</div>
       				</div>
     				 
      <div class="page-proch65"> 					 
        <div class="page-padding40">- Сочинение инструментальных партий 
          <br />
        - Саунд дизайн 
          <br />
        - Запись музыкальных инструментов 
          <br />
        - Услуги сессионных музыкантов 
          <br />
        - Сведение и мастеринг 						 						 
          <br />
         						 
          <p class="page-price"> 						Продвинутый уровень <nobr>15 000 р.</nobr> 
            <br />
           						Базовый уровень <nobr>9 000 р.</nobr> 						</p>
         					</div>
       				</div>
     				 			</div>
   			 			 
    <div class="page-recall-block"> 					 
      <h3>Сделать заказ</h3>
     					 
      <div class="clear-div"></div>
     					 					<?form_view("order-arrangement",$APPLICATION->GetCurPage(false),"Заказ по услуге Аранжировка")?> 					 			</div>
   			 			 			 
    <div class="ps-proch75"> 				 				 
      <div class="page-proch35"> 					 
        <div class="page-padding40"> 						<strong>Закажи с этой услугой:</strong> 					</div>
       				</div>
     				 
      <div class="page-proch65"> 					 
        <div class="page-padding40"> 						- запись песни под ключ 
          <br />
         						- работа на студии с аранжировщиком 
          <br />
         						- написание оригинального текста 
          <br />
         						- услуги бэк вокалиста 
          <br />
         						- услуги сессионного вокалиста 						<a href="/prices/" class="page-all-services" >Все услуги</a> 					 					 						 					 					</div>
       					 					 					 					 					 				</div>
     				 				 
      <div class="clear-div"></div>
     				 				 					 				 					 			</div>
   			 
    <div class="clear-div"></div>
   			 
    <div class="page-fffbg"> 				 
      <div class="ps-proch75"> 						 
        <div class="page-padding40"> 							 
          <h3>ПРОЦЕСС СОЗДАНИЯ АРАНЖИРОВКИ</h3>
         						 							<img src="<?=SITE_TEMPLATE_PATH?>/images/arrangement.png" class="turnkey-song"  /> 						 							Авторская аранжировка это изготовление музыкальной композиции в определенном заказчиком стиле. В услугу входит работа композитора, который создаст новый окрас звука, подберет нужный темп и размер вашей мелодии. Если вы делаете уникальный продукт из своей музыки, добиваетесь плотного и сочного звучания, обращаятесь в play studio, мы сделаем вам звук! 							 							 
          <ul> 								 
            <li>Определение стилистики;</li>
           								 
            <li>Определение структуры композиции;</li>
           								 
            <li>Построение ритм секции и басовой линии;</li>
           								 
            <li>Гармонизация и построение аккомпанемента;</li>
           								 
            <li>Запись живых инструментов;</li>
           								 
            <li>Добавление эффектов и переходов.</li>
           							</ul>
         							 
          <br />
         							Послушайте пример аранжировок, записанные в нашей студии. 							 
          <br />
         
          <br />
         							 
          <h4>Пример готовой авторской аранжировки:</h4>
         							 							 							 
          <div class="clear-div"></div>
         								<?sound_view('arrangement')?> 							 
          <div class="clear-div"></div>
         							<? /*
					<iframe width="100%" height="166" scrolling="no" frameborder="no" allow="autoplay" src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/playlists/361155418&color=%23fe0000&auto_play=false&hide_related=false&show_comments=true&show_user=true&show_reposts=false&show_teaser=true"></iframe> */?> 							 
          <br />
         							 
          <br />
         							 						</div>
       						 					</div>
     				 
      <div class="clear-div"></div>
     			</div>
   			 			 
    <div class="page-recall-block"> 					 
      <h3>Свяжитесь с нами для консультации</h3>
     					 
      <div class="clear-div"></div>
     					 					<?form_view("recall-arrangement",$APPLICATION->GetCurPage(false),"Консультация по услуге Аранжировка")?> 					 				</div>
   			 	 		</div>
 </div>
 <?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>