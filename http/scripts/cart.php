<?php
$vars = array();
if(empty($vars['message2user'])) $vars['message2user']='<div class="warning"></div>';
if(empty($_GET['pr'])) {
	$site_product_id=1;	
} else {
	$site_product_id=$_GET['pr'];
}

//TODO: if нет такого продукта
$tmp=sqlquery('SELECT count(*) as c FROM product WHERE id_product = '.$site_product_id);
if($tmp[0]['c']<1) {
	$vars['message2user']='<div class="warning">Такой продукт в базе не найден</div>';
	show_page('product',$vars);
	return;
} else {
	//$vars = array();
	$this_product=sqlquery('SELECT name_product FROM product WHERE id_product = '.$site_product_id);
	$vars['site_prod_name']=$this_product[0]['name_product'];
	$this_product=sqlquery('SELECT img1_link FROM product WHERE id_product = '.$site_product_id);
	$vars['site_prod_img1']=$this_product[0]['img1_link'];
	$this_description=sqlquery('SELECT description FROM product WHERE id_product = '.$site_product_id);
	$vars['site_prod_description']=$this_description[0]['description'];
	//echo 'site product='.$this_product[0]['name_product'].'<br />';
	//show_page($user_page,$vars);
	show_page('product',$vars);
}
?>