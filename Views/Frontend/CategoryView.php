<aside class="aside-category">
    <h3><i class="fa fa-bars"></i>&nbsp;&nbsp; Danh mục sản phẩm</h3>
    <ul class="list-unstyled">
        <?php
          foreach ($data as $rows):
        ?>
        <li><a href="index.php?controller=ProductCategory&id=<?php echo $rows->id; ?>"><?php echo $rows->name;
                ?>
                </a></li>
        <?php
        endforeach;
        ?>
    </ul>
</aside>