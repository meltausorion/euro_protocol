<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Загрузка фото ARM</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"/>
    <link rel="stylesheet" href="../css/bootcomplete.css">
    <script src="../js/bootstrap.js"></script>
    <script src="../js/jquery-3.2.1.min.js"></script>
    <script src="../js/bootstrap-typeahead.min.js"></script>
    <link href="../css/style.css" media="all" rel="stylesheet" type="text/css"/>
</head>

<?php
header ("Content-type:text/html; charset=utf-8");

include "./control/workDB.php";

$workDB = new workDB();

$column = array("id", "mark", "name");



$array = $workDB->selectDataTable("auto", "name");
print_r($array);

?>