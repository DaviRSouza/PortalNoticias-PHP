<?php


if($_SERVER['REQUEST_METHOD'] == 'GET' && isset($_GET['id_tipo'])){

    include_once '../inc/conecta.php';
    $sql = "delete from tipos where idTipo = '{$_GET['id_tipo']}';";
    mysqli_query($conn, $sql);
    $vai = 'tipo.php';
    header('location:'.$vai);
    exit;

}



