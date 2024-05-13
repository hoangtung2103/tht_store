<?php
	$sql_sua_danhmucband = "SELECT * FROM tbl_band WHERE id_band='$_GET[idband]' LIMIT 1";
	$query_sua_danhmucband = mysqli_query($mysqli,$sql_sua_danhmucband);
?>




<div class="form">
	<h2>Sửa Thương Hiệu</h2>
<div class="table">
 <form method="POST" action="modules/quanlyband/xuly.php?idband=<?php echo $_GET['idband'] ?>">
 <?php
 	while($dong = mysqli_fetch_array($query_sua_danhmucband)) {
 	?>
	  <div class="input1">
         <h3>Tên danh mục</h3>
	  	<input type="text" value="<?php echo $dong['tenband'] ?>" name="tendanhmucband">
	  </div>
	  <div class="input1">
	 
	    <h3>Thứ tự</h3>
	    <input type="text" name="thutu" value="<?php echo $dong['thutu'] ?>">
	  </div>
	<div class="input2">
	<input type="submit" name="suadanhmucband" value="Sửa danh mục band">
	</div>
	<?php
	  } 
	  ?>
 </form>
</div>
</div>


