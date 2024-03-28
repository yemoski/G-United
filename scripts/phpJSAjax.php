<?php

session_start();

require_once "../../dbConfig.php";

if(isset($_GET['category']) && isset($_GET['itemType'])) {
    try{
        $pdo = new PDO($connString, DB_USER, DB_PASSWORD);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        
        $sql = "SELECT item FROM grocerycategories where category = ? and subcategory = ?";
        $statement = $pdo -> prepare($sql);
        $statement -> execute([$_GET['category'], $_GET['itemType']]);
        
        $results = "";
        while ($row = $statement -> fetch()) {
            $results .= "<option value='".$row['item']."'>".$row['item']."</option>";
        }

        echo $results;
        
        $pdo = null;
    }catch (PDOException $e) {
        die( $e->getMessage());
    }
} else if (isset($_GET['category'])) {
    try{
        $pdo = new PDO($connString, DB_USER, DB_PASSWORD);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        
        $sql = "SELECT subcategory FROM grocerycategories where category = ? GROUP BY subcategory";
        $statement = $pdo -> prepare($sql);
        $statement -> execute([$_GET['category']]);
        
        $results = "";
        while ($row = $statement -> fetch()) {
            $results .= "<option value='".$row['subcategory']."'>".$row['subcategory']."</option>";
        }

        echo $results;
        
        $pdo = null;
    }catch (PDOException $e){
        die( $e->getMessage());
    }
}  else if (isset($_GET['storeName'])) {
    try{
        $pdo = new PDO($connString, DB_USER, DB_PASSWORD);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        
        $sql = "SELECT storeName FROM grocerystores where storeName LIKE ?";
        $statement = $pdo -> prepare($sql);
        $statement -> execute(['%'. $_GET['storeName'].'%']);
        
        $results = "";
        while ($row = $statement -> fetch()) {
            $results .= "<option value='".$row['storeName']."'>".$row['storeName']."</option>";
        }

        echo $results;
        
        $pdo = null;
    }catch (PDOException $e){
        die( $e->getMessage());
    }
}  else if (isset($_GET['search'])) {
    try{
        $pdo = new PDO($connString, DB_USER, DB_PASSWORD);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        
        $results = "";

        if(empty($_GET['search'])) {
            $sql = "SELECT DISTINCT category FROM grocerycategories";
            $statement = $pdo -> prepare($sql);
            $statement -> execute();
            
            while ($row = $statement -> fetch()) {
                $results .= "<p>".$row['category']."</p>";
            }
            echo $results;
        }else {
            $param = $_GET['search'];
            $sql = "SELECT * FROM products JOIN grocerycategories on products.categoryid = grocerycategories.id 
            JOIN grocerystores ON storeid = grocerystores.id WHERE category LIKE ? or subcategory LIKE ? 
            or item LIKE ? or itemName LIKE ? or town like ? or province LIKE ? or storeName LIKE ?";
            $statement = $pdo -> prepare($sql);
            $statement -> execute(['%'.$param.'%','%'.$param.'%','%'.$param.'%','%'.$param.'%','%'.$param.'%','%'.$param.'%','%'.$param.'%',]);

            $rows_array = $statement->fetchAll(PDO::FETCH_ASSOC);
            $json_data = json_encode($rows_array);

            echo $json_data;
        }
        
    }catch (PDOException $e){
        die( $e->getMessage());
    }finally {
        $pdo = null;
    }
} else if(isset($_POST['action']) && $_POST['action'] === "filter") {
    $filterValuesMap = isset($_POST['filterValuesMap']) ? $_POST['filterValuesMap'] : [];
    
    try{
        $pdo = new PDO($connString, DB_USER, DB_PASSWORD);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        
        $whereConditions = array();

        foreach ($filterValuesMap as $columnName => $selectedValues) {
            if (!empty($selectedValues)) {
                $param = "'" . implode("', '", $selectedValues) . "'";
                $whereConditions[] = "$columnName IN ($param)";
            }
        }

        if (!empty($filterValuesMap)) {
            $whereClause = implode(' AND ', $whereConditions);
            $sql = "SELECT * FROM products JOIN grocerycategories on products.categoryid = grocerycategories.id 
            JOIN grocerystores ON storeid = grocerystores.id WHERE $whereClause";
        } else {
            $sql = "SELECT * FROM products JOIN grocerycategories on products.categoryid = grocerycategories.id 
            JOIN grocerystores ON storeid = grocerystores.id";
        }
        
        $statement = $pdo -> prepare($sql);
        $statement -> execute();
        $rows_array = $statement->fetchAll(PDO::FETCH_ASSOC);
        $json_data = json_encode($rows_array);
        
        echo $json_data;
    }catch (PDOException $e){
        die( $e->getMessage());
    }finally {
        $pdo = null;
    }
} 

?>