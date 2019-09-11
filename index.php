<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="estilos.css">
    <title>Bienvenido</title>
</head>
<body>
    

       <center> <br>
       <br>
       <h1>Iniciar Sesión</h1>
       
      
       <br>
       <form action="logica/loguear.php" method="POST">
        <input type="text" name="usuario" placeholder="&#128273;" required><br>
         <br><br>
         <input type="password" name="clave" placeholder="&#128272;" required><br>
         <br><br>
         <input type="submit" value="Acceder">
        </form>
        </center>
</body>
</html>