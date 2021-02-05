<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../styles.css">
    <title>Carrito</title>
</head>
<body>
    <?php 
        $cantidad = $_POST["cantidad"];
        $productoSeleccionado = $_POST["productoSeleccionado"];

        setcookie("cantidad[".$cantidad."]", "$productoSeleccionado", time()+(60*60*24));
    ?>
    <div class="container">
        <div>
            <span>
                <h1>Productos añadidos al carrito</h1>
            </span>
            <span>
                <a id="url">Volver Atrás</a>
                <script>
                    let urlPrevia = document.referrer;
                    let link = document.getElementById('url');
                    link.href = urlPrevia;
                </script>
            </span>
        </div>
        <div class="product-container">
            <?php 
                foreach($_COOKIE as $clave => $valor) {
                    foreach($valor as $cant => $prod) {
                        $valorDecoded =  json_decode($prod);
                        echo "<div class='product'>";
                        echo "  <div class='titulo-producto'>";
                        echo "      <h4>$valorDecoded->nombre</h4>";
                        echo "  </div>";
                        echo "  <div class='content-product'>";
                        echo "      <img width='150' height='150' src=\"$valorDecoded->imageUrl\">";
                        echo "      <div>";
                        echo "          <span>Nº de Unidades: $cant</span>";
                        echo "      </div>";
                        echo "  </div>";
                        echo "</div>";
                    }
                }
            ?>
        </div>    
    </div>
</body>
</html>

