<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetPageProperty("description", "Студия звукозаписи. Записываем песни под ключ, высококачественные аранжировки и минусовки");
$APPLICATION->SetPageProperty("title", "Фото/Видео");
//$APPLICATION->SetPageProperty("NOT_SHOW_NAV_CHAIN", "Y");
$APPLICATION->SetTitle("Фото/Видео");
?> 

<div class="ps-you-can soundrecord songasgift page-fffbg prices-bg media-bg">
	<div class="content-wrapper">
	
	<div class="instagram_feed">
	
	<script>
		$(document).ready(function(){
			$("#instagram").instagramGet({
				"user_id": "775840369",
				"access_token": "775840369.0c6b722.84ddc9925eab45d687fdd79660125edf",
				"count": 20
			});
		});
	</script>
		<ul id="instagram"></ul>
	</div>
	<div class="clear-div"></div>
	<div class="media-feed-head"> 
		<a href="https://www.instagram.com/play__studio/" target="_blank"><img src="<?=SITE_TEMPLATE_PATH?>/images/instagram-icon.png"><br><br>
		<img src="<?=SITE_TEMPLATE_PATH?>/images/subscribe-icon.png"></a>
	</div>
	</div>
</div>


<script>
      $(document).ready(function() {
        $('#instagram').magnificPopup({
          delegate: 'a',
          type: 'image',
          tLoading: 'Загрузка #%curr%...',
          mainClass: 'mfp-img-mobile',
          gallery: {
            enabled: true,
            navigateByImgClick: true,
            preload: [0,1] // Will preload 0 - before current, and 1 after the current image
          },
          image: {
            tError: '<a href="%url%">Изображение #%curr%</a> не может быть загружено.',
            titleSrc: function(item) {
              return item.el.attr('title');
            }
          }
        });
      });
    </script>

	
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>