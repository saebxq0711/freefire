<?php
require '../config/conexion.php';
$conex = new Database();
$con=$conex->connect();

?>

<?php

$usu=$con->prepare('SELECT * FROM usuario WHERE id_usuario=2');
$usu->execute();
$fila=$usu->fetch(PDO::FETCH_ASSOC);


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Free Fire ¡Battle Royale!</title>
    <link rel="icon" href="../assets/img/icono.png">
    <link rel="stylesheet" href="../styles/style.css">
</head>
<body>

    <header>
        <img class="banner" src="../assets/img/banner.jpg" alt="">
        <button name="cerrar" type="submit">Cerrar sesión</button>
    </header>

    <div class="avatar">
        <img class="usuario" src="../assets/img/avatar4.jpg" alt="Avatar">
        <h1><?php echo $fila['username']?></h1>
        <h2>Nivel= <?php echo $fila['id_nivel']?></h2>
        <h2>Puntos= <?php echo $fila['puntos']?></h2>
        <h2>Mundo= <?php echo $fila['id_mundo']?></h2>

        <button class="cambiar" type="submit">Cambiar avatar</button>

        
    </div>

    

    <form action="">

        <div class="nivel1">
            <a href="../mundos/mundos1.php"><img class="bermuda" src="../assets/img/nivel1.jpg" alt="Bermuda"></a>
            <h3>Nivel 1</h3>
        </div>


        <div class="nivel2">
            <a href=""><img class="purgatorio" src="../assets/img/nivel2.jpg" alt="Purgatorio"></a>
            <h3>Nivel 2</h3>
        </div>






    </form>


</body>
</html>