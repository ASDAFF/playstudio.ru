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
$ind=1;
?>
<div class="grid">
<div class="grid-sizer"></div>
<?foreach($arResult["ITEMS"] as $arItem):
	$i++;
	
	//print_pre($arItem);
	
?>

	<div class="grid-item grid-level<?=$ind?><?if($ind>1):?> grid-hide<?endif;?><?if($arItem['PREVIEW_PICTURE']['SRC']!=''):?> grid-height<?endif;?>"><div class="news-inner">
		<?if($arItem['PREVIEW_PICTURE']['SRC']!=''):?>
			<div class="grid-img" style="background-image:url(<?=$arItem['PREVIEW_PICTURE']['SRC']?>);"></div>
		<?endif;?>
		<div class="grid-head"><span><?=$arItem['NAME']?></span></div>
		<div class="grid-date"><?=$arItem['ACTIVE_FROM']?></div>
		<a class="grid-link" href="<?=$arItem['DETAIL_PAGE_URL']?>"></a>
	</div></div>

	<?if($i==12) { $i=0; $ind++; }?>
	
<?endforeach;?>
</div>
<div class="clear-div"></div>
<div class="indexServices_clear" data-start="2"></div> 

<script>
$(document).ready(function(){

/*
	$('.grid').masonry({
	  // options...
		columnWidth: '.grid-sizer',
		itemSelector: '.grid-item',
		percentPosition: true
	});
	*/
	
	$('.indexServices_clear').on('click', function(){
		
		
		var str = $(this).attr('data-start');
		if($('.grid-level'+str).length>0)
		{
			$('.grid-level'+str).css('display','block');
			/*
			$('.grid').masonry('destroy');
		
			$('.grid').masonry({
			  // options...
				columnWidth: '.grid-sizer',
				itemSelector: '.grid-item',
				percentPosition: true
			});*/
		}
		
		var nn = Number(str) + 1;
		
		if($('.grid-level'+nn).length>0)
		{
			$(this).attr('data-start',nn);
		}
		else
		{
			$(this).css('display','none');
		}
		
	
	});
	
	
});	
</script>
