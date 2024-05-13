<?php
	$sql_lietke_danhmucband = "SELECT * FROM tbl_band ORDER BY thutu DESC";
	$query_lietke_danhmucband = mysqli_query($mysqli,$sql_lietke_danhmucband);
?>

<div class="form">
<h2>Liệt kê Thương Hiệu</h2>
<div class="table">
 <div class="table-title">
   <div class="id">ID</div>
   <div class="Tendanhmuc">Tên Thương Hiệu</div>
   <div class="Quanly">Quản Lý</div>
 </div>
  <?php
  $i = 0;
  while($row = mysqli_fetch_array($query_lietke_danhmucband)){
  	$i++;
  ?>
     <div class="table-title">
    <div class="id2"><?php echo $i ?></div>
  	<div class="Tendanhmuc2"><?php echo $row['tenband'] ?></div>
   <div class="Quanly2"><a class="xoa-btn" href="modules/quanlyband/xuly.php?idband=<?php echo $row['id_band'] ?>">Xóa</a>  <a class="sua-btn" href="?action=quanlydanhmucthuonghieu&query=sua&idband=<?php echo $row['id_band'] ?>">Sửa</a> </div>
  </div>
   
  
  <?php
  } 
  ?>
 
</div>
</div>



