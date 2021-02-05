<?php 
    function dibujarMenu($pagina) {
        if ($pagina !== 'inicio') {
            $listaMenu = "<li>
                            <a href=\"../index.php\">Inicio</a>
                          </li>";
            $listaMenu .= "
                        <li>
                            <a href=\"electronica.php\">Electrónica</a>
                        </li>
                        <li>
                            <a href=\"libros.php\">Libros</a>
                        </li>
                        <li>
                            <a href=\"informatica.php\">Informática</a>
                        </li>
                        <li>
                            <a href=\"consolas-videojuegos.php\">Consolas/Videojuegos</a>
                        </li>";
        } else {
            $listaMenu = "
                        <li>
                            <a href=\"views/electronica.php\">Electrónica</a>
                        </li>
                        <li>
                            <a href=\"views/libros.php\">Libros</a>
                        </li>
                        <li>
                            <a href=\"views/informatica.php\">Informática</a>
                        </li>
                        <li>
                            <a href=\"views/consolas-videojuegos.php\">Consolas/Videojuegos</a>
                        </li>";
        }

        $html = "<div style=\"border: 1px solid black; 
                                width: 100%; 
                                display:flex; 
                                justify-content: flex-end;\">
                    <i class=\"fas fa-cart-arrow-down fa-2x\" style=\"padding: 10px;\"></i>
                 </div>
                 <nav style=\"border: 1px solid black;
                                width: 100%;
                                margin-top: 2%;
                                display: flex;
                                justify-content: center;\">
                    <ul style=\"list-style: none; 
                                display: flex;
                                justify-content: space-around;
                                width: 100%;\">";
        $html .= $listaMenu;
        $html .= "  </ul>";
        $html .= "</nav>";

        return $html;
    }   
?>
