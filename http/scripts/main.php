<?php
$vars = array();
//$vars['page_name']='Главная страница';
$vars['header']="Интернет-магазин Фигурист";
//$vars['year'] = date('Y');
$vars['year'] = 'две тысячи надцатого';
$vars['sm_logo'] = '<img src="design/img/logo_64x64.png" />';
//$vars['logo_img'] = "/design/img/orange.png";
		
$vars['cats']=genCatsBlock();
show_page($user_page,$vars);
?>