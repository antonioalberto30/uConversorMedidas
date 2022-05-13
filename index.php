<?php
//Fahrenheit to celsius
function fahrenheit_to_celsius($valor)
{
    $celsius=5/9*($valor-32);
    return $celsius ;
}

function celsius_to_fahrenheit($valor)
{
    $fahrenheit=$valor*9/5+32;
    return $fahrenheit ;
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
    <style>
        .column {
            float: left;
            width: 33.33%;
        }

        /* Clear floats after the columns */
        .row:after {
            content: "";
            display: table;
            clear: both;
        }
    </style>
</head>
<body>
<div class="row">
    <div class="column"><p></p></div>
    <div class="column"></div>
    <form method="post">
        <label for="tempF" >Temperatura</label>
        <label>
            <input type="number" name="valor" required>
        </label>
        <label>
            <select name="opcao">
                <option value="F">Fahrenheit</option>
                <option value="C">Celsius</option>
            </select>
        </label>
        <input type="submit" name="btn" value="Converter">
    </form>

    <?php if(isset($_POST['btn']))
    {

        $opcao=$_POST['opcao'];
        $valor=$_POST['valor'];

//Fahrenheit to celsius
        if ($opcao == 'F') {

            $celsius = fahrenheit_to_celsius($valor);
            echo "$valor Fahrenheit = $celsius Celsius";
        }

//Celsius to fahrenheit
        if ($opcao == 'C') {
            $fahrenheit = celsius_to_fahrenheit($valor);
            echo "$valor Celsius  = $fahrenheit Fahrenheit";
        }
    }?>
    <div class="column"></div>
</div>
</body>
</html>