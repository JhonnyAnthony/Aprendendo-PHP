<?php 
$vogais = array ("a", "e", "i", "o", "u","A", "E", "I", "O", "U");
echo "Hello World of PHP<br>";
$cons = str_replace($vogais, "", "Hello World of PHP");
echo "Consoantes:". $cons, "<br>";
// 
$test = "Hello World \n";
print "Posição da letra 'o' : ";
print strpos($test, "o"). "<br>";
print "Posição da letra 'o' após 5ª : ";
print strpos($test, "o", 5). "<hr>";
$message = "Troca letra uma a uma";
echo $message. "<br>";
$new_message = strtr($message, 'abcdef' , '123456');
echo "Criptografando: ".$new_message."<br>";
$new_message = strtr($message, '123456', 'abcdefg');
echo "Descriptografando: ".$new_message. "<br>";

?>