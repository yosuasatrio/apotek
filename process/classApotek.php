<?php
	session_start();
	include "conn.php";
	
	class classApotek
	{
	
		public function register($nama,$email,$password,$no_telp,$alamat)
		{
			try {
				$db = getDB();
				$encryptpassword= md5($password);
				$stmt = $db->prepare("INSERT INTO member(id_member, nama, email, password, no_telp, alamat) VALUES(NULL,:nama, :email, :password, :no_telp, :alamat)"); 
				$stmt->bindParam("nama", $nama,PDO::PARAM_STR);
				$stmt->bindParam("email", $email,PDO::PARAM_STR) ;
				$stmt->bindParam("password", $encryptpassword,PDO::PARAM_STR) ;
				$stmt->bindParam("no_telp", $no_telp,PDO::PARAM_STR);
				$stmt->bindParam("alamat", $alamat,PDO::PARAM_STR) ;
				$stmt->execute();
				$db = null;
				return true;
				
			} catch (PDOException $e) {
				echo '{"error":{"text":'. $e->getMessage() .'}}';
			}
		}
		public function userLogin($email,$password)
		{
			try {
				$db = getDB();
				$hash_password= md5($password); //Password encryption
				$stmt = $db->prepare("SELECT * FROM member WHERE email=:email AND password=:hash_password"); 
				$stmt->bindParam(":email", $email,PDO::PARAM_STR) ;
				$stmt->bindParam(":hash_password", $hash_password,PDO::PARAM_STR) ;
				$stmt->execute();
				$count=$stmt->rowCount();
				$data=$stmt->fetch(PDO::FETCH_OBJ);
				$db = null;
				if ($count) {
					return $data;
				} else {
					return false;
				}
				
			} catch (PDOException $e) {
				echo '<script> alert("'. $e->getMessage() .'");</script>"';
			}
		}
	}
?>