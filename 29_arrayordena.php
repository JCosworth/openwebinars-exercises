<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prácticas PHP</title>
</head>
<body>
    <?php 

        $dias = array("Lunes","Martes","Miércoles","Jueves","Viernes","Sábado","Domingo");

        var_dump($dias);
        echo "<br>";

        sort ($dias);
        var_dump($dias);
        echo "<br>";
        
    ?>
</body>
</html>
