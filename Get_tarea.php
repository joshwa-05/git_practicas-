<?php
if (isset($_GET['palabra1']) && isset($_GET['palabra2'])) {
    echo "no todo lo que ". $_GET['palabra1']. " es " . $_GET['palabra2'] ;
}else {
    echo "no se escribio ningun nombre ";
}
?>