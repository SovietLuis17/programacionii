<?php
 //CREAR COOKES 
  setcookie("Idioma","es",time()+60*60,"/programacionII/","localhost",false,false);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cookies</title>
</head>
<body>
    <h1>Hola mundo</h1>
    <h1><?php echo $_COOKIE['Idioma']; ?></h1>
</body>
</html>