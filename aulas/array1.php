<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php  
    $a = array ();
    $a[0] = 23;
    echo $a[0];
    echo "<br>";
    $a2 = array("Algumas", "strings", "estão", "em", "array");
    $a2[] = "Ooh!";
    echo $a2[5];
    /////////////////////////////////////////
    $dias = array('domingo','segunda','terça','quarta','quinta','sexta','sabado');
    echo $dias[1]. "<br>";
    echo "<br>";
    print_r($dias);
    echo "<br>";
    echo "<br>";
    var_dump($dias);
    ?>
</body>
</html>