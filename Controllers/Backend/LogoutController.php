<?php 
	class LogoutController{
		public function index(){
			//huy cac gia tri
			unset($_SESSION["email"]);
			//quay tro ve trang index.php?controller=backend
			header("location:index.php?area=backend");
		}
	}
 ?>