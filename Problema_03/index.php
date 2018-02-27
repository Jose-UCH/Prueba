<!DOCTYPE html>
<html>
<head>
	<title>Problema 03</title>
</head>
<body>

<?php

include_once "Class.php";

$model = new ClearPar();

echo "Entrada = ((()";
echo "<br>";
echo "Salida = ".$model->build("((()");

?>

</body>
</html>