<?php
    
    require_once('./Server.php');

    function upload_image($file, $folder) 
    { 
     $name = (string)uniqid() . $file['name']; 
     copy($file['tmp_name'], "./$folder/$name"); 
     return $name; 
    }

   $fileName =  upload_image($_FILES['file'], '../assets/product_Images');

    $query = $pdo->prepare("INSERT INTO `dishes`(`Name`, ID_Category, `Description`, 
    `Price`, `Dishes_img`, `additional`, `cooking_in_minutes`, weight_product) 
    VALUES (?,?,?,?,?,?, 60, ?)");

    $query->execute(array(
        $_POST['title'],
        1,
        $_POST['description'],
        $_POST['price'],
        $fileName,
        $_POST['additional'],
        $_POST['weight']
    ));

    echo 1;
    $result = $query->fetchAll(PDO::FETCH_ASSOC);