<?php
  require "connessione/database_pdo_sing.php";
    $obj = DatabasePdoClass::getInstance();
    $db = $obj->creaConnessione();
    try {
      $query = $db->prepare("SELECT `id`, `nome` FROM `sell-master`.merchants");
      $query->execute();
      // $result = $query->fetchall();
      
      // echo "<pre>";
      // print_r($result);
      // echo "</pre>";
      
      foreach ($query->fetchAll() as $key => $value) {
        echo "<option value=".$value['id'].">".$value['nome']."</option>";
      }
    } catch (PDOException $e) {
      echo ("errore" . __LINE__ . __FUNCTION__ . $e->getMessage());
      error_log(__LINE__ . __FILE__ . " error on select : " .  $e->getMessage(), 1,  "marcelo.d.schneider@gmail.com");
    }
  // $db = null;
?>