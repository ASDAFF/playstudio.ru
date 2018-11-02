<?

if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();

$pages=array(
	array(
		'/projects/',
		'/pod_kljuch/',
		'/arrange/',
		'/minusovka/'
	),
	array(
		'/pesnyavpodarok/',
		'/design/',
		'/arrangement/',
		'/minus_one/',
		'/sertifikat/'
	),
	array(
		'/studio1/',
		'/studio2/',
		'/studio3/',
		'/studio4/'		
	),
	array(
		'/guitarschool/',
		'/vocal/',
		'/vocalprice/'		
	)
);
$appends=array(
	array(
		'TITLE' => 'Услуги и цены',
		'LINK' => '/services/'
	),
	array(
		'TITLE' => 'Звукозапись',
		'LINK' => '/studioz/'
	),
	array(
		'TITLE' => 'Репетиции',
		'LINK' => '/playrooms/'
	),
	array(
		'TITLE' => 'Обучение',
		'LINK' => '/school/'
	),
);

if(!empty($arResult[0]['LINK'])){
	for($i=0; $i<count($pages); $i++){
		if(in_array($arResult[0]['LINK'], $pages[$i])){
			array_unshift($arResult, $appends[$i]);
			break;
		}
	}
	
}
//delayed function must return a string
if(empty($arResult))
	return "";

$strReturn = '<div class="bx_breadcrumbs"><ul>';
$strReturn .= '<li><a href="/" title="Главная">Главная</a></li>';
$num_items = count($arResult);
for($index = 0, $itemSize = $num_items; $index < $itemSize; $index++)
{
	$title = htmlspecialcharsex($arResult[$index]["TITLE"]);
	
	if($arResult[$index]["LINK"] <> "" && $index != $itemSize-1)
		$strReturn .= '<li><a href="'.$arResult[$index]["LINK"].'" title="'.$title.'">'.$title.'</a></li>';
	else
		$strReturn .= '<li><span>'.$title.'</span></li>';
}

$strReturn .= '</ul></div>';

return $strReturn;
?>