<div class="main1 main-lh">
	<p id="lien_he">Liên hệ :</p>
	<?php
	$sql_lh = "SELECT * FROM tbl_lienhe WHERE id=1";
	$query_lh = mysqli_query($mysqli, $sql_lh);
	?>

	<?php
	while ($dong = mysqli_fetch_array($query_lh)) {
		?>
		<p><?php echo $dong['thongtinlienhe'] ?></p>

	<?php
	}
	?>
</div>

<style>
	.main-lh {
		padding: 20px;
		border-radius: 20px;

	}

	#lien_he {
		font-size: 20px;
		font-weight: bold;
	}
</style>