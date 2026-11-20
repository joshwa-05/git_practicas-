<?php
if (isset($_GET['nombre'])) {
    echo "Hola, ". $_GET['nombre'];
}else {
    echo "no se recibio ningun nombre";
}
?>  