<?php

// This functions checkes if type values are empty or not and return them

function productTypeInfo($type,$mb,$kg,$height,$width,$length){
    if($type === 'select'){
        header("location:addproduct.php?select=Empty_Type");
        exit();
    }else if($type === 'dvd'){
        if(empty($mb)){
            header("location:addproduct.php?mb=Empty_Type_Value");
            exit();
        }else{
            $mb = $mb;
            return $mb;
        }
    }else if($type === 'book'){
        if(empty($kg)){
            header("location:addproduct.php?kg=Empty_Type_Value");
            exit();
        }else{
            $kg = $kg;
            return $kg;
        }
    }
    else if($type === "furniture"){
        furnitureInfo($height,$width,$length);
    }
}

function furnitureInfo($height,$width,$length){
    if(empty($height) || empty($width) || empty($length)){
        header("location:addproduct.php?error=Empty_Furniture_Values");
        exit();
    }else{
        $height = $height;
        $width = $width;
        $length = $length;
        return $height;
        return $width;
        return $length;
    }
}