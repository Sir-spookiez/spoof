<?php
$filestream = fopen('example.txt.txt', 'r') or die('unable to open from the file');
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>reading from files </title>
    </head>
    <body>
        <?php
        /*while ($char = fgetc($filestream)){
            echo "<p>" . $char . "<p>";
        }*/

        while (!feof($filestream)){
            echo "<p>" . fgets($filestream) . "<p>";
        }
            //echo fread($filestream, filesize('example.txt.txt'));
            fclose($filestream);
            
        ?>
    </body>
</html>