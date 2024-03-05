<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style type="text/css">
        .linhas{
            font-family: Arial;
            color: red;
        }
    </style>
</head>
<body>
    <div class="linhas">
        <?php    
            for ($a=0; $a<10;$a++)
            echo"Vamos fazer algumas linhas $a <br>"          
?>
<p>Paragrafo extra</p>
    </div>
    <p>fora da div</p>
</body>
</html>