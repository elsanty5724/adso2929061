<?php 
    $title       = '27- File Text';
    $description = 'Is used to open a file or URL.';

    include 'plantilla/header.php';

    echo "<section>";

    $file = fopen('text/lorem.txt', 'r') 
    or exit("Can't open!");

    while (!feof($file)) {
        echo fgets($file);
    }
    fclose($file);
?>
    <br><br>
    <div class="msg">
    <?php 
        $file = fopen('text/lorem.txt', 'r') 
        or exit("Can't open!");

        while (!feof($file)) {
            echo fgetc($file).'🐘';
        }
        fclose($file);

    include 'plantilla/footer.php'; 