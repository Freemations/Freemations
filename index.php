<?php
$banner = $_GET['banner'];
// Enlaces que queremos disimular
$link[1] = "https://www.freemations.ga/index.html";
$link[2] = "https://www.freemations.ga/Categorias.html";
$link[3] = "https://www.freemations.ga/Proyecto.html";
header("HTTP/1.1 301 Moved Permanently");
header("Location: $link[$banner]");
header("Connection: close");
?>
