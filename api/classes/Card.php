<?php
require_once "./connectDB.php"; 

	class Card
	{
		//http://localhost/api_rest_enigma_tempo/api/card/getById/id
		public function getById($idCard){
			$id = $idCard[0];
      $sql = "SELECT * FROM card WHERE id = $id";
      echo ($sql);
      return executeQuery($sql);
    }
		
		//http://localhost/api_rest_enigma_tempo/api/card/getAll
		public function getAll()
		{
			$sql = "SELECT * FROM card ORDER BY id ASC";
			return executeQuery($sql);
		}
	}