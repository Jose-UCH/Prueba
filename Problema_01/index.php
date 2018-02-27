<!DOCTYPE html>
<html>
<head>
	<title>Problema 01</title>
</head>
<body>

<?php

include_once "Class.php";

$model = new ChangeString();

echo "Entrada = **Casa 52zzZZth";
echo "<br>";
echo "Salida = ".$model->build("**Casa 52zzZZth");

?>

</body>
</html>