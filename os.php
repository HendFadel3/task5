<?php
$jsonData =   file_get_contents("http://shopping.marwaradwan.org/api/Products/1/1/0/100/atoz");
     
$dataArray = json_decode($jsonData,true);
foreach($dataArray['data'] as $key=> $value)

{

$file=fopen("prod.txt",’a') or die("cant op");
    $p1=($value ['products_id']);
    $p2=($value ['products_quantity']);
    $p3=($value ['products_model']);
    $p4=($value ['products_image']);
    $p5=($value['products_date_added']);
   $p6=($value ['products_name']);
   fwrite($file , "(ProId==>)".$p1."    (prodQ==>)".$p2."    (prodMo==>)".$p2."    (prodImg==>)".$p3."    (proDat==>)".$p4."    (ProdName==>)".$p5."\n");
   

        fclose($file);
    

   
            
            
             
        
}  
    header('Location:datafil.php');    
     
//var_dump($dataArray);

?>
