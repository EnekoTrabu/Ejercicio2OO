<?php

include "includes/cabecera.php";
include "clases/NsDanza.php";

use NsDanza\Actividad as Actividad;
use NsDanza\Baile as Baile;

$actividad = new Actividad(1, "Exposición Zuloaga", date('d/m/Y', mktime(28, 12, 2019)), "Sala de Armas");
$baile = new Baile(2, "Master Class", date('d/m/Y', mktime(27, 12, 2019)), "Estudio Patri Beltrán", "Juan Medina", 42);
$actividad->mostrar();
echo "<br>";
$baile->mostrar();
echo "<br>";
$actividad->setDescripcion("Denominacion de Origen Navarro");
$actividad->setLugar("Baluarte");
$actividad->setFecha(date('d/m/Y', mktime(30, 12, 2019)));
$actividad->mostrar();

include "includes/pie.php";
