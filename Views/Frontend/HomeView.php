<!-- load file layout vao day -->
<?php
$this->fileLayout = "Views/Frontend/Layout_trangchu.php";
?>

<div class="special-collection">
    <div class="tabs-container">
        <div class="clearfix">
            <h2>Sản phẩm nổi bật</h2>
        </div>
    </div>
    <div class="tabs-content row">
        <div id="content-tabb1" class="content-tab content-tab-proindex" style="display:none">
            <div class="clearfix">
                <?php
                  $data = $this->productHot();
                ?>
                <?php foreach ($data as $rows): ?>
                <!-- box product -->
                <div class="col-xs-6 col-md-3 col-sm-6 ">
                    <div class="product-grid" id="product-1168979">
                        <div class="image"> <a href="index.php?controller=ProductDetail&id=<?php echo $rows->id; ?>"><img src="Assets/upload/product/<?php echo $rows->img; ?>" title="<?php echo $rows->name ?>" alt="<?php echo $rows->name ?>" class="img-responsive"></a> </div>
                        <div class="info">
                            <h3 class="name"><a href="index.php?controller=ProductDetail&id=<?php echo $rows->id; ?>"><?php echo $rows->name; ?></a></h3>
                            <p class="price-box"> <span class="special-price"> <span class="price product-price"> <?php echo number_format($rows->price); ?> </span> </span> </p>
                            <div class="action-btn">
                                <form action="cart/add" method="post" enctype="multipart/form-data" id="product-actions-1168979">
                                    <a href="index.php?controller=ProductDetail&id=<?php echo $rows->id; ?>" class="button">Cho vào giỏ hàng</a>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <?php endforeach; ?>
                <!-- end box product -->

            </div>
        </div>
    </div>
</div>


<!--san pham moi-->
<div class="wrapper-tab-collections">
    <div class="tabs-container">
        <ul class="list-unstyled">
            <li><a href="#content-taba1" class="head-tabs head-tab1" data-src=".head-tab1">
                    <h2>SẢN PHẨM MỚI</h2>
                </a></li>
        </ul>
    </div>
    <div class="tabs-content row">
        <div id="content-tabb1" class="content-tab content-tab-proindex" style="display:none">
            <div class="clearfix">
                <?php
                $data = $this->productNew();
                ?>
                <?php foreach ($data as $rows): ?>
                    <!-- box product -->
                    <div class="col-xs-6 col-md-3 col-sm-6 ">
                        <div class="product-grid" id="product-1168979">
                            <div class="image"> <a href="index.php?controller=ProductDetail&id=<?php echo $rows->id; ?>"><img src="Assets/upload/product/<?php echo $rows->img; ?>" title="<?php echo $rows->name ?>" alt="<?php echo $rows->name ?>" class="img-responsive"></a> </div>
                            <div class="info">
                                <h3 class="name"><a href="index.php?controller=ProductDetail&id=<?php echo $rows->id; ?>"><?php echo $rows->name; ?></a></h3>
                                <p class="price-box"> <span class="special-price"> <span class="price product-price"> <?php echo number_format($rows->price); ?> </span> </span> </p>
                                <div class="action-btn">
                                    <form action="cart/add" method="post" enctype="multipart/form-data" id="product-actions-1168979">
                                        <a href="index.php?controller=ProductDetail&id=<?php echo $rows->id; ?>" class="button">Cho vào giỏ hàng</a>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
                <!-- end box product -->

            </div>
        </div>
    </div>
</div>
