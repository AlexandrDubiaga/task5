<?php
session_start();
include('Cookie.php');
include('Session.php');
include('PostgreSQL.php');
include('MySQL.php');
$mysql = new MySQL();
$mysql->dbconnect();
$mysql->saveData("user2","task5");
$mysql->getData("user2");
$mysql->deleteData("user2");
 
include('template.php');





?>
