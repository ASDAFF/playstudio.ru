<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetPageProperty("description", "Студия звукозаписи. Записываем песни под ключ, высококачественные аранжировки и минусовки");
$APPLICATION->SetPageProperty("title", "Цены на услуги студии звукозаписи в Москве, стоимость звукозаписи в Play Studio");
//$APPLICATION->SetPageProperty("NOT_SHOW_NAV_CHAIN", "Y");
$APPLICATION->SetTitle("Цены");
?> 

<div class="ps-you-can soundrecord songasgift page-fffbg prices-bg">
		<div class="ps-proch365">
			<div class="ps-proch25 ps-floatright">
				&nbsp;
			</div>
		</div>
		<div class="ps-proch635">
			<div class="ps-proch75">
				<div class="page-padding40">
					<h3 style="margin-top:0;">Цены на услуги студии</h3>
					
					Мы убеждены, что цены студии звукозаписи должны быть доступны максимальному кругу желающих. Поэтому стараемся предложить комфортабельные помещения и оборудование на приемлемых для вас условиях. Такой подход привлекает в Play Studio и профессиональных, и начинающих музыкантов, и корпоративных клиентов, и частных лиц.
					<br>
					<br>
				</div>
			</div>
		</div>
		<div class="ps-proch365">
			<div class="ps-proch25 ps-floatright">
				&nbsp;
			</div>
		</div>
		<div class="ps-proch635 page-greybg-nopad">
			<div class="ps-proch75">
					<div class="page-padding40">		
						<div class="clear-div"></div>
						<div class="price-col1 price-col-head">Услуги студии</div><div class="price-col2 price-col-head">Цены на услуги</div><div class="price-col3 price-col-head">&nbsp;</div>
						<div class="price-block-view">
						<?
						 if(CModule::IncludeModule("iblock"))
						{ 
							$arFilter = Array(
							 "IBLOCK_ID"=>IntVal(2), 
							 "ACTIVE"=>"Y", 
							 "SECTION_ID" => false
							 );
							$res = CIBlockElement::GetList(Array("SORT"=>"ASC"), $arFilter, Array("ID","NAME","PROPERTY_PRICE","PROPERTY_STRONG","PREVIEW_TEXT"));
							while($ar_fields = $res->GetNext())
							{
								$tr[$ar_fields["SORT"]] = '<div class="price-col1'.($ar_fields['PROPERTY_STRONG_VALUE'] == 'Да'?' price-col-strong':'').'" rel="checkbox-e'.$ar_fields['ID'].'">'.$ar_fields["NAME"].''.($ar_fields["PREVIEW_TEXT"]!=''?'<div class="price-dop-text">'.$ar_fields["~PREVIEW_TEXT"].'</div>':'').'</div><div class="price-col2"><nobr>'.$ar_fields["PROPERTY_PRICE_VALUE"].'</nobr></div><div class="price-col3"><input class="checkbox" id="checkbox-e'.$ar_fields['ID'].'" type="checkbox" required /><label for="checkbox-e'.$ar_fields['ID'].'"></label></div>';
								
								//print_r($ar_fields);
							}
							
							
							$arFilter2 = array('IBLOCK_ID' => 2,'DEPTH_LEVEL' => 1); // выберет потомков без учета активности
						   $rsSect = CIBlockSection::GetList(array('left_margin' => 'asc'),$arFilter2);
						   while ($arSect = $rsSect->GetNext())
						   {
							   $tr_sec = '';
							   $tr_sec .= '<div class="price-col1 price-col-strong" rel="checkbox-r'.$arSect['ID'].'">'.$arSect["NAME"].'</div><div class="price-col2">'.($arSect["CODE"]==''?'&nbsp;':$arSect["CODE"]).'</div><div class="price-col3">&nbsp;</div>';
							   
							   $arFilter3 = Array(
								 "IBLOCK_ID"=>IntVal(2), 
								 "ACTIVE"=>"Y", 
								 "SECTION_ID" => $arSect["ID"]
								 );
								$res3 = CIBlockElement::GetList(Array("SORT"=>"ASC"), $arFilter3, Array("ID","NAME","PROPERTY_PRICE","PROPERTY_STRONG","PREVIEW_TEXT"));
								while($ar_fields3 = $res3->GetNext())
								{
									$tr_sec .= '<div class="price-col1'.($ar_fields['PROPERTY_STRONG_VALUE'] == 'Да'?' price-col-strong':'').'" rel="checkbox-e'.$ar_fields3['ID'].'" data-sec="checkbox-r'.$arSect['ID'].'">'.$ar_fields3["NAME"].''.($ar_fields["PREVIEW_TEXT"]!=''?'<div class="price-dop-text">'.$ar_fields["~PREVIEW_TEXT"].'</div>':'').'</div><div class="price-col2"><nobr>'.$ar_fields3["PROPERTY_PRICE_VALUE"].'</nobr></div><div class="price-col3"><input class="checkbox" id="checkbox-e'.$ar_fields3['ID'].'" type="checkbox" required /><label for="checkbox-e'.$ar_fields3['ID'].'"></label></div>';
								}
							 
								$tr[$arSect["SORT"]] = $tr_sec;
							   
						   }
						   
						   ksort($tr);
						   
						   
							if(count($tr)>0)
							{
								foreach($tr AS $v)
								{
									echo $v;
									?><div class="clear-div price-br"></div><?
								}
							}
						 
							
						}	
						?>
						
						
						<div class="clear-div"></div>
						<div class="order-price-metka"><span></span><div class="order-price-but"></div></div>
						</div>
						<br><br>
					</div>
			</div>
		</div>
		<div class="ps-proch365">
			<div class="ps-proch25 ps-floatright">
				&nbsp;
			</div>
		</div>
		<div class="ps-proch635">
			<div class="ps-proch75">
				<div class="page-padding40">
					<img src="<?=SITE_TEMPLATE_PATH?>/images/price-bottom-icon.png" class="price-bottom-icon">
					<p class="price-bottom-text">При заказе дополнительных услуг вернем 10% от общей суммы заказа</p>
					<br>
					<br>
					<p class="price-bottom-text-mini">При работе с 21:00-09:00, праздничные дни и срочность - наценка +30% от общей стоимости.</p>
				</div>
			</div>
		</div>
</div>


<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>