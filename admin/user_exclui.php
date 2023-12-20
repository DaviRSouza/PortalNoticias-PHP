<?php
    include '../inc/conecta.php';
    if($_SERVER['REQUEST_METHOD'] == 'GET' && isset($_GET['id_usuario'])){
        $sql = "update usuarios set ativo='n' where id_usuario='{$_GET['id_usuario']}';";
        //die($sql);
        mysqli_query($conn, $sql);
        $vai = "user.php";
        header('location:'.$vai);
        exit;
    }