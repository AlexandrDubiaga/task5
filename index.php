<?php
session_start();
include('Cookie.php');
include('Session.php');
include('PostgreSQL.php');
include('MySQL.php');
$mysql = new MySQL();
$mysql->dbconnect();
$mysql->saveData("Hosting","Max");
$mysql->getData("Hosting");
  
  
include(template.php);





?>
