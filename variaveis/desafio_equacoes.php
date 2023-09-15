<div class="titulo">Desafio Equacao</div>

<?php

$var6 = 6;
$var3 = 3;
$var2 = 2;
$var1 = 1;
$var5 = 5;
$var7 = 7;
$var10 = 10;


$varEQ1 = ($var6 * ($var3 + $var2)) ** $var2;

$varEQ1resultado = $varEQ1 / ($var3 * $var2);


$varEQ1resultado;

$varEQ2 = (($var1 - $var5) * ($var2 - $var7)) ** $var2;
$varEQ2resultado = $varEQ2 / ($var2 ** 2);


$varResposta = (($varEQ1resultado - $varEQ2resultado) ** 3) / ($var10 ** $var3);

echo "RESULTADO FINAL " . $varResposta . '.';
