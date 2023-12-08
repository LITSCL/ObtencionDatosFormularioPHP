<?php
if (isset($_GET["nombre"])) {
    $nombre = $_GET["nombre"];
    echo $nombre;
}

if (isset($_GET["boton"])) {
    $boton = $_GET["boton"];
    echo "<br>" . $boton;
}

if (isset($_GET["pais"])) {
    $pais = $_GET["pais"];
    echo "<br>" . $pais;
}

if (isset($_GET["paises"])) {
    echo "<br>";
    foreach($_GET["paises"] as $clave => $valor) {
        echo $valor . "   ";
    }
}

if (isset($_GET["santiago"])) {
    echo "<br>" . $_GET["santiago"];
}

if (isset($_GET["lima"])) {
    echo "<br>" . $_GET["lima"];
}

if (isset($_GET["laPaz"])) {
    echo "<br>" . $_GET["laPaz"];
}
?>