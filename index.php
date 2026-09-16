<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="index.php" method="post">
        <label>radius : </label>
        <input type="text" name="r">
        <input type="submit" value="total">
    </form>
</body>
</html>

<?php 
    
    // $x = $_POST["x"];
    // echo "{$x} <br>";
    // $total = abs($x);
    // echo "{$total} <br>";
    // $total = round($x);
    // echo "{$total} <br>";
    // $total = ceil($x);
    // echo "{$total} <br>";
    // $total = floor($x);
    // echo "{$total} <br>";
    // $total = pow($x , $x);
    // echo "{$total} <br>";
    // echo "{$abs($x)} <br>";
    $r  = $_POST["r"];
    echo "Radius {$r} <br>";
    $area = pi() * $r * $r;
    $circ = 2* pi() * $r;
    $vol = (4 * pi() * $r)/3;
    
    echo "Area {$area} <br>";
    echo "circ {$circ} <br>";
    echo "vol {$vol} <br>";
?>