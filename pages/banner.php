<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>


<?php
$tukhoa = '(Hot)';
$sql_pro = "SELECT * FROM tbl_sanpham, tbl_danhmuc WHERE tbl_sanpham.id_danhmuc=tbl_danhmuc.id_danhmuc AND tbl_sanpham.tensanpham LIKE '%" . $tukhoa . "%'";
$query_pro = mysqli_query($mysqli, $sql_pro);
?>

<div class="banner">
    <div class="banner-title">
        Những Sản Phẩm Hot trong tháng
    </div>
    <div class="banner-list owl-carousel">
        <?php while ($row = mysqli_fetch_array($query_pro)) { ?>
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
                            <div class="old-price">
                                <del>
                                    <?php if ($row['sale'] > 0) {
                                        echo number_format($row['giasp'], 0, ',', '.') . ' vnđ';
                                    } ?>
                                </del>
                            </div>
                        </div>
                        <div class="btn-buy">
                            <button> <a href="index.php?quanly=sanpham&id=<?php echo $row['id_sanpham'] ?>"> Mua Ngay </a></button>
                        </div>
                    </div>
                </div>
            </div>
        <?php } ?>
    </div>
</div>


<script>
    $(document).ready(function(){
        $('.banner-list').owlCarousel({
            items: 1, // Chỉ hiển thị một item mỗi lần
            loop: true, // Lặp lại sau khi đến cuối
            autoplay: true, // Tự động chuyển đổi
            autoplayTimeout: 3000, // Thời gian chuyển đổi (milliseconds)
            autoplayHoverPause: true, // Tạm dừng tự động chuyển đổi khi di chuột vào
            autoplaySpeed: 2000, // Tốc độ chuyển đổi (milliseconds)
            margin: 20, // Khoảng cách giữa các phần tử
            responsive: {
                0: {
                    items: 1
                },
                600: {
                    items: 1
                },
                1000: {
                    items: 1
                }
            }
        });
    });
</script>
