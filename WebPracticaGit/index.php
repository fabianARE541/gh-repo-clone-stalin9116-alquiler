<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../LFATpractica/css/style.css">
    
    <title>FABIANAREQUIPA</title>
</head>

<body>
    <div class="container">
        <form class="box" action="Controler/acceso.php" method="post">
            <input type="text" name="nick" placeholder="Usuario" /><br>
            <input type="text" name="pass" placeholder="Contraseña" /><br>
            <input class="btn btn--form" type="submit" name"btnlogin" value="Login" /><br>
            <a class="" href="View/registrar.php">Registrarse</a>
        </form>
    </div>
</body>

</html>

