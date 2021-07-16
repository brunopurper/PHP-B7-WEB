<?php

$lista = [
    "nome" => "Bruno",
    "idade" => "90",
    "atributos" => [
        "forca" => "60", 
        "agilidade" => "90", 
        "destreza" => "50", 
    ],
    
    'vida' => 2000,
    'mana' => 929

];

echo "NOME: " . $lista['nome'] . "</br>";
echo "FORÇA: " . $lista['atributos']['forca'] . "</br>";
echo "VIDA: " . $lista['vida'] . "</br>";
