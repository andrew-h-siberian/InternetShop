<?php
/*if ($user['rights']!=1) {
	header ('Location: index.php');
}*/

$vars=array();

//$cat_id=sqlquery('SELECT cat_id FROM category');
$cat=sqlquery('SELECT * FROM category');

//print_r($cat);

$vars['cat']="";
//foreach ($cat['id_cat'] as $value) {
foreach ($cat as $value) {
	//$var['cat']
	$vars['cat'].='<input type="radio" name="cat_id_product" value="'.$value['id_cat'].'">'.$value['name_cat'].'</input><br />';
}

show_page($user_page, $vars);

?>