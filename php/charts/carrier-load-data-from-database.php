<?php
    /* Request the conection with database */
    require "../../connessione/database_pdo_sing.php";

    /* Create the conecttion with database */
    $obj = DatabasePdoClass::getInstance();
    $db = $obj->creaConnessione();

    try {
    /* Query to distinct all carrier */
    $queryCarrier = $db->prepare("SELECT DISTINCT `carrier` FROM `order_items`");
    
    /* Query to count how many time any carrier appears */
    $queryCarrierCount = $db->prepare("SELECT COUNT(*) as total FROM `order_items` WHERE `carrier` = :carrier");
    
    /* Declaring variables as array*/
    $json = array();
    $carriers = array();
    $totals = array();
    /* Declaring variable to use if the quanti is too low */
    $othersCarriers = 'Others: |';
    $othersTotals = 0;
    
    /* Executing the carriers query */
    $queryCarrier->execute();
    $result = $queryCarrier->setFetchMode(PDO::FETCH_ASSOC);
    $rows = $queryCarrier->rowCount();
    
    /* Processing the information to create the arrays */
    if($rows > 0){
        foreach ($queryCarrier->fetchAll() as $carrierKey => $carrierValue) {
            /* varify if any value is null or empty */
            if($carrierValue['carrier'] != '' || $carrierValue['carrier'] != null){
                
                /* Bind and executing the count query */
                $queryCarrierCount->bindValue(":carrier", $carrierValue['carrier']);
                $queryCarrierCount->execute();
                $result = $queryCarrierCount->setFetchMode(PDO::FETCH_ASSOC);
                foreach ($queryCarrierCount->fetchAll() as $countKey => $total){
                    if($total['total'] >= 1000){
                        /* Set values if value id bigger then 1000 */
                        $carriers[] = $carrierValue['carrier'];
                        $totals[] = $total['total'];
                    } else {
                        /* Set other if value is less than 1000 */
                        $othersCarriers = $othersCarriers.$carrierValue['carrier']."|";
                        $othersTotals += $total['total'];
                    }
                }
            }
        }

        /* Add other if total is bigger then 0 */
        if($othersTotals > 0){
            $carriers[] = $othersCarriers;
            $totals[] = $othersTotals;
        }

        /* Gathering information to create json */
        $json['carriers'] = $carriers;
        $json['totals'] = $totals;
        echo json_encode($json);
    }

    } catch (PDOException $e) {
        /* Get and show error */
        echo ("errore".$e->getMessage());
    }

    /* Close the conection with database */
    $db = null;
?>