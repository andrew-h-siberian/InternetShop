<?php
if(empty($_GET['action'])) {
	return;
} else {
	switch ($_GET['action']) {
		case "register":
		//echo '<h2>CASE REGISTER</h2>';//для отладки
			if(empty($_POST['login'])) {
				echo '<p class="warning">Введите имя пользователя (login)!</p>';
				return;
			} else {
			$tmp=sqlquery("SELECT count(*) as c FROM user WHERE login='".$_POST['login']."'");
        	echo '<h3>';//для отладки
			print_r($tmp);//для отладки
        	echo '</h3><br />';//для отладки
			if($tmp[0]['c']>0) {
				return;
			}
			$p=sha1($_POST['pass']);
        	print_r($p); //для отладки 
			//$result_tmp=$link_db->query("INSERT INTO `figure_shop`.`user` //для отладки
        	sqlquery("INSERT INTO `figure_shop`.`user` (login, pass, name, updated, created)
        	VALUES ('".$_POST['login']."', '".$p."', NULL, CURRENT_TIMESTAMP, CURRENT_TIMESTAMP)");
        	//header ('Location: index.php?page=main');
		}
		
		case "login":
		if(empty($_POST['login'])) {
				echo '<p class="warning">Введите имя пользователя (login)!</p>';
				return;
			} else {
				$p=sha1($_POST['pass']);
				//$u=sqlquery('SELECT * FROM user WHERE login='".$_POST['login']."' AND password='".$p."'");
				//$u=sqlquery('SELECT * FROM user WHERE login='.$_POST['login'].' AND password='.$p');
				if (empty($u)) {
					return;
				} else {
					$_SESSION['UID']=$u[0]['user_id'];
					header ('Location: index.php');
					break;	
				}
		}
		
		case "logout":
		$_SESSION['UID']=-1;
		header ('Location: index.php');
		break;
		
		case "product_add":
		//TODO: if(empty())
		sqlquery("INSERT INTO `figure_shop`.`product` (name_product, sides, cat_id_product) VALUES ('".$_POST['name_product']."', '".$_POST['sides']."', '".$_POST['cat_id_product']."')");
		echo "INSERT INTO `figure_shop`.`product` (name_product, sides, cat_id_product) VALUES ('".$_POST['name_product']."', '".$_POST['sides']."', '".$_POST['cat_id_product']."')";
		//$rslt251=sqlquery("INSERT INTO `figure_shop`.`product` (name_product, sides, cat_id_product) VALUES ('".$_POST['name_product']."', '".$_POST['sides']."', '".$_POST['cat_id_product']."')");
		//print_r($rslt251);
		
		//header ('Location: index.php?page=about');
		break;
		//
		
	} 
}
?>