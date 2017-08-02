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

$postgreSaveData = $postgre->saveData("user2","task5");
if($postgreSaveData)
{
    $postgreAdd = ADD_POSTGRE;
}
$arr = $postgre->getData("user2");
$delPostgre = $postgre->deleteData("user2");
if($delPostgre)
{
    $deletePostge = DEL_POSTGRE;
}


$mysqlSaveData = $mysql->saveData("user2","task5");
if($mysqlSaveData)
{
    $mysqlAdd = ADD_MYSQL;
}
$mysqlData = $mysql->getData("user2");
$mysqlDeleteData = $mysql->deleteData("user2");
if($mysqlDeleteData)
{
    $mysqlDel = DEL_MYSQL;
}

$session = new Session();
$saveSession = $session->saveData("user2","task5");
if($saveSession)
{
    $sessionSave = SESSION_SAVE;
}else
{
    $sessionNotSave = SESSION_NOT_SAVE;
}


$deleteSession = $session->deleteData("user2");
if($deleteSession)
{
    $sessionDelete = SESSION_DELETE;
}else
{
    $sessionNotDelete = SESSION_NOT_DELETE;
}
$getSession = $session->getData("user2");

$cookie = new Cookie();
$setCookie = $cookie->saveData('user2','task5');
if($setCookie){
    $addCookie =  ADD_COOKIE;
}else
{
    $notAddCookie =  NOT_ADD_COOKIE;
}

$deleteCookie = $cookie->deleteData('user2');
if($deleteCookie){
   $delCookie =  DELETE_COOKIE;
}else
{
    $notDelCookie =  NOT_DELETE_COOKIE;
}
$getCookies = $cookie->getData("user2");


include('template/index.php');





?>
