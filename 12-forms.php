<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forms</title>
</head>
<body>
    <form action="recuperar.php" method="post">
        <label for="">Ingrese su nombre</label>
        <input type="text" name="name">
       
    </br></br>
        <label for="">Seleccione su genero</label>
        <input type="radio" name="gender" value="female">Femenino
        <input type="radio" name="gender" value="male">Masculino

        </br></br>
        <label for="">Ingrese su correo</label>
        <input type="text" name="email">

        </br></br>
        <label for="">Ingrese su teléfono</label>
        <input type="text" name="phone">
        </br></br>

        <label for="">Ingrese el asunto</label>
        <input type="text" name="subject">
        </br></br>

        <textarea name="message" rows="2" cols="40"></textarea>

        </br></br>
        <input type="submit">
    </form>

</body>
</html>