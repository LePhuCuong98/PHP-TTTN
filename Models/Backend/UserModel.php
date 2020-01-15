<?php 
	trait UserModel{
		//lay danh sach cac ban ghi: tu ban ghi nao den ban ghi nao
		public function fetchAll($from, $pageSize){
			//lay bien ket noi csdl
			$conn = Connection::getInstance();
			//thuc thi truy van
			$query = $conn->query("select * from tbl_user order by id desc limit $from, $pageSize");
			//lay tat ca ket qua tra ve
			return $query->fetchAll();
		}
		//tinh tong so luong ban ghi
		public function totalRecord(){
			//lay bien ket noi csdl
			$conn = Connection::getInstance();
			//thuc thi truy van
			$query = $conn->query("select id from tbl_user");
			//tra ve tong so luong ban ghi
			return $query->rowCount();
		}
		//lay mot ban ghi
		public function fetch($id){
			//lay bien ket noi csdl
			$conn = Connection::getInstance();
			//chuan bi truy van
			$query = $conn->prepare("select * from tbl_user where id=:id");
			//thuc thi truy van
			$query->execute(array("id"=>$id));
			//tra ve tong so luong ban ghi
			return $query->fetch();
		}
		//update ban ghi
		public function update($id){
			$name = $_POST["name"];
			$password = $_POST["password"];
			//update ban ghi
			//lay bien ket noi csdl
			$conn = Connection::getInstance();
			//chuan bi truy van
			$query = $conn->prepare("update tbl_user set name=:name where id=:id");
			//thuc thi truy van
			$query->execute(array("id"=>$id,"name"=>$name));
			//neu password khong rong thi update password
			if($password != ""){
				//ma hoa password bang ham md5
				$password = md5($password);
				//update truong password
				//chuan bi truy van
				$query = $conn->prepare("update tbl_user set password=:pass where id=:id");
				//thuc thi truy van
				$query->execute(array("id"=>$id,"pass"=>$password));
			}
		}
		//insert ban ghi
		public function insert(){
			$name = $_POST["name"];
			$password = $_POST["password"];
			//ma hoa password
			$password = md5($password);
			$email = $_POST["email"];
			//update ban ghi
			//lay bien ket noi csdl
			$conn = Connection::getInstance();
			//chuan bi truy van
			$query = $conn->prepare("insert into tbl_user set name=:name, email=:email, password=:password");
			//thuc thi truy van
			$query->execute(array("name"=>$name,"email"=>$email,"password"=>$password));			
		}
		//delete
		public function deleteUser($id){
			//lay bien ket noi csdl
			$conn = Connection::getInstance();
			//chuan bi truy van
			$query = $conn->prepare("delete from tbl_user where id=:id");
			//thuc thi truy van
			$query->execute(array("id"=>$id));
		}
	}
 ?>