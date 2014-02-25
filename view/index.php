<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Rutas Canarias</title>
    </head>
    <body>
        <?php
            require '../process/ExampleNumberLoader.php';
            $var = new ExampleNumberLoader();
            echo $var->load();
            echo "<h1>Página principal</h1>";
        ?>
    </body>
</html>
