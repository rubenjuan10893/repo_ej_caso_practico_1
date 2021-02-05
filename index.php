<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css"
                           integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf"
                           crossorigin="anonymous">
    <title>Caso Practico 1</title>
</head>
<body>
    <?php 
        include_once('./controller/menu.php');

        echo dibujarMenu('inicio');
    ?>

    <div style="width: 100%;">
        <span style="text-align: center;">
            <h3>Navega entre nuestras páginas para encontrar nuestros productos y así poder comprarlos añadiendolo al carrito de la compra!!</h3>
        </span>
    </div>
</body>
</html>