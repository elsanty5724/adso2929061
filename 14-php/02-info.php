<?php 
    $title       = '02- PHP Info';
    $description = 'Show all information of PHP';

    include 'plantilla/header.php';

    echo "<section style='width: 100%'>";
    phpinfo();
    
    include 'plantilla/footer.php';