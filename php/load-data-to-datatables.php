<?php
    $dateStart = $_POST['ds'];
    $dateEnd = $_POST['de'];
    // $azienda = $_POST['a'];
    // $marketplace = $_POST['m'];    
    
    require "../connessione/database_pdo_sing.php";
        $obj = DatabasePdoClass::getInstance();
        $db = $obj->creaConnessione();

        try {

        $query = $db->prepare("SELECT sellersku, orderitemid, amazonorderid, DATE(`cronstamp`) as `date`, 
        title, quantityordered, productinfo_numberofitems, conditionid, itemprice_amount, 
        carrier, shippingprice_amount, tracking_number
        FROM `sell-master`.`order_items` 
        WHERE DATE(`cronstamp`) BETWEEN :dataStart AND :dataEnd");
        $query->bindValue(":dataStart", $dateStart);
        $query->bindValue(":dataEnd", $dateEnd);

        $query->execute();
        $result = $query->setFetchMode(PDO::FETCH_ASSOC);
        $rows = $query->rowCount();
        
        $allData = array();
        $data = array();
        if($rows > 0){
            foreach ($query->fetchAll() as $key => $value) {
                $data[$key] = $value;
                $allData[] = $value;
            }
            echo json_encode($allData);
        } else {
            $allData['result'] = 'is empty';  
            echo json_encode($allData);
        }

        } catch (PDOException $e) {
        echo ("errore" . __LINE__ . __FUNCTION__ . $e->getMessage());
        error_log(__LINE__ . __FILE__ . " error on select : " .  $e->getMessage(), 1,  "marcelo.d.schneider@gmail.com");
        }
    $db = null;
?>