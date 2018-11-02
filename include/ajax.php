<?
if(isset($_SERVER['HTTP_X_REQUESTED_WITH']) && !empty($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest') {
    
	require($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/main/include/prolog_before.php");

	CEvent::SendImmediate
	(
	   'SITE_FORM', 
	   'ps', 
	   array(
	   'NAME'=>$_POST['NAME'],
	   'PHONE'=>$_POST['PHONE'],
	   'LINK'=>$_POST['LINK'],
	   'FNAME'=>$_POST['FNAME'],
	   'TEXT'=>$_POST['TEXT'],
	   ), 
	   'N', 
	   9
	);
	
	echo 'Ваша заявка успешно отправлена.';
	
	require($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/main/include/epilog_after.php");
	
}
else header('Location: /');

?>