<?php
	include "./admincp/modules/config.php";
	if(isset($_GET['id'])){
		$tam=$_GET['id'];
	}else{
		$tam='';
		}
		$sql="delete from cart where id='$tam'";
		mysqli_query($conn, $sql);
		header('location:../../index.php?quanly=donhang&ac=lietke');
?>