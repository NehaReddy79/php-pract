<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action = "index.php" method = "post">
        <input type="radio" name="f1" value="mercedes">Mercedes<br>
        <input type="radio" name="f1" value="rb">RedBull<br>
        <input type="radio" name="f1" value="vcarb">VCARB<br>
        <input type="radio" name="f1" value="mcl">Mclaren<br>
        <input type="submit" name="confirm" value ="Submit"><br>
    </form>
</body>
</html>

<?php 
    if(isset($_POST["confirm"])){

        if(isset($_POST["f1"])){
            $f1 = $_POST["f1"];
            echo $f1 . "<br>";

            if($f1 == "mercedes"){
                echo "You sel merc <br>";
            }elseif($f1 == "rb"){
                echo "You sel redbull <br>";
            }elseif($f1 == "vcarb"){
                echo "You sel vcarb <br>";
            }elseif($f1 == "mcl"){
                echo "You sel mcl <br>";
            }
        }
        
    }
    
        
?>