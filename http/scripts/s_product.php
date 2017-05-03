<?php
$vars = array();
if(empty($vars['message2user'])) $vars['message2user']='';//1. Потом можно, наверное, заменить на безусловное присваивание '' 2. '''<div class="warning"></div>';
if(empty($_GET['pr'])) {
	header ('Location: index.php?page=products');
	//$site_product_id=1;	
} else {
	$site_product_id=$_GET['pr'];
}

//TODO: if нет такого продукта
$tmp=sqlquery('SELECT count(*) as c FROM product WHERE id_product = '.$site_product_id);
if($tmp[0]['c']<1) {
	$vars['message2user']='<div class="warning">Такой продукт в базе не найден</div>';
	$vars['site_prod_name']='';
	$vars['site_prod_img1']='no_image_128x128.png';
	$vars['site_prod_description']='Описание отсутствует';
	show_page('product',$vars);
	return;
} else {
	$this_product=sqlquery('SELECT id_product FROM product WHERE id_product = '.$site_product_id);
	$vars['product_id']=$this_product[0]['id_product'];
	$this_product=sqlquery('SELECT name_product FROM product WHERE id_product = '.$site_product_id);
	$vars['site_prod_name']=$this_product[0]['name_product'];
	$this_product=sqlquery('SELECT img1_link FROM product WHERE id_product = '.$site_product_id);
	$vars['site_prod_img1']=$this_product[0]['img1_link'];
	if (empty($vars['site_prod_img1']) or $vars['site_prod_img1']=='') {
		$vars['site_prod_img1']='no_image_128x128.png';
	}
	$this_description=sqlquery('SELECT description FROM product WHERE id_product = '.$site_product_id);
	$vars['site_prod_description']=$this_description[0]['description'];
	//echo 'site product='.$this_product[0]['name_product'].'<br />';
	//show_page($user_page,$vars);
	show_page('product',$vars);
}
?>