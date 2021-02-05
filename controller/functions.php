<?php 
    class FunctionsPHP {
        private $cantidad = 0;

        function dibujarProductosCategoria($categoria) {
            $data = file_get_contents("../data.json");
            $productos = json_decode($data);

            foreach($productos as $producto) {
                if ($producto->categoria === $categoria) {
                    $html .= "<div class=\"product\">";
                    $html .= "  <div class=\"titulo-producto\">";
                    $html .= "      <h4>$producto->nombre</h4>";
                    $html .= "  </div>";
                    $html .= "  <div class=\"content-product\">";
                    $html .= "      <img width=\"150\" height=\"150\" src=\"$producto->imageUrl\">";
                    $html .= "  </div>";
                    $html .= "  <button type=\"button\" class=\"btn_seleccionar\" value='".json_encode($producto)."'>Seleccionar</button>";
                    $html .= "</div>";

                    
                }
            }

            return $html;
        }

        function seleccionarProducto($value) {
            echo json_encode($value);
        }

        function formulario($producto) {
            echo print_r($producto);
        }
    }
    

?>