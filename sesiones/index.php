<?php
 session_name("LOGIN");
//session_id("phpCON");
   session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario Login</title>
    <style>
        body,
        html {
            width: 100%;
            height: 100%;
            background-color: black;
        }

       

        .container {
            height: 100%;
            width: 100%;
            display: flex;
            justify-content: center;
            align-items: center;

        }

        .container>.formulario {

            height: auto;
            width: 100%;
            max-width: 400px;
            min-width: 300px;
            background-color: forestgreen;
            padding: 25px 30px;
            border-radius: 15px;


        }

        .formulario>input {
            width: 100%;
            height: auto;
        }

        .formulario>label {
            color: ghostwhite;
        }


    </style>
</head>


<body>
    <div class="container">
        <form action="login.php" method="post" class="formulario">
            <label>Usuario : </label>
            <input type="text" name="usuario" id="" pattern="[a-zA-Z]{4,10}"
            maxlength="10" required>
            <label>Clave : </label>
            <input type="password" name="clave" id=""  pattern="[a-zA-Z0-9$%@.-_]{4,30}"
             maxlength="30" required>
            <br><br>
            <button type="submit">Login</button>
        </form>
    </div>
</body>

</html>