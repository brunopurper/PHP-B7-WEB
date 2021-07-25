<?php
function sub(){
    for ($r=1; $r<=10; $r++){
        echo "</br>";
        for($i=1; $i<=10; $i++ ){
            echo "-";
        }   
    }
}

// Função flecha

$somar = fn($n1,$n2) => $n1 + $n2;
