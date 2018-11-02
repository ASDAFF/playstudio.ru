<?php
$pages=array('/projects/');
if(!empty($arResult[0]['LINK']) && in_array($arResult[0]['LINK'], $pages)){
	array_unshift($arResult, array(
		'TITLE' => '”слуги и цены',
		'LINK' => '/services/'
	));
} 
?>