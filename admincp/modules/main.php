<div class="clear"></div>
<div class="main1">

	<?php

				if(isset($_GET['action']) && $_GET['query']){
					$tam = $_GET['action'];
					$query = $_GET['query'];
				}else{
					$tam = '';
					$query = '';
				}
				if($tam=='quanlydanhmucsanpham' && $query=='them'){
					include("modules/quanlydanhmucsp/them.php");
					include("modules/quanlydanhmucsp/lietke.php");

				}elseif ($tam=='quanlydanhmucsanpham' && $query=='sua') {
					include("modules/quanlydanhmucsp/sua.php");

				}elseif($tam=='quanlydanhmucthuonghieu' && $query=='them'){
					include("modules/quanlyband/them.php");
					include("modules/quanlyband/lietke.php");

				}elseif($tam=='quanlydanhmucthuonghieu' && $query=='sua'){
					include("modules/quanlyband/sua.php");

				}
				
				
				elseif ($tam=='quanlysp' && $query=='them') {
					include("modules/quanlysp/them.php");
					include("modules/quanlysp/lietke.php");

				}elseif($tam=='quanlysp' && $query=='sua'){
					include("modules/quanlysp/sua.php");

				}elseif($tam=='quanlydonhang' && $query=='lietke'){
					include("modules/quanlydonhang/lietke.php");

				}elseif($tam=='donhang' && $query=='xemdonhang'){
					include("modules/quanlydonhang/xemdonhang.php");

				}elseif($tam=='quanlydanhmucbaiviet' && $query=='them'){
					include("modules/quanlydanhmucbaiviet/them.php");
					include("modules/quanlydanhmucbaiviet/lietke.php");

				}elseif($tam=='quanlydanhmucbaiviet' && $query=='sua'){
					include("modules/quanlydanhmucbaiviet/sua.php");

				}elseif($tam=='quanlybaiviet' && $query=='them'){
					include("modules/quanlybaiviet/them.php");
					include("modules/quanlybaiviet/lietke.php");
					
				}elseif($tam=='quanlybaiviet' && $query=='sua'){
					include("modules/quanlybaiviet/sua.php");
				}
				elseif($tam=='quanlyweb' && $query=='capnhat'){
					include("modules/thongtinweb/quanly.php");
				}
				
				else{
					include("modules/dashboard.php");
				}
	?> 
	
</div>

<style>
	.main1{
		
		width: 80% !important;
		background-color: #fff;
		padding: 10px;
	}
</style>