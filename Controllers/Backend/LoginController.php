<?php 
	//include file model
	include "Models/Backend/LoginModel.php";
	class LoginController extends Controller{
		//su dung class LoginModel
		use LoginModel;
		public function index(){
			//load view
			$this->renderHTML("Views/Backend/LoginView.php");
		}
		//khi an nut submit
		public function doLogin(){
			//goi ham lay 1 ban ghi tu class model
			$record = $this->modelFetch();
			if(isset($record->email)){
				//gan session email
				$_SESSION["email"] = $record->email;				
			}
			//quay tro lai trang index.php?controller=Backend
			header("location:index.php?area=Backend");
		}
	}
 ?>