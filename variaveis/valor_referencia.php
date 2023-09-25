<div class="titulo">Valor Referencia</div>

<?php

$variavel = 'valor inicial';

echo $variavel;

// Atribuicao por valor

$variavelValor = $variavel;

echo "<br>" . $variavelValor;

$variavelValor = 'novo valor';
echo "<br>" . $variavel;
echo  " $variavelValor";

// Atribuicao por Referencia

$variavelReferencia = &$variavel;
$variavelReferencia = 'mesma referencia';

echo " <br> $variavel $variavelReferencia";
