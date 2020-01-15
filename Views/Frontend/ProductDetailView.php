<!-- load file layout vao day -->
<?php
$this->fileLayout = "Views/Frontend/Layout_trangtrong.php";
?>
<?php if(isset($record->id)): ?>
<div class="product-detail" itemscope itemtype="http://schema.org/Product">
    <meta itemprop="url" content="//dktstore-theme.bizwebvietnam.net/microsoft-lumia-950-xl-mau-den">
    <meta itemprop="image" content="Assets/upload/product/<?php echo $record->img; ?>">
    <meta itemprop="shop-currency" content="VND">
    <div class="top">
        <div class="row">
            <div class="col-xs-12 col-md-6 product-image">
                <div class="featured-image"> <img src="Assets/upload/product/<?php echo $record->img; ?>" class="img-responsive" id="large-image" itemprop="image" data-zoom-image="Assets/upload/product/<?php echo $record->img; ?>"

                                                  alt="<?php echo $record->name; ?>"
                    /> </div>
            </div>
            <div class="col-xs-12 col-md-6 info">
                <h1 itemprop="name">Thông tin sản phẩm</h1>

                <p itemprop="price" class="price-box product-price-box"> <span class="special-price"> <span class="price product-price"> <?php echo number_format($record->price); ?>d </span> </span> </p>
                <p class="desc rte"> <?php echo $record->description; ?></p>
<!--                <form action="/cart/add" method="post" enctype="multipart/form-data" class="product-form">-->

<!--                    <div class="action-btn">-->
                        <a href="index.php?controller=Cart&action=add&id=<?php echo $record->id; ?>" class="btn btn-success">Cho vào giỏ hàng</a>
<!--                    </div>-->
<!--                </form>-->
            </div>
        </div>
    </div>
    <div class="middle">
        <ul class="list-unstyled navtabs">
            <li><a href="#tab1" class="head-tabs head-tab1 active" data-src=".head-tab1">Chi tiết sản phẩm</a></li>
        </ul>
        <div class="tab-container">
            <!-- chi tiet -->
            <div id="tab1" class="content-tabs">
                <div class="rte">
                    <?php echo $record->content; ?>
                </div>
            </div>
            <!-- chi tiet -->
        </div>
    </div>
</div>
<?php endif; ?>

