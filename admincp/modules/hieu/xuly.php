<?php
	$servername = "localhost";
	$database = "banhang";
	$username = "penguyenee";
	$password = "nguyen12";
	// Create connection
	$conn = mysqli_connect($servername, $username, $password, $database);
		$loai=$_POST['loai'];
		$id=$_GET['id'];
	if(isset($_POST['them'])){
		//them
		
		$sql="insert into hieu(tenhieu) value('$hieu')";
		mysqli_query($conn, $sql);
		header('location:../../index.php?quanly=hieu&ac=them');
	}elseif(isset($_POST['sua'])){
		//sua
		$sql="update hieu set tenhieu='$hieu' where hieu_id='$id'";
		mysqli_query($conn, $sql);
		header('location:../../index.php?quanly=hieu&ac=sua&id='.$id);
	}else{
	//xóa
	$sql="delete from hieu where hieu_id='$id'";
	mysqli_query($conn, $sql);
	header('location:../../index.php?quanly=hieu&ac=them');
	}
?>