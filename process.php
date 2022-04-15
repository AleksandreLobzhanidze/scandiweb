<?php

// Includes
include_once "db.php";
include_once "controller.php";

// To get information after clicking button save in add products to add information in data base
if(isset($_POST['save'])){
    $type = $_POST['select'];
    $mb = $_POST['mb'];
    $kg = $_POST['kg'];
    $height = $_POST['height'];
    $width = $_POST['width'];
    $length = $_POST['length'];
    $sku = $_POST['sku'];
    $name = $_POST['name'];
    $price = $_POST['price'];
    $contr = new Contr();
    $contr->setInfo($sku,$name,$price,$type,$mb,$kg,$height,$width,$length);
    header("location:index.php?error=None_Product_Registred");

}


// To delete checked product from data base
if(isset($_POST['delete'])){
    $checkbox = $_POST['check'];
    for($i = 0; $i < count($checkbox); $i++){
        $delCheckId = $checkbox[$i];
        $delete = new DeleteProducts();
        $delete->delete($delCheckId);
    }
}

// To delete all information from data base
if(isset($_POST['deleteAll'])){
    $delete = new DeleteProducts();
    $delete->deleteAll();
}