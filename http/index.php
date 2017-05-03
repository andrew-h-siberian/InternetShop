<?php
session_start();
include_once("classes/config.php");
include_once("classes/db.php");
include_once("classes/user.php");
include_once("classes/tpl.php");
include_once("classes/mf.php");

if (empty($_GET['page'])) {
    $user_page="main";
} else {
    $user_page = $_GET['page'];
}

//echo '.';//костыли вроде больше ненужные (верстка)
//echo '<p></p>';//костыли вроде больше ненужные (верстка)
include_once('scripts/'.$user_page.'.php');
?>