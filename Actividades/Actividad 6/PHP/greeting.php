<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>PHP</title>
    </head>
    <body>
    <?php
    /*
    *Descripcion: Componente los datos de formulario
    *Autor:Daniel Torres
    *Fecha: 12 de octubre de 2022
    */


    //Obtiene nombre de formulario


    $nombre = $_POST['nombre'];
    $edad = $_POST['edad'];
    $telefono = $_POST['telefono'];

    echo "Hello $nombre <br>";
    echo "Edad: $edad <br>";
    echo "Teléfono: $telefono <br>";

    echo "<a href='../HTML/greetingForm.html'>Regresar</a>";
?>
</body>


    </html>
