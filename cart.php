<?php 
	session_start();
	$total = 0;
	echo "Người mua:" . $_SESSION["name"] . "<br>";
	echo  "Số điên thoai:" . $_SESSION["numberPhone"] ." <br>";
	echo "ngày sinh:" . $_SESSION["birthday"] . "<br>";
	if ( empty($_SESSION["sanpham"])) {
		echo "không có sản phẩm nào được mua" . "<br>";
	}else{
		foreach ($_SESSION["sanpham"] as $key => $value) {
			echo "sanpham" . $key . "Giá" . $value . "<br>";
			$total = $value;
			$total += $value;
		}
		
		
	}
	echo "tông tiền:" . $total;
?>
