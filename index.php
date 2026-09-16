<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="index.php" method="post">
        username : <br>
        <input type = "text" name="username"><br>
        age : <br>
        <input type = "text" name="age"><br>
        <input type="submit" name="login" value="login">
    </form>
</body>
</html>

<?php 
    if(isset($_POST["login"])){

        // $user = filter_input(INPUT_POST , "username" , FILTER_SANITIZE_SPECIAL_CHARS);
        // echo "Helo {$user} <br>";
        // $age = filter_input(INPUT_POST , "age" , FILTER_SANITIZE_NUMBER_INT);
        // echo "You are {$age} <br>";

        $age = filter_input(INPUT_POST , "age" , FILTER_VALIDATE_INT);
        if(empty($age)){
            echo "Invalid , enter int only <br>";
        }else{
            echo "You are {$age} <br>";
        }
    }
    
?>