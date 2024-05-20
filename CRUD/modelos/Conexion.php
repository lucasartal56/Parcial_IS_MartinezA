<?php
$conn = null;

try {
    $conn = new PDO("informix:host=host.docker.internal; service=9088;database=tienda; server=informix; protocol=onsoctcp;EnableScrollableCursors=1", "informix", "in4mix");
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "conexion";
    
} catch (PDOException $e) {
    echo "no hay conexion de PDO";
    echo "<br>";
    echo $e->getMessage();
}
