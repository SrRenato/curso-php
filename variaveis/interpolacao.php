<div class="titulo"> Interpolacao</div>

<?php

$numero = 10;
echo $numero;

echo '<br> $numero';
echo "<br> $numero + 1";

$texto = "Sua note e: $numero";

echo "<br>$texto";

$objeto = 'caneta';
echo " <br> Eu tenho 5 $objetos"; // variavel nao aparece
echo " <br> Eu tenho 5 {$objeto}s"; // variavel aparece 