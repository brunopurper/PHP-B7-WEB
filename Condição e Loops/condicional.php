
<h1>Site adulto</h1>
<h2>Digite sua idade para entrar</h2>
<form action="condicional.php" method="post"> 
    Digite sua idade para acessar o site:
    <input type="text" name="form_idade" > </br> <br>
    <input type="submit">
</form>

<?php

// Condiconais IF e ELSE

$idade = $_POST['form_idade'] ?? null;



if($idade >= 18 ) {
    echo "Você é maior de idade! Possui {$idade}, anos!!";
}else{
    echo"Você é menor de idade, tem apenas {$idade}, é jovem ainda :c";
};

?>