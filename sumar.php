<!DOCTYPE html>
<html>
<head>
	<title>Resultado de suma PHP - Vilchez</title>
</head>
<body>
    <?php
    $valor1 = $_POST['T1'];
    $valor2 = $_POST['T2'];

    $suma = $valor1 + $valor2;

    echo "$valor1 + $valor2 = $suma";
    ?>
</body>
</html>