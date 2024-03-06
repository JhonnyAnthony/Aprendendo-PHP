<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        p{
            color:blue;
        }
        .resposta{
            color:red;
        }
    </style>
</head>
<body>
    <form action="multi.php" method="GET">
        <p>Insira um número A <input type="number" name="a" required></p>
        <p><input type="submit"></p>
    </form>
    <?php 
    if (isset ($_GET['a'])){
        $a = $_GET['a'];
        for ($i=1;$i<=10;$i++){
            $r = $a*$i;
            echo "<p class='resposta'> $a x $i = $r </p>";
        }
    }
    ?>
</body>
</html>