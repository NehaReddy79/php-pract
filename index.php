
<?php 
    
   $foods = array("apple","orange","banana","coco");
   for($i = 0 ; $i < 4; $i++){
        echo "{$foods[$i]} <br>"; 
   }
    array_push($foods, "grapes" , "kiwi");
    array_pop($foods);
   echo "Using for each loop <br> ";
    foreach($foods as $food){
        echo $food . "<br>";
    }

    echo "reverse food <br>";
    $rever = array_reverse($foods);
     foreach($rever as $food){
        echo $food . "<br>";
    }
    echo $foods[3] . "<br>";
    echo count($foods);
?>