<?php
function load_tpl($name,$vars) {
	$result = file_get_contents($name);
	foreach ($vars as $key=>$value) {
		$result = str_replace('[&'.$key.'&]',$value,$result);
	}
	return $result;
}

function show_page($page,$exch)
{
	global $app;
	/*$head=array();
	$head['title']=$app['config']['title'];*/ //а если заменить объявленную здесь переменную на $exch
	$exch['title']=$app['config']['title'];
	
	//echo load_tpl('tpl/head.tpl',$head);//PERHAPS: change $head to ?
	echo load_tpl('tpl/head.tpl',$exch);
	//echo load_tpl('tpl/head.tpl',$app['config']);//checked if I can call load_tpl with (sub)array $app
	
	echo load_tpl('tpl/header.tpl',$exch);//PERHAPS: change $head to ?

    global $user;
	$top_menu=array();
	$top_menu['cabinet']='
		<div class="menu_item_container">
			<div class="menu_item">
				<p>
					<a href="index.php?page=login">Вход</a>
				</p>
			</div>
		</div>
		<div class="menu_item_container">
			<div class="menu_item">
				<p>
					<a href="index.php?page=register">Регистрация</a>
				</p>
			</div>
		</div>';
	//$top_menu['user']='<a href="index.php?page=login">Войти</a>';
	//$user['login']='USSSER!';//для отладки
	if ($user['id']>0 and $user['user_rights']>0) {
		//$top_menu['user']="Привет, ".$user['login'].'<a href="index.php?json&action=logout">Выйти</a>';
		$top_menu['cabinet']='
		<div class="menu_item_container">
			<div class="menu_item">
				<p>
					<a href="index.php?page=main" style="color: #f04444;">Админка</a>
				</p>
				<p>
					<a href="index.php?page=product_add">Доб. товар</a>
				</p>
				<p>
					<a href="index.php?page=cats_edit">Редакт.кат.</a>
				</p>
			</div>
		</div>
		<div class="menu_item_container">
			<div class="menu_item">
				<p>
					<a href="index.php?page=json&action=logout">Выход</a>
				</p>
			</div>
		</div>';
	} elseif ($user['id']>0 and $user['user_rights']==0) {
		//$top_menu['user']="Привет, ".$user['login'].'<a href="index.php?json&action=logout">Выйти</a>';
		$top_menu['cabinet']='
		<div class="menu_item_container">
			<div class="menu_item">
				<p>
					<a href="index.php?page=main">Кабинет</a>
				</p>
			</div>
		</div>
		<div class="menu_item_container">
			<div class="menu_item">
				<p>
					<a href="index.php?page=json&action=logout">Выход</a>
				</p>
			</div>
		</div>';
	}

	echo load_tpl('tpl/top_menu.tpl',$top_menu);

	
	//echo load_tpl('tpl/pages/'.$page.'.tpl',$vars);//('page_name'=>'что-то там заданное в .ini'));
	echo load_tpl('tpl/pages/'.$page.'.tpl',$exch);

	echo load_tpl("tpl/footer.tpl", $exch);//PERHAPS: change $head to ?

	echo load_tpl("tpl/foot.tpl", array());//PERHAPS: change $head to ?
}
?>