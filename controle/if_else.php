<div class="titulo">IF ELSE</div>

<?php


if (true)

    echo "Sentenca avulsa!!! <br>"; {
    echo "Serei impresso?<br>";
    echo "Serei impresso novamente?<br><br>";
}


if (false) {
    echo "Verdadeiro - Parte A<br>";
    echo "Verdadeiro - Parte B<br>";
} else {
    echo "Falso - Parte A<br>";
    echo "Falso - Parte B<br>";
}
echo "Fim<br>";


if (false) {
    echo "Passo A<br>";
} else if (false) {
    echo "Ultimo B<br>";
} else if (true) {
    echo "Ultimo C<br>";
} else {
    echo "Ultimo Passo<br>";
}

echo "Fim<br>";