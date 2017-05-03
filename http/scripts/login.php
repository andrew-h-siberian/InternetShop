<?php
    $vars = array();
	//$vars['message2user']='Введите данные учетной записи';
	if(empty($vars['message2user'])) $vars['message2user']='';
    show_page($user_page,$vars);
?>