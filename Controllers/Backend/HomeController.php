<?php 
	//controller mac dinh khi controller khong truyen tren url
	class HomeController extends Controller{		
		//ham tao
		public function __construct(){
			//xac thuc dang nhap
			$this->authentication();
		}
		//action mac dinh khi action khong truyen tren url
		public function index(){
			//goi view
			$this->renderHTML("Views/Backend/HomeView.php");
		}		
	}
 ?>