<?php
$file=fopen("prod.txt","r") or die("can't");
$p=0;
while (!feof($file) && $p=25 ){
    
    
    echo fgets($file,filesize("prod.txt")).'<br>';
    $p++;

}
fclose($file);

?>
