<?php

if(isset($_POST['autenticar'])){
    include_once 'inc/conecta.php';
    extract($_POST);
    $sql = "select * from usuarios where usuario='$usuario' AND senha='$senha';";
    $result = mysqli_query($conn,$sql);
    $resposta = mysqli_num_rows($result);

    if($resposta == 1){
        $linha = mysqli_fetch_assoc($result);
        
        session_start();
        $_SESSION['logado']=true;
        $_SESSION['nivel']=$linha['user_tipo'];
        
        $vai="admin/admin.php";
    }else{
        $vai="entrar.php?aviso=tentou";
    }
}else{
    $vai="entrar.php?aviso=invasor";
}
header('location:'.$vai);