
<?php
	include "./admincp/modules/config.php";
    $conn = mysqli_connect($servername, $username, $password, $database);
	$sql="select * from products ";
	$sanpham=mysqli_query($conn, $sql);
?>
<p class="loai">Tất cả sản phẩm</p>
<ul>

<?php
while($row=mysqli_fetch_array($sanpham)){
?>
             <li><a href="#">
                <?php
					echo '<img src="admincp/modules/sanpham/uploads/'.$row['product_image'].'" width="120" height="150"/>';
					?>
                    <p class="name">Tên sản phẩm: <?php echo $row['product_title'] ?></p>
                    <p class="price">Giá:<?php echo $row['product_price'] ?>$</p>
                    <p style="color:#900;margin-left:20px;margin-top:5px;"><a href="index.php?xem=chitiet&id=<?php echo $row['product_id'] ?>" style="color:#09C;">Chi tiết</p></a>
                 
                </a></li>
               
            <?php
}
			?>
            <div class="clear"></div>
           
            </ul>
          