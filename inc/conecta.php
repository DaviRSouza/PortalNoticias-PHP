<?php
$host = 'localhost';
$user = 'root';
$pass = '';
$db   = 'noticias';


$conn = mysqli_connect($host, $user, $pass, $db) or die('não conectado!');


//para ver erros
/*
echo mysqli_connect_errno();
echo "<br>";
echo mysqli_connect_error();


if($conn)
{
    echo "conectou!\n";
}
if(!$conn)
{
    echo "nao conectou!";
}

var_dump($conn);*/