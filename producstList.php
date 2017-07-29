<?php 
	$sanPham1 =array("iphone"=>1000);
	$sanPham2=array("samsung"=>2000);
	$sanPham3 =array("htc"=>3000);
	$sanPham4 =array("oppo"=>4000);
	$sanPham5 =array("sony"=>5000);
	$sanPham6 =array("LG"=>6000);
	if (!empty($_POST["submit_1"])){
		addarray($_SESSION["sanpham"],$sanPham1);
	}
	if (!empty($_POST["submit_2"])){
		addarray($_SESSION["sanpham"],$sanPham2);
	}
	if (!empty($_POST["submit_3"])){
		addarray($_SESSION["sanpham"],$sanPham3);
	}
	if (!empty($_POST["submit_4"])){
		addarray($_SESSION["sanpham"],$sanPham4);
	}
	if (!empty($_POST["submit_5"])){
		addarray($_SESSION["sanpham"],$sanPham5);
	}
	if (!empty($_POST["submit_6"])){
		addarray($_SESSION["sanpham"],$sanPham6);
	}
function addarray(&$sanpham=array(),$array=array()){
	 $x = array_unshift($sanpham,$array);
}
?>
<!DOCTYPE HTML>
<html>
<head>
<meta charset="UTF-8">
<style>
body {
	padding:10px;
	margin:10px 0px 10px 70px;
}
.rows1 {
	padding:10px;
	margin:5px;
	float: left;
}
.rows2 {
	float: left;
	padding:10px;
	margin:5px;
}
img {
	width:350px ;
	height:380px;
}
div {
	text-align:center;
}
</style>
</head>
<body>

<form  class="rows1" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"])?>">
<img src="img/1.jpg" >
<div>
<p>Sản Phẩm: iphone</p>
<p>Giá: 1000</p>
<input type="submit" value="submit" name="submit_1">
</div>
</form>

<form  class="rows1" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"])?>">
<img src="img/2.png" >
<div>
<p>Sản Phẩm: samsung</p>
<p>Giá: 2000 </p>
<input type="submit" value="submit" name="submit_2">
</div>
</form>

<form class="rows1" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"])?>">
<img src="img/3.png" >
<div>
<p>Sản Phẩm: htc</p>
<p>Giá: 3000</p>
<input type="submit" value="submit" name="submit_3">
</div>
</form>

<form class="rows2" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"])?>">
<img src="img/4.jpg" >
<div>
<p>Sản Phẩm: oppo </p>
<p>Giá:4000</p>
<input type="submit" value="submit" name="submit_4">
</div>
</form>

<form class="rows2" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"])?>">
<img src="img/5.jpg" >
<div>
<p>Sản Phẩm: sony </p>
<p>Giá:5000</p>
<input type="submit" value="submit" name="submit_5">
</div>
</form>

<form class="rows2" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"])?>">
<img src="img/6.jpg" >
<div>
<p>Sản Phẩm: LG</p>
<p>Giá: 6000</p>
<input type="submit" value="submit" name="submit_6">
</div>
</form>
<div>
<a href="http://localhost:8888/php/btphp/cart.php"><button> danh sach mua do</button></a>
</div>
</body>
</html>
<?php  

?>