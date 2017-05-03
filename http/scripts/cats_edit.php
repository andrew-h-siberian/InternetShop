<?php
//на случай попытки прямого доступа к админке не админа
if ($user['user_rights']<1) {
	header ('Location: index.php?page=login');
}

$vars=array();
$cat=sqlquery('SELECT * FROM category');

//print_r($cat);

$vars['cat']="";
//foreach ($cat['id_cat'] as $value) {
foreach ($cat as $value) {
	$vars['cat'].='<input type="radio" onclick="set_parent('.$value['id_cat'].');" name="cat_id_product" value="'.$value['id_cat'].'">'.$value['name_cat'].'</input><br />';
}

show_page($user_page, $vars);
?>