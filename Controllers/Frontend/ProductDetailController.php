<?php
include "Models/Frontend/ProductModel.php";
class ProductDetailController extends Controller{
    use ProductModel;
    public function index(){
        $id = isset($_GET["id"])&&is_numeric($_GET["id"])?$_GET["id"]:0;
        //lay du lieu tu model
        $record = $this->fetchOne($id);
        $this->renderHTML("Views/Frontend/ProductDetailView.php",array("record"=>$record));
    }
}
?>