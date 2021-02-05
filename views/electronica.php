<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css"
                           integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf"
                           crossorigin="anonymous">
    <link rel="stylesheet" href="../styles.css">
    <script src="../controller/functions.js"></script>
    <title>Informatica</title>
</head>
<body>
    <?php
        include_once('../controller/menu.php');

        echo dibujarMenu('electronica');
    ?>
    <div class="container">
        <h1>Categoría de Electrónica</h1>
        <div class="product-container">
            <?php 
                include_once('../controller/functions.php');
                
                $funcion = new FunctionsPHP();
                
                echo $funcion->dibujarProductosCategoria('electronica');
            ?>
        </div>

        <script>
            let funciones = new FunctionsJS();
        </script>
    </div>    
</body>
</html>