<?php
$nekoapp = '404';
include('../../assets/includes/app_start.php');
header('Content-Type: application/json');

$server_id = $_GET['id'];

if(isset($_COOKIE['iduser'],$_COOKIE['cry'])){
    $mysqli = new mysqli($sql_db_host, $sql_db_user, $sql_db_pass, $sql_db_name);
    $myArray = array();
    if ($result = $mysqli->query("SELECT * FROM mensagem_server where id_server = '$server_id'")) {
        while($row = $result->fetch_array(MYSQLI_ASSOC)) {
                $myArray[] = $row;
        }
        echo json_encode($myArray);
    }
}