<?php
if(empty($_GET['action'])) {
	return;
} else {
	switch ($_GET['action']) {
		case "register":
	 		$vars = array();
	 		$vars['message2user']='';
	 		if(empty($_POST['login'])) {
				$vars['message2user']='Введите имя пользователя';
				show_page('register',$vars);
				return;//хм, странное предложение использовать return...
			} elseif(empty($_POST['pass'])) {
				$vars['message2user']='Введите пароль';
				show_page('register',$vars);
				return;//хм
			} else { //INTERESTING check sql injection in next row!
			$tmp=sqlquery("SELECT count(*) as c FROM user WHERE login='".$_POST['login']."'");
			if($tmp[0]['c']>0) {
				$vars['message2user']='Пользователь с таким именем уже существует';
				show_page('register',$vars);
				return;
			}
			$p=sha1($_POST['pass']);
        	//////show_page('register',$vars);//
			//$result_tmp=$link_db->query("INSERT INTO `figure_shop`.`user` //для отладки
        	sqlquery("INSERT INTO `figure_shop`.`user` (login, pass, name, updated, created)
        	VALUES ('".$_POST['login']."', '".$p."', NULL, CURRENT_TIMESTAMP, CURRENT_TIMESTAMP)");
        	$vars['message2user']='<div id="success">Добро пожаловать, '.$_POST['login'].'</div>';
        	//$vars['message2user']='<p class="success">Регистрация прошла успешно!</p>';
			show_page('register',$vars);
			return;//
        	//header ('Location: index.php?page=main');
			}
		break;

		
		case "login":
		$vars = array();
	 		$vars['message2user']='';
	 		if(empty($_POST['login'])) {
				$vars['message2user']='Введите имя пользователя';
				show_page('login',$vars);
				return;//хм, странное предложение использовать return...
			} elseif(empty($_POST['pass'])) {
				$vars['message2user']='Введите пароль';
				show_page('login',$vars);
				return;//хм
			} else {
				$p=sha1($_POST['pass']);
				$u=sqlquery("SELECT * FROM `figure_shop`.`user` WHERE login='".$_POST['login']."' AND pass='".$p."'");
				if (empty($u)) {
					$vars['message2user']='Нет такого пользователя с таким паролем';
					show_page('login',$vars);
					return;
				} else {
					$_SESSION['UID']=$u[0]['user_id'];//Ура
					
					$vars['message2user']='<div id="success">Добро пожаловать, '.$_POST['login'].'</div>';//или так
        			//$vars['message2user']='<div id="success">Добро пожаловать, '.$u[0]['login'].'</div>';//или так
					show_page('login',$vars);
					header ('Location: index.php?page=login');
					//header ('Location: index.php');
					break;//имеет ли значение этот break если мы уже header('Location: ...')	
				}
			}
		
			case "logout":
			$_SESSION['UID']=-1;
			header ('Location: index.php');
		break;
		
		
		case "product_add":
			//TODO: if(empty())
			sqlquery("INSERT INTO `figure_shop`.`product` (name_product, sides, cat_id_product) VALUES ('".$_POST['name_product']."', '".$_POST['sides']."', '".$_POST['cat_id_product']."')");
			//echo "INSERT INTO `figure_shop`.`product` (name_product, sides, cat_id_product) VALUES ('".$_POST['name_product']."', '".$_POST['sides']."', '".$_POST['cat_id_product']."')"."<br />";
			//$rslt251=sqlquery("INSERT INTO `figure_shop`.`product` (name_product, sides, cat_id_product) VALUES ('".$_POST['name_product']."', '".$_POST['sides']."', '".$_POST['cat_id_product']."')");
			//print_r($rslt251);
			
			$uploaddir = '/uploads/';
			$uploadfile = $uploaddir . basename($_FILES['userfile']['name']);
			
			header ('Location: index.php?page=product_add');
		break;
		
		
		/*case "upload_img":
		break;*/
		
		
		case "category_add":
			//TODO: if(empty())
			//sqlquery("INSERT INTO `figure_shop`.`category` (name_cat, parent_id) VALUES ('".$_POST['name_category']."', '".$_POST['parent']."')");
			sqlquery("INSERT INTO `figure_shop`.`category` (name_cat, parent_id) VALUES ('".$_POST['name_category']."', '".$_POST['cat_id_product']."')");
			header ('Location: index.php?page=cats_edit');
		break;

		
		case "getprod":
			//echo '<br /><h3>THIS IS MY BREAKPOINT, BLIN!</h3><br />';
			//header ('Location: index.php');
			
			$id=$_POST['product_id'];
			$res=sqlquery("SELECT * FROM  `figure_shop`.product WHERE id_product=".$id);
			
			//echo '<br /><h3>';
			//print_r($res);
			//echo '</h3><br />';
						
			echo json_encode($res[0]);
			return;
		break;

		
		case "addcomment":
			sqlquery("INSERT INTO `figure_shop`.`comment` (product_id, email, text) VALUES ('".$_POST['id']."', '".$_POST['email']."', '".$_POST['comment_text']."')");
			//echo ("INSERT INTO `figure_shop`.`comment` (product_id, email, text) VALUES ('".$_POST['id']."', '".$_POST['email']."', '".$_POST['comment_text']."')");
			echo json_encode(array("status"=>true));
			return;
		break;
			

		case "comments":
			$id=$_POST['id'];
			$res=sqlquery("SELECT * FROM `figure_shop`.`comment` WHERE product_id=".$id." ORDER BY comment_id");
			echo json_encode($res);
			return;
		break;
		
		default:
			header ('Location: index.php');
		} 
	}
?>