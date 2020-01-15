<?php
   include "Models/Frontend/CategoryModel.php";
   class CategoryController extends Controller{
       use CategoryModel;
       public function index(){
           //lay du lieu tu model
           $data = $this->getAll();
           $this->renderHTML("Views/Frontend/categoryView.php",array("data"=>$data));
       }
   }
?>