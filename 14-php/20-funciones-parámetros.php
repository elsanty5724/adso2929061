<?php 
    $title       = '20- Functions with Params';
    $description = 'A function that accepts input values to perform its specific task.';

    include 'plantilla/header.php';

    echo "<section>";

    function calculateProduct($num1, $num2 = 5) {
        echo "$num1 * $num2 equals: " . ($num1 * $num2) . "<br>" ;
    }

    calculateProduct(4, 10);
    calculateProduct(6);
    calculateProduct(64, 4);

    include 'plantilla/footer.php'; 