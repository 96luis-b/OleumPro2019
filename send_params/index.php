<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Send Mail</title>
    <style>
        label{
            width: 150px;
            display: inline-block;
        }
    </style>

</head>
<body>
    <form action="pagina2.php" method="post">
        <label for="nombre">Nombre:</label>
        <input type="text" name="nombre" id="nombre"> <br>  

        <label for="asunto">Asunto:</label>
        <input type="text" name="asunto" id="asunto">    <br>
 
        <label for="mensaje">Mensaje:</label>
        <textarea name="mensaje" id="mensaje" cols="30" rows="10"></textarea><br>

        <input type="sumit">
    </form>
</body>
</html>