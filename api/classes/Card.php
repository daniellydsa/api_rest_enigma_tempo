<?php
require_once "./connectDB.php"; 

	class Card
	{

		public function getById($idCard){
      $id = $idCard[0];
      $sql = "SELECT * FROM card WHERE id = $id";
      echo ($sql);
      return executeQuery($sql);
    }

		public function getAll()
		{
			$sql = "SELECT * FROM card ORDER BY id ASC";
			return executeQuery($sql);
		}
	}