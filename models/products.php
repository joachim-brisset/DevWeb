<?php

require_once "variables.php";

class Product {

    /**
     * <p> Get all info about all product. </p>
     * @return array <p> return a array of associative array about the product </p>
     */
    public static function all() {
        $db = new PDO('mysql:host=localhost;dbname=' . Variables::MYSQL_DATABASE, Variables::MYSQL_USER , Variables::MYSQL_PASS);

        $req = $db->prepare("SELECT * FROM products");
        $req->setFetchMode(PDO::FETCH_ASSOC);

        $req->execute();
        return $req->fetchAll();
    }

    public static function withBrand($brand){
        $db = new PDO('mysql:host=localhost;dbname=' . Variables::MYSQL_DATABASE, Variables::MYSQL_USER , Variables::MYSQL_PASS);

        $req = $db->prepare("SELECT * FROM products WHERE brand = :brand");
        $req->setFetchMode(PDO::FETCH_ASSOC);
        $req->bindParam(":brand", $brand, PDO::PARAM_STR);

        $req->execute();
        return $req->fetchAll();
    }
}