<?php
if (empty($_GET['cat'])) {
	$q='SELECT * FROM product';
} else { //TODO тут добавить else if на случай несуществующей категории (...а может и пустой тоже)
	$q='SELECT * FROM product WHERE cat_id_product = '.$_GET['cat'];
}

$exch_products = array();

$prod = sqlquery($q); //TODO: if empty "В выбранной вами категории товары отсутствуют"

//echo '<h3>'; print_r($prod); echo '</h3>'; echo '<br />';//для отладки

$result="";
foreach ($prod as $value) {
	$exch_products['site_prod_name']=$value['name_product'];
	if (empty($value['img1_link']) or $value['img1_link']=='') {
		$exch_products['site_prod_img1']='no_image_128x128.png';
	} else {
		$exch_products['site_prod_img1']=$value['img1_link'];	
	}
	$exch_products['site_prod_description']=$value['description'];
	$exch_products['message2user']='';
	//$exch_products['test']=$exch_products['site_prod_img1'].' = '.$value['img1_link'];//implode('-',$value);
	$result.=load_tpl('tpl/pages/product.tpl', $exch_products);
}
//echo $result;

$exch_products['products']=$result;
$exch_products['cats']=genCatsBlock();
//$exch_products['test']= implode('-',$prod[0]);
show_page($user_page, $exch_products);
?>
