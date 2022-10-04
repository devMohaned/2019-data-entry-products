<?php
include ("db_config.php");

 $title = $_GET['title'];
 $description = $_GET['description'];
 $brand = $_GET['brand'];
 $old_price = $_GET['old_price'];
 $current_price = $_GET['Xcurrent_price'];
 $product_image = $_GET['product_image'];
 $product_link = $_GET['product_link'];
 $category = 'Rams';

 $time = time() * 1000;

$sql = "INSERT INTO amazon_affiliate_table (title,description,brand,old_price,current_price,time,product_image,product_link,category) VALUES (:title,:description,:brand,:old_price,:current_price,:time,:product_image,:product_link,:category)";


$stmt = $con->prepare ($sql);
    
    $stmt->execute(array(
        'title' => $title,
        'description' => $description,
        'brand' => $brand,
        'old_price' => $old_price,
        'current_price' =>$current_price,
        'time' => $time,
        'product_image' => $product_image,
        'product_link' => $product_link,
        'category' => $category
            )
);



$con = null;


?>
