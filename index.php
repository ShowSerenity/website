<?php
    echo"I love pizza <br>";
    echo"It's really good<br>";
    // This is a comment
    /* This
    is
    a
    multiline
    comment
    */
    $name = "Show";
    $food = "Pizza";
    $email = "fake@gmail.com";

    $age = 21;
    $users = 2;
    $quantity = 3;

    $gpa = 4.37;
    $price = 4.99;
    $tax_rate = 5.1;

    $employed = true;
    $online = false;
    $for_sale = true;

    $total = null;

    echo "Hello, my name is {$name}<br>";
    echo "You like {$food}<br>";
    echo "Your email is {$email}<br>";

    echo "You are {$age} years old<br>";
    echo "There are {$users} users online<br>";
    echo "You would like to buy {$quantity} items<br>";

    echo"Your gpa is {$gpa}<br>";
    echo"Your pizza is \${$price} dollars<br>";
    echo"The sales tax rate is {$tax_rate}%<br>";

    echo"Onlien status: {$online}<br>";

    echo"Your hafe ordered {$quantity}x {$food}s<br>";
    $total = $quantity * $price;
    echo"Your total is: \${$total}<br>";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <br>
    <button>order pizza</button>
</body>
</html>