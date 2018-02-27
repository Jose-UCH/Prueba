<!DOCTYPE html>
<html>
<head>
	<title>Problema 02</title>
</head>
<body>

<?php

include_once "Class.php";

$model = new CompleteRange();

echo "[55, 58, 60]";
echo "<br>";
echo $resultado = $model->build("[55, 58, 60]");

?>

</body>
</html>