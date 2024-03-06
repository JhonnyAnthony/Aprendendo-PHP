<?php 
if (isset($_GET['a'])&& isset($_GET['b'])){
    $a = $_GET ['a'];
    $b = $_GET ['b'];
    $c = $a + $b;
    echo "Resposta da soma: $c";
}

?>