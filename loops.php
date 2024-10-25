<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Activity1</h2>
    <?php
    $count=1;
    while($count <=10){
        echo $count. " ";
        $count++;
    }
    ?>
    <!DOCTYPE html>
    <html>
        <head>
            <title>Password Validator</title>
        </head>
    </html>
    <body>
        <form method="post" action=" ">
            <label>Please enter the password:</label>
            <input type="password" name = "password">
            <input type = "submit" value="Submit">
        </form>
    </body>
    <h2>Acitivity2</h2>
    <?php
    $correct_password = "password123";
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $input_password = $_POST['password'];
        if($input_password === $correct_passwordT){
            echo "Access Granted.";
        }else{
            echo "Incorrect password.";
        }
    }
    ?>
    <h2>Activity 3</h2>
    <?php
    for($i = 1; $i <=10; $i++){
        echo "7 x $i = " . (7 * $i) . " ";
    }
    ?>
    <h2>Activity 4</h2>
    <?php
    for($i = 1; $i <= 10; $i++){
        if($i == 5){
            continue;
        }
        if($i == 9){
            break;
        }
        echo $i . " ";
    }
    ?>
    <h2>Activity 5</h2>
    <?php
    $sum = 0;
    $num = 1;

    while($num <= 100){
        $sum += $num;
        $num++;
    }
    ?>
    <h2>Activity 6</h2>
    <?php
    $mov = [" The shawshank Redemption", "Inception", "The Dark knight", "Interstellar","Parasite"];
    $counter = 1;
    foreach($mov as $key => $value){
        echo "$key => $value<br>";
    }
    $counter++;
    ?>
    <h2>Activity 7</h2>
    <?php
    $stud = [
        "Name" => "John",
        "Age" => 21,
        "Grade" => "A",
        "City" => "Baguio"
    ];
    foreach($stud as $Key => $value){
        echo "$key: $value<br>";
    }
    ?>
    <h2>Activity 8</h2>
    <?php
    $num = 5;
    $fac = 1;
    for($i = $num; $i >= 1; $i--){
        $fac*=$i; 
    }
    echo "the factorial of $num is: $fac";
    ?>
    <h2>Activity 9</h2>
    <?php
    for($i = 1; $i <=50; $i++){
        if($i % 3 === 0 && $i % 5 == 0){
            echo "Fizzbuzz";
        }
        elseif($i % 3 == 0){
            echo "Fizz ";
        }
        elseif($i % 5 == 0){
            echo "Buzz";
        }
        else{
            echo $i. " ";
        }
    }
    ?>
    <h2>Activity 10</h2>
    <?php
    if($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['number'])){
        $number = $POST['number'];
        $is_prime = true;
        if($number < 2){
            $is_prime = false;
        } else{
            for ($i =2; $i <= sqrt($number); $i++){
                if($number % $i == 0){
                    $is_prime = false;
                    break;
                }
            }
        }
        if($is_prime){
            echo "$number is a prime number.";
        }else{
            echo "$number is not a prime number.";
        }
    }
    ?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Prime Number Cheacker</title>
    </head>
    <body>
        <form method="post" action=" ">
            <label>Enter a number</label>
            <input type="number" name=""number>
            <input type="submit" value="Check">
        </form>
    </body>
    </html>
    <h2>Activity 11</h2>
    <?php
    $first = 0;
    $second = 1;
    $count = 0;
    $limit = 10;
    while($count < $limit){
        echo $first. " ";
        $next = $first + $second;
        $first = $second;
        $count++;
    }
    ?>
    <h1>Activity 12</h1>
    <?php
    $reversi = readline('input something');
    echo "output:" .strrev($reversi);
    ?>
</body>
</html>