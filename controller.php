<?php

include_once "typeFunctions.php";

class Contr extends Db{

    public function setInfo($sku,$name,$price,$type,$mb,$kg,$height,$width,$length){
        if(empty($sku) || empty($name) || empty($price)){

            header("location:addproduct.php?error=Empty_Input");
            exit();

        }
        productTypeInfo($type,$mb,$kg,$height,$width,$length);
        $stmt = $this->connect()->prepare("INSERT INTO crud(sku,name,price,type,mb,kg,height,width,length)VALUES(?,?,?,?,?,?,?,?,?);");
        if(!$stmt->execute(array($sku,$name,$price,$type,$mb,$kg,$height,$width,$length))){
            header("location:index.php?error=STMT_Failed");
            exit();
            $stmt = null;
        }
        $stmt = null;
        
    }



}

class Show extends Contr{
   
    public function showUser(){
        $st = $this->connect()->prepare("SELECT * FROM crud");
        $st->execute();
        $st = $st->fetchAll();
        
        return $st;
    }

}


class DeleteProducts extends Contr{

    public function deleteAll(){
        $stmt = $this->connect()->prepare("DELETE FROM crud");
        $stmt->execute();
        header("location:index.php?error=All_Info_Deleted");
        
    }

    public function delete($x){
            $stmt = $this->connect()->prepare("DELETE FROM crud WHERE id=? ");
            $stmt->execute(array($x));
            header("location:index.php?error=Info_Deleted");
        }
}


