<?php

$mostrar = false;
$tempF = 0.0;
$conversao = 0;

if (isset($_POST['btnConverter'])){
    $temp = $_POST['temp'];
    $tipoConvert = $_POST['tipoConvert'];

    if ($tipoConvert == "f"){
        $conversao = ($temp - 32) * (5/9);
    } else if ($tipoConvert == "c"){
        $conversao = ((9/5)*$temp) + (32);
    }
    $mostrar = true;

}
?>
</div>
<?php if($mostrar) {?>
    <h1>Resultado da conversão:</h1>
    <p><?php echo $tmpC ?> ºC</p>
<?php }
?>


