<?php
$info = "r\nThe ballad of reading Goal";
$info = "r\nOscar wilde 1898";


$filename = 'info.txt';

$filestream = fopen($filename, 'w') or die ('unable to open file');
$num = fwrite($filestream, $info);
if ($num){
    echo "<p>$num bytes writen to $filename</p>";
}
fclose($filestream);
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>
        <p>OUTPUT FROM BODY</P>
    </body>
</html>