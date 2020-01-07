<html>
<head>
<title>Problema</title>
</head>
<body>

<form action="proceso_impuesto.php" method="post">
Ingrese su nombre:
<input type="text" name="nombre">
<br>
<select name="ingresos">
<option value="bajos">1-1000</option>
<option value="medios">1001-3000</option>
<option value="altos">+3000</option>
</select>
<br>
<input type="submit" name="enviar">
</form>

</body>
</html>
