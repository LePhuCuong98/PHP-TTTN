<?php
//ket thua layout1.php de load vao day
$this->fileLayout = "Views/Backend/Layout1.php";
?>
<div class="col-md-12">

    <div style="margin-bottom:5px;">
        <a href="index.php?area=backend&controller=Cart&action=sent&id=<?php echo $id; ?>" class="btn btn-primary">Xác nhận đã giao hàng</a>
    </div>
    <div class="panel panel-primary">
        <div class="panel-heading">Chi tiết đơn hàng</div>
        <div class="panel-body">
            <table class="table table-bordered table-hover">
                <tr>
                    <th>Ảnh</th>
                    <th>Tên sản phẩm</th>
                    <th>Giá</th>
                    <th>Số lượng</th>
                </tr>
                <?php foreach($data as $rows): ?>
                    <tr>
                        <td style="width: 100%;"><img src="Assets/upload/product/<?php echo $rows->img; ?> " style="width: 100px;"> </td>
                        <td><?php echo $rows->name; ?></td>
                        <th><?php echo number_format($rows->price); ?></th>
                        <th><?php echo $rows->number; ?></th>
                    </tr>
                <?php endforeach; ?>
            </table>
            <style type="text/css">
                .pagination{padding:0px; margin:0px;}
            </style>
            <ul class="pagination">
                <li class="page-item disabled">
                    <a href="#" class="page-link">Trang</a>
                </li>
                <?php for($i = 1; $i <= $numPage; $i++): ?>
                    <li class="page-item">
                        <a href="index.php?area=backend&controller=User&p=<?php echo $i; ?>" class="page-link"><?php echo $i; ?></a>
                    </li>
                <?php endfor; ?>
            </ul>
        </div>
    </div>
</div>