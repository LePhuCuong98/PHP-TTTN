<?php 
	//ket noi csdl
	class Connection{
		//ham ket noi csdl, tra ve bien ket noi
		public static function getInstance(){
			//ket noi csdl, tra ve bien ket noi
			$conn = new PDO("mysql:host=localhost;dbname=pro","root","");
			//set charset de lay du lieu theo kieu unicode
			$conn->exec("set names 'utf8'");
			//dat che do lay du lieu mac dinh: object hoac array hoac assoc
			$conn->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE,PDO::FETCH_OBJ);
			return $conn;
		}
	}
	//Connection::getInstance();	/
 ?>