<?php 
	$this->fileLayout = "views/frontend/layout_trangtrong.php";
 ?>
 <div class="col-md-8 col-md-offset-2" style="margin-top: 30px;">
 	<form method="post" action="index.php?controller=Cart&action=doCheckOut">
 		<div class="panel panel-primary">
 			<div class="panel-heading">Thanh toán giỏ hàng</div>
 			<div class="panel-body">
	 		<!-- row -->
		 	<div class="row" style="margin-bottom: 5px;">
		 		<div class="col-md-2">Họ tên</div>
		 		<div class="col-md-10"><input type="text" required name="fullname" class="form-control"></div>
		 	</div>
		 	<!-- end row -->
		 	<!-- row -->
		 	<div class="row" style="margin-bottom: 5px;">
		 		<div class="col-md-2">Email</div>
		 		<div class="col-md-10"><input type="text" required name="email" class="form-control"></div>
		 	</div>
		 	<!-- end row -->
		 	<!-- row -->
		 	<div class="row" style="margin-bottom: 5px;">
		 		<div class="col-md-2">Địa chỉ</div>
		 		<div class="col-md-10"><input type="text" required name="address" class="form-control"></div>
		 	</div>
		 	<!-- end row -->
		 	<!-- row -->
		 	<div class="row" style="margin-bottom: 5px;">
		 		<div class="col-md-2">Điện thoại</div>
		 		<div class="col-md-10"><input type="text" required name="phone" class="form-control"></div>
		 	</div>
		 	<!-- end row -->
		 	<!-- row -->
		 	<div class="row" style="margin-bottom: 5px;">
		 		<div class="col-md-2"></div>
		 		<div class="col-md-10"><input type="submit" value="Thanh toán" class="btn btn-primary"> <input type="reset" value="Viết lại" class="btn btn-danger"></div>
		 	</div>
		 	<!-- end row -->
		 	</div>
		 </div>
 	</form>
 </div>