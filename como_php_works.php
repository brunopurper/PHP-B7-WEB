<?php

echo "<p>Apache recebe uma requesição</p>";
echo "<p>Mando para o local correto</p>";
echo "<p>Chama o PHP para interpretar o código</p>";
echo "<p>O PHP manda o resultado para o Apache</p>";
echo "<p>O Apache junta com o que não é interpretável e manda para o usuário.</p>";
echo "<p>=========================================</p>";

$x = 10;
echo "O nuemro $x + 2 é igual a: ". $x + 2;

$nome = "Bruno";
$sobrenome = "Purper";

echo "<br>";

echo $nome . " " . $sobrenome;

