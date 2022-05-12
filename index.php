<?php
$mostrar = false;
$tmpF = 0.0;

if ($opcao == "F"){

 if( isset( $_POST["temp"] ) ) {
    //Fahrenheit to Celsius ° C = 5/9 (° F - 32)
 $tmpI = floatval($_POST["temp"]);
 $tmpF = ($tmpF - 32) * (5 / 9);
 $mostrar = true;
}

}else  if ($opcao == "C"){

 if( isset( $_POST["temp"] ) ) {
 //Celsius to Fahrenheit ° F = 9/5 ( ° C) + 32
 $tmpI = floatval($_POST["temp"]);
 $tmpF = ($tmpF + 32) * (5 / 9);
 $mostrar = true;
}
}

?>
<!doctype html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport"
content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<title>Conversor de temperaturas</title>
</head>
<body>
<form></form>
<form method="post">
<label for="temp" >Temperatura</label>
<input type="number" name="temp" required>


<select name="opcao">
<option value="F">Fahrenheit</option>
<option value="C">Celsius</option>


</select>
<input type="submit" value="Converter">
</form>
<?php if($mostrar) {?>
<h1>Resultado da conversão:</h1>
<p><?php echo $tmpF ?> ºC</p>
<?php } ?>
</body>
</html>


//Celsius to Fahrenheit ° F = 9/5 ( ° C) + 32
//Fahrenheit to Celsius ° C = 5/9 (° F - 32)
//Celsius to Kelvin K = ° C + 273.15
//Kelvin to Celsius ° C = K - 273.15
//Fahrenheit to Kelvin K = 5/9 (° F - 32) + 273.15
//Kelvin to Fahrenheit 	° F = 9/5 (K - 273.15) + 32