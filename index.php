<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>

<?php 
    
    function fun($name){
        echo "Fun {$name} <br>";
        echo "Fun {$name}<br>";
        echo "Fun {$name} <br>";
        echo "Fun {$name}<br>";
        echo "Fun {$name}<br>";
        echo "Fun {$name}<br>";
    }
    fun("lando");
    fun("George");

    function even($n){
        $res = $n % 2;
        if($res == 0){
            return "even <br>";
        }else{
            return "odd <br>";
        }
    }

    $res = even(25);
    echo $res;
    $res = even(40);
    echo $res;
?>