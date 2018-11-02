<?$cur_page = $APPLICATION->GetCurPage(false);?>
<nav class="mobile-menu">
	<button class="cmn-toggle-switch cmn-toggle-switch__htx">
        <span>toggle menu</span>
    </button>
	
	<div class="mobile-menu-contact"><?$APPLICATION->IncludeComponent(
			"bitrix:main.include",
			"",
			Array(
				"AREA_FILE_SHOW" => "sect",
				"AREA_FILE_SUFFIX" => "contact",
				"AREA_FILE_RECURSIVE" => "Y",
				"EDIT_TEMPLATE" => ""
			),
		false
		);?>
		
			<div class="mobile-menu-email"><a href="mailto:info@playstudio.ru">info@playstudio.ru</a></div>
		
		</div>
	
	<div class="mobile-menu-block">	
		<a href="/soundrecord/" class="mobile-menu-item<?=($cur_page=='/soundrecord/'?' active-mobile-menu':'')?>" title="Звукозапись">Звукозапись</a>			
		<a href="/minus_one/" class="mobile-menu-item<?=($cur_page=='/minus_one/'?' active-mobile-menu':'')?>" title="Минусовка">Минусовка</a>					
		<a href="/song-as-a-gift/" class="mobile-menu-item<?=($cur_page=='/song-as-a-gift/'?' active-mobile-menu':'')?>" title="Песня в подарок">Песня в подарок</a>			
		<a href="/turnkey-song/" class="mobile-menu-item<?=($cur_page=='/turnkey-song/'?' active-mobile-menu':'')?>" title="Песня под ключ">Песня под ключ</a>					
		<a href="/arrangement/" class="mobile-menu-item<?=($cur_page=='/arrangement/'?' active-mobile-menu':'')?>" title="Оранжировка">Аранжировка</a>
		
		<div class=""></div>
		
		<? /* <a href="/about/" class="mobile-menu-item<?=($cur_page=='/about/'?' active-mobile-menu':'')?>">О компании</a> */?>
		<a href="/news/" class="mobile-menu-item<?=($cur_page=='/news/'?' active-mobile-menu':'')?>">Новости и Статьи</a>
		<a href="/media/" class="mobile-menu-item<?=($cur_page=='/media/'?' active-mobile-menu':'')?>">Фото/Видео</a>
		<a href="/prices/" class="mobile-menu-item<?=($cur_page=='/prices/'?' active-mobile-menu':'')?>">Цены</a>
		<a href="/contacts/" class="mobile-menu-item<?=($cur_page=='/contacts/'?' active-mobile-menu':'')?>">Контакты</a>
		<a href="http://www.hendrixstudio.ru/?m=proletarskaya/" class="mobile-menu-item">Реп База</a>
		
	</div>
	
</nav>