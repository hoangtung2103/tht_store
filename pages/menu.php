
<?php
  $sql_danhmuc = "SELECT * FROM tbl_danhmuc ORDER BY id_danhmuc DESC";
 $query_danhmuc = mysqli_query($mysqli,$sql_danhmuc);

 $sql_danhmuc2 = "SELECT * FROM tbl_band ORDER BY id_band DESC";
 $query_danhmuc2 = mysqli_query($mysqli,$sql_danhmuc2);
	if(isset($_GET['dangxuat'])&&$_GET['dangxuat']==1){
		unset($_SESSION['dangky']);
	} 
?>
<div class="header2">
                  <div class="header2-content">
                <ul class="header-ul-left">
                    <li class="header-li"><a href="index.php?quanly=home"><i class="fas fa-home"></i></a></li>
                    <div class="item-has-dropdown">
                    <li class="header-li"><a href="#">Danh Mục Sản Phẩm</a></li>
                    <ul class="header-li-contents">
                    <li class="header-li-content-item"><a href="index.php?quanly=all-sp">Tất cả Sản Phẩm</a></li>
                    <?php 
				     while($row_danhmuc = mysqli_fetch_array($query_danhmuc)){
				    ?>
				      <li class="header-li-content-item"><a href="index.php?quanly=danhmucsanpham&id=<?php echo $row_danhmuc['id_danhmuc'] ?>"><?php echo $row_danhmuc['tendanhmuc'] ?></a></li>
				    <?php
				    } 
				    ?>
            
                     

                      </ul>
                    </div>

                    <div class="item-has-dropdown">
                    <li class="header-li"><a href="#">Thương Hiệu</a></li>
                    <ul class="header-li-contents">
                    
                    <?php 
				     while($row_danhmuc2 = mysqli_fetch_array($query_danhmuc2)){
				    ?>
				      <li class="header-li-content-item"><a href="index.php?quanly=danhmucband&id=<?php echo $row_danhmuc2['id_band'] ?>"><?php echo $row_danhmuc2['tenband'] ?></a></li>
				    <?php
				    } 
				    ?>
            
                     

                      </ul>
                    </div>

                    
                    <li class="header-li"><a href="index.php?quanly=giohang">Giỏ Hàng</a></li>
                    <li class="header-li"><a href="index.php?quanly=tintuc">Tin Tức</a></li>
                    <li class="header-li"><a href="index.php?quanly=lienhe">Liên Hệ</a></li>
                    
                </ul>
                <ul class=" header-ul-left">

                <?php
				if(isset($_SESSION['dangky'])){ 

				?>
                <li class="header-li"><a>
                <?php
                    if(isset($_SESSION['dangky'])){
                    echo '<li class="header-li">'.$_SESSION['dangky'].'</li>';
   
                    } 
                ?>
               </a> </li>
				<li class="header-li"><a href="index.php?dangxuat=1">Đăng xuất</a></li>
				
				<?php
				}else{ 
				?>
                <li class="header-li"><a href="index.php?quanly=dangnhap">Đăng Nhập</a></li>
				<li class="header-li"><a href="index.php?quanly=dangky">Đăng ký</a></li>
				<?php
				} 
				?>

                </ul></div>
            </div>
            
          