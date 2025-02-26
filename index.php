<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="styles/style1.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="icon" href="assets/img/icon.png">

</head>
<body>
    <div class="wrapper">
        <div class = "ff">
            <img src="assets/img/icono2.png" alt="">
        </div>
        
        <form method= "POST" action="includes/inicio.php" autocomplete="off">
            <h1>Registro</h1>
            <div class="input-box">
                <input type="text" name="username" id="username" placeholder="Username" >
                <i class='bx bxs-id-card'></i>
            </div>

            <div class="input-box">
                <input type="password" name="password" id="password" placeholder="Password" >
                <i class='bx bx-show' id="showpass" onclick="showpass()"></i>
            </div>
            <button type="submit" name="submit" id="submit" class="btn">Registrar</button><br>
            <p>¿Ya tienes una cuenta? <a href="login.php">Inicia sesión</a></p>
            
        </form>
        
        
    </div>

    <script>
        function showpass() {
            const passw = document.getElementById("password");
            const iconshow = document.getElementById("showpass");
            
            if (passw.type === "password") {
                passw.type = "text";
                iconshow.classList.replace("bx-show", "bx-hide");
            } else {
                passw.type = "password";
                iconshow.classList.replace("bx-hide", "bx-show");
            }
        }
    </script>
</body>
</html>