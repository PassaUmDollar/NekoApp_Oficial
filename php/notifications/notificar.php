<?php
$nekoapp = '404';
include('../../assets/includes/app_start.php');
header('Content-Type: application/json');

if(isset($_COOKIE['iduser'],$_COOKIE['cry'])){
    $mysqli = new mysqli($sql_db_host, $sql_db_user, $sql_db_pass, $sql_db_name);
    $myArray = array();
    // Noticações
    if ($result = $mysqli->query("SELECT * FROM notifications where ativo = 1")) {
        while($row = $result->fetch_array(MYSQLI_ASSOC)) {
            $myArray[] = $row;
        }
    }
        echo json_encode($myArray);
    }