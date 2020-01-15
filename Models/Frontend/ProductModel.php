<?php
  trait ProductModel{
      //lay mot ban ghi
      public function fetchOne($id){
          $conn = Connection::getInstance();
          $query = $conn->prepare("select * from tbl_product where id=:id");
          $query->execute(array("id"=>$id));
          //tra ve mot ban ghi
          return $query->fetch();
      }
      //lay danh sach cac ban ghi: tu ban ghi nao den ban ghi nao
      public function fetchAll($from, $pageSize){
          $id = isset($_GET["id"])&&is_numeric($_GET["id"])?$_GET["id"]:0;
          //lay bien ket noi csdl
          $conn = Connection::getInstance();
          //thuc thi truy van
          $query = $conn->query("select * from tbl_product where category_id=$id order by id desc limit $from, $pageSize");
          //lay tat ca ket qua tra ve
          return $query->fetchAll();
      }
      //tinh tong so luong ban ghi
      public function totalRecord(){
          $id = isset($_GET["id"])&&is_numeric($_GET["id"])?$_GET["id"]:0;
          //lay bien ket noi csdl
          $conn = Connection::getInstance();
          //thuc thi truy van
          $query = $conn->query("select id from tbl_product where category_id=$id");
          //tra ve tong so luong ban ghi
          return $query->rowCount();
      }
  }
?>