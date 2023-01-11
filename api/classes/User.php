<?php
  require_once "./connectDB.php";
  class User
	{

    public function getById($idUser){
      $id = $idUser[0];
      $sql = "SELECT * FROM user WHERE id = $id";
      echo ($sql);
      return executeQuery($sql);
    }

		public function getAll()
		{
			$sql = "SELECT * FROM user ORDER BY id ASC";
			return executeQuery($sql);
		}
	}
?>