<?php 
echo "<br>";
$AmazonProducts = array(
    array("Código"=> "Livro", "Descrição" =>"Livros", "Preço" => 50),
    array("Código"=> "DVDs", "Descrição" =>"Filme", "Preço" => 15),
    array("Código"=> "CDs", "Descrição" =>"Música", "Preço" => 20)
);
for ($linha = 0; $linha <3; $linha++){
    ?>
    <p> 
    | <?= $AmazonProducts [$linha] ["Código"]?>
    | <?= $AmazonProducts [$linha] ["Descrição"]?>
    | <?= $AmazonProducts [$linha] ["Preço"]?>
    </p>
<?php
}

?>