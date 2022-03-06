<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<?php
    //print_r($_POST);

    $name = $gender = $email = $phone = $subject = $message = "";

    if ($_POST) {
        $name = formulario($_POST['name']);
        if (empty($_POST['gender'])){
            $gender = "";
        } else
        {
            $gender = formulario($_POST['gender']);
        }
        $email = formulario($_POST['email']);
        $phone = formulario($_POST['phone']);
        $subject = formulario($_POST['subject']);  
        $message = formulario($_POST['message']);     
    }

    function formulario ($datos) {
        $datos = filter_var( $datos, FILTER_SANITIZE_STRING);
        $datos = trim($datos);
        $datos = htmlspecialchars($datos);
        $datos = stripcslashes($datos);
        return $datos;
    }   
        
    if (!empty($name)) {
        echo "Los valores ingresados fueron los siguientes:";
        echo "<br>";
        echo "Nombre: $name";
        echo "<br>";
        echo "Genero: $gender";
        echo "<br>";
        echo "Correo: $email";
        echo "<br>";
        echo "Teléfono: $phone";
        echo "<br>";
        echo "Asunto: $subject";
        echo "<br>";
        echo "Mensaje: $message";
    }
    else {
        echo "Ingrese los datos en el formulario";
    }
   
   /*
       if (!empty($name)){
        $name = filter_var( $name, FILTER_SANITIZE_STRING);
        $name = trim($name);
        $name = htmlspecialchars($name);
        $name = stripcslashes($name);
    }

    $genero = $_GET['gender'];

    if ($genero == "male"){
        $genero = "Masculino";
    }  else {
        $genero = "Femenino";
    }

    if ($_GET){
        echo $_GET['name'];
        echo "</br>";
        echo $genero;
        echo "</br>";
        echo $_GET['email'];
        echo "</br>";
        echo $_GET['phone'];
        echo "</br>";
        echo $_GET['subject'];
        echo "</br>";
        echo $_GET['message'];
        
    } else {
        header("Location: http://localhost/php/12-forms.php");
    } */

?>

</body>
</html>