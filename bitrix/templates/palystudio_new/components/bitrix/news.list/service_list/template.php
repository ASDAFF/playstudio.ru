<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
/** @var array $arParams */
/** @var array $arResult */
/** @global CMain $APPLICATION */
/** @global CUser $USER */
/** @global CDatabase $DB */
/** @var CBitrixComponentTemplate $this */
/** @var string $templateName */
/** @var string $templateFile */
/** @var string $templateFolder */
/** @var string $componentPath */
/** @var CBitrixComponent $component */
$this->setFrameMode(true);
?>
<div class="services-list">
<?foreach($arResult["ITEMS"] as $arItem):
	$ind++;
	//print_pre($arItem['DISPLAY_PROPERTIES']);
?>
	<?//print_pre($arItem['DISPLAY_PROPERTIES']['COLS']['VALUE_ENUM_ID'])?>
	<div class="ps-proch75">
		<div class="services-block-item">
			<div class="services-list-item">
				
				<?if($arItem['DISPLAY_PROPERTIES']['COLS']['VALUE_ENUM_ID']==4):?>
					<div class="ps-proch50">	
						<div class="services-list-item-leftcol" <?if($ind==3):?>style="min-height:auto;"<?endif?>>
							<h2 class="h2-<?=str_replace('/','',$arItem['CODE'])?>"><?=$arItem['~NAME']?></h2>
							<?=$arItem['PREVIEW_TEXT']?>
						</div>
					</div>
					
					<div class="ps-proch50">
						<div class="services-list-item-rightcol">
							<div class="services-list-item-price"><?=$arItem['DISPLAY_PROPERTIES']['PRICE']['VALUE']?></div>
							<div class="services-list-item-text"><?=$arItem['DETAIL_TEXT']?></div>
							<?if($ind<=2):?>
								<a href="<?=($arItem['CODE']!=''?$arItem['CODE']:'/prices/')?>" class="services-list-item-link"></a>
							<?endif;?>
						</div>
					</div>
					
						<?if($ind==3):?>
							<div class="clear-div"></div>
							<div class="services-list-item-preview">
								<h3>Послушать примеры</h3>
								
								<div class="clear-div"></div>
								<?sound_view('main_soundrecord')?>
								<div class="clear-div"></div>
								
								<? /*
								<iframe width="100%" height="166" scrolling="no" frameborder="no" allow="autoplay" src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/347615198&color=%23686868&auto_play=false&hide_related=false&show_comments=true&show_user=true&show_reposts=false&show_teaser=true"></iframe>
								*/ ?>
							</div>
						<?endif;?>
					
				<?endif;?>
				
				<?if($arItem['DISPLAY_PROPERTIES']['COLS']['VALUE_ENUM_ID']==3):?>
				<div class="ps-proch100">
					<div class="services-list-item-rightcol">
						<div class="services-list-item-price services-list-item-price-absolute"><?=$arItem['DISPLAY_PROPERTIES']['PRICE']['VALUE']?></div>
						<h2 class="h2-<?=str_replace('/','',$arItem['CODE'])?>"><?=$arItem['~NAME']?></h2>
						<div class="services-list-item-text ps-proch90" style="font-size:20px;line-height:24px;"><?=$arItem['PREVIEW_TEXT']?></div>
					</div>
				</div>
				<?endif;?>
				
				<?if($ind>2):?>
					<div class="ps-proch50">&nbsp;</div>
					<div class="ps-proch50"><a href="<?=($arItem['CODE']!=''?$arItem['CODE']:'/prices/')?>" class="services-list-item-link"></a></div>
				<?endif;?>
				
			</div>
		</div>
	</div>
	
	<?if($ind==2):?>
	
	<div class="clear-div ps-prishepka ps-proch66"></div>
	<div class="footer-recall-block">
		<div class="ps-proch66">
			<div class="services-block-item">

				<h3>Свяжитесь с нами нами для консультации</h3>
				<div class="clear-div"></div>
				<div class="footer-recall-form" data-id="services">
					<input type="hidden" name="blink" value="<?=$APPLICATION->GetCurPage(false)?>" />
					<input type="hidden" name="bform" value="Консультация по услугам" />
					<input type="text" name="bname" placeholder="Имя" />
						<input type="text" name="bphone" placeholder="Телефон" />
					<div class="clear-div"></div>
					<div class="form-submit" data-form="services">Отправить</div>
				</div>
			</div>		
		</div>
	</div>
	
	<?endif;?>
	
<?endforeach;?>

	<div class="clear-div ps-prishepka ps-proch66"></div>
	
	<div class="ps-recall-block service-recall-block">
		<div class="ps-proch66">
			<div class="services-block-item">
					<h3>Забронировать студию</h3>
					<div class="clear-div"></div>
					<div class="ps-recall-form" data-id="reservation">
						<input type="hidden" name="blink" value="<?=$APPLICATION->GetCurPage(false)?>" />
						<input type="hidden" name="bform" value="Забронировать студию" />
						<input type="text" name="bname" placeholder="Имя" />
						<input type="text" name="bphone" placeholder="Телефон" />
						<div class="clear-div"></div>
						<div class="form-submit" data-form="reservation">Отправить</div>
					</div>
			</div>		
		</div>
	</div>

</div>
