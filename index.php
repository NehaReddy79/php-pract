
<?php 
    
    // $capital = array(
    //     "usa" => "dc",
    //     "india" => "delhi",
    //     "china" => "beijing",
    //     "monaco" => "monaco"
    // );
    // echo $capital["usa"] . "<br>";

    // foreach($capital as $key => $val ){
    //     echo "{$key} = {$val} <br>";
    // }

    $username = "user";
    if(isset($username)){
        echo "This is set <br>";
    }else{
        echo "This is not set <br>";
    }

    $username = false;
    if(empty($username)){
        echo "This is empty <br>";
    }else{
        echo "This is not empty <br>";
    }

    $username = null;
    if(empty($username)){
        echo "This is empty <br>";
    }else{
        echo "This is not empty <br>";
    }

    $username ;
    if(empty($username)){
        echo "This is empty <br>";
    }else{
        echo "This is not empty <br>";
    }
        
?>