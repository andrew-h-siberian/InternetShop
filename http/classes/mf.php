<?php
function genCatsBlock() {
 	$category_link = sqlquery ('SELECT * FROM category'); 
 	$categories='<div class="left_menu"><b>Категории:</b><br />';
 	foreach ($category_link as $value) {
 	$categories.='<p class="cat_menu"><a href="index.php?page=products&cat='.$value['id_cat'].'">'.$value['name_cat'].'</a></p>';
 	};
 	$categories.='</div>';
 	return $categories;
}


?>