<?php 
	echo "Người mua:" . $_SESSION["name"] . "<br>";
	echo  "Số điên thoai:" . $_SESSION["numberPhone"] ." <br>";
	echo $"ngày sinh:" . $_SESSION["birthday"] "<br>";
	if ( empty($_SESSION["sanpham"])) {
		echo "không có sản phẩm nào được mua";
	}else{
		foreach ($_SESSION["sanpham"] as $key => $value) {
			echo "sanpham" . $key . "Giá" . $value.
			$value += $value;
			
		}
	}
?>