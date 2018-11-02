<?

function print_pre($a)
{
	global $USER;
	
	if($USER->IsAdmin())
	{
		echo "<pre>";
		print_r($a);
		echo "</pre>";
	}
}


function custom_mail($to, $subject, $message, $addh = "", $addp = "")
{
	
    require_once $_SERVER['DOCUMENT_ROOT'].'/bitrix/php_interface/include/php_mailer/PHPMailerAutoload.php';
    try {
    $mail = new PHPMailer();
	$mail->CharSet = 'UTF-8';
    // telling the class to use SMTP
    $mail->IsSMTP();
 
    // SMTP server
    $mail->Host = 'ssl://smtp.yandex.ru';
 
    // set the SMTP port for the GMAIL
    $mail->Port = 465;
 
    $mail->SMTPAuth   = true;
 
    // SMTP account username
    $mail->Username = "info@playstudio.ru";
 
    // SMTP account password
    $mail->Password = "playstudio";
 
    $mail->SMTPDebug = 0;
	$mail->IsHTML(true);
    $mail->SetFrom('info@playstudio.ru', 'Play Studio');
    $mail->AddAddress($to);
    $mail->Body =  $message;
    $mail->Subject = $subject;
    
    //$addh = $mail->HeaderLine('To',
    //    $mail->EncodeHeader($mail->SecureHeader($to))).$addh;
    //$addh = $mail->HeaderLine('Subject',
    //    $mail->EncodeHeader($mail->SecureHeader($subject))).$addh;
    $mail->Header = $addh."\n";
 
    $status = $mail->Send();
 
    } 
	
	catch (phpmailerException $e) {
       // echo $e->errorMessage();
    } catch (Exception $e) {
       // echo $e->getMessage();
    }
 
    return $status;
}

function form_view($data,$blink,$bform)
{
	?>
	<div class="page-recall-form" data-id="<?=$data?>"> 						
			<input type="hidden" name="blink" value="<?=$blink?>"/> 						
			<input type="hidden" name="bform" value="<?=$bform?>" /> 						
			<input type="text" name="bname" placeholder="Имя" /> 						
			<input type="text" name="bphone" placeholder="Телефон" /> 						
			<div class="clear-div"></div>
								
			<div class="form-submit" data-form="<?=$data?>">Отправить</div>
       </div>
	<?
}

function sound_view($sid,$pl=0)
{
	if($sid!='' && CModule::IncludeModule("iblock"))
	{

		$arSelect = Array("ID", "IBLOCK_ID", "NAME","PREVIEW_PICTURE","PROPERTY_MP3");//IBLOCK_ID и ID обязательно должны быть указаны, см. описание arSelectFields выше
		$arFilter = Array(
		 "IBLOCK_ID"=>IntVal(4),
		 "ACTIVE"=>"Y", 
		 "ACTIVE_DATE"=>"Y", 
		 "SECTION_CODE"=>$sid
		 );
		$res = CIBlockElement::GetList(Array("SORT"=>"ASC"), $arFilter, false, false, $arSelect);
		
		?><div id="<?=$sid?>"></div>
			
			<div class="sound-play-view">
			<script>
			new APlayer({
			container: document.getElementById('<?=$sid?>'),
			listFolded: false,
			listMaxHeight: 110,
			audio: [
					
					<?
		
					while($ar_fields = $res->GetNext())
					{
			
						?>
						{
							name: '<?=$ar_fields['NAME']?>',
							artist: 'Play Studio',
							url: '<?=CFile::GetPath($ar_fields['PROPERTY_MP3_VALUE'])?>',
							cover: '<?if($ar_fields['PREVIEW_PICTURE']!=''):?><?=CFile::GetPath($ar_fields['PREVIEW_PICTURE'])?><?else:?><?=SITE_TEMPLATE_PATH?>/images/playstudio-sound2.png<?endif;?>',
							lrc: ''
						},
						<?
					}
			?>
				]
			});
			</script>
			</div>
			<?
		

		
		
		
	}
}

?>