

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SENAC NOTÍCIAS</title>
    
    <?php
        if(isset($publica)){
            echo '<link href="estilos/estilos.css" rel="stylesheet" type="text/css" />';

        }else{
            echo '<link href="../estilos/estilos.css" rel="stylesheet" type="text/css" />';

        }

        // outro metodo:

        /*if(isset($_SERVER['HTTP_REFERER']))
        {
            echo '<link href="/estilos/estilos.css" rel="stylesheet" type="text/css" />';
        }else
        {
            echo '<link href="../estilos/estilos.css" rel="stylesheet" type="text/css" />';
        }*/
    ?>


</head>
<body>
