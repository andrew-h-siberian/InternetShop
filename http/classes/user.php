<?php
$user=array();
$user['id']=-1;
$user['login']="";
//$user['user_rights']=0;
$user['user_rights']=-1;
if(empty($_SESSION['UID'])) {
	$_SESSION['UID']=-1;
}

//> меняем на >= (лишь бы не -1)
if($_SESSION['UID']>=0) {
	$u=sqlquery('SELECT * FROM user WHERE user_id = '.$_SESSION['UID']);
	$user['id']=$u[0]['user_id'];
	$user['login']=$u[0]['login'];
	$user['user_rights']=$u[0]['user_rights'];
}
//print_r($user);//для отладки
?>