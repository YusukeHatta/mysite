<?php

$x = $_GET["x"];
$y = $_GET["y"];
$z = $_GET["z"];

$pdo = new PDO("mysql:host=localhost;dbname=rol;charset=utf8", "rol", "rol",array(PDO::ATTR_EMULATE_PREPARES => false));

$stmt = $pdo->prepare("INSERT INTO evaluation_log (rol_serial_number, x, y, z, time) VALUES (:rol_serial_number, :x, :y, :z, CURRENT_TIMESTAMP)");
$stmt->bindValue(":rol_serial_number", "1", PDO::PARAM_STR);
$stmt->bindParam(":x", $x, PDO::PARAM_INT);
$stmt->bindParam(":y", $y, PDO::PARAM_INT);
$stmt->bindParam(":z", $z, PDO::PARAM_INT);

$stmt->execute();
