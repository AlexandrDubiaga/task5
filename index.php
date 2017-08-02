<?php
session_start();
include('libs/iWorkData.php');
include('libs/Cookie.php');
include('libs/Session.php');
include('libs/PostgreSQL.php');
include('libs/MySQL.php');
include('config.php');

$mysql = new MySQL();
$mysql->dbconnect();
$postgre = new PostgreSQL();
//$arr = $postgre->getData("user10");


/*$mysql->saveData("user2","task5");*/
var_dump($mysqlData = $mysql->getData("user2"));
/*$mysql->deleteData("user2");
*/
    /*
$session = new Session();
$saveSession = $session->saveData("user2","task5");
$getSession = $session->getData("user2");
$deleteSession = $session->deleteData("user2");

$cookie = new Cookie();
$setCookie = $cookie->saveData('user2','task5');
if($setCookie){
    echo ADD_COOKIE;
}else{
    echo NOT_ADD_COOKIE;
}
$deleteCookie = $cookie->deleteData('user2');
if($deleteCookie){
    echo DELETE_COOKIE;
}else{
    echo NOT_DELETE_COOKIE;
}


*/
include('template/index.php');





?>
