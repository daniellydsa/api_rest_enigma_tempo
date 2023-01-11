<?php
  function executeQuery($sql){
    $con = new PDO('mysql: host=localhost; dbname=enigmatempo;','root','');
    $sql = $con->prepare($sql);
    $sql->execute();

    $resultados = array();

    while($row = $sql->fetch(PDO::FETCH_ASSOC)) {
      $resultados[] = $row;
    }

    if (!$resultados) {
      throw new Exception("Nenhum dado encontrado!");
    }
    
    return $resultados;
  }
?>