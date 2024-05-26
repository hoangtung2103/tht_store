<?php
$tukhoa = 'Hot';
$sql_pro = "SELECT * FROM tbl_sanpham,tbl_danhmuc WHERE tbl_sanpham.id_danhmuc=tbl_danhmuc.id_danhmuc AND tbl_sanpham.tensanpham LIKE '%" . $tukhoa . "%'";
$query_pro = mysqli_query($mysqli, $sql_pro);
?>




<div class="banner">
    <div class="banner-title">
        Những Sản Phẩm Hot trong tháng
    </div>
    <div class="banner-list owl-carousel">
        <?php
        while ($row = mysqli_fetch_array($query_pro)) {
            ?>
            <div class="banner_content">

                <div class="banner_content-img">
                    <img src="admincp/modules/quanlysp/uploads/<?php echo $row['hinhanh'] ?>" alt="">
                </div>
                <div class="banner_content-content">
                    <div class="banner-contents">

                        <a href="index.php?quanly=sanpham&id=<?php echo $row['id_sanpham'] ?>">
                            <h3><?php echo $row['tensanpham'] ?></h3>
                        </a>
                        <div class="banner-item-text"><?php echo $row['sanxuat'] ?></div>
                        <div class="box-price">
                            <div class="new-price">
                                <?php
                                if ($row['sale'] > 0) {
                                    echo number_format(($row['giasp'] * (100 - $row['sale'])) / 100, 0, ',', '.') . ' vnđ';
                                } else {
                                    echo number_format($row['giasp'], 0, ',', '.') . ' vnđ';
                                }

                                ?>

                            </div>
                            <div class="old-price"><del>
                                    <?php
                                    if ($row['sale'] > 0) {
                                        echo number_format($row['giasp'], 0, ',', '.') . ' vnđ';
                                    }

                                    ?>
                                </del> </div>
                        </div>
                        <div class="btn-buy">
                            <button> <a href="index.php?quanly=sanpham&id=<?php echo $row['id_sanpham'] ?>"> Buy
                                    Now</a></button>
                        </div>
                    </div>
                </div>
            </div>
            <?php
        }
        ?>

    </div>

</div>