<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
        if(isset($_GET['operacao']) && isset($_GET['n1']) && isset($_GET['n2'])){
            if($_GET['operacao'] == "adicao"){
                echo $_GET['n1'] + $_GET['n2'];
            }else if($_GET['operacao'] == "multiplicacao"){
                echo $_GET['n1'] * $_GET['n2'];
            }else if($_GET['operacao'] == "subtracao"){
                echo $_GET['n1'] - $_GET['n2'];
            }else{
                echo $_GET['n1'] / $_GET['n2'];
            }
        }
    ?>
</body>
</html>