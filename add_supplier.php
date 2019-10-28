<?php 
	session_start();
	error_reporting(E_PARSE);
	include 'sql_conn.php';
	if (isset($_SESSION['account']) && $_SESSION['user_group']=="admin") { //Kiểm tra có login hay chưa, nếu có thì biết $_SESSION sẽ có giá trị là tài khoản vừa nhập
		if ($_GET['name']!="" && $_GET['phone']!="" && $_GET['address']!="") {
			$addQuery = "INSERT INTO supplier (name, address, phone, material, unit, costs, quantity, remain) value ('".trim($_GET["name"])."', '".trim($_GET["address"])."', '".$_GET["phone"]."', '".trim($_GET["material"])."', '".trim($_GET["unit"])."', '".$_GET["costs"]."', '".$_GET['quantity']."', '".$_GET['quantity']."')";
            $query1 = mysqli_query($conn, $addQuery);
            $_SESSION['sup']="yes";
            header('Location: product.php');
		}else{
			$_SESSION['sup']="no";
			header('Location: product.php');
		}
	} else {
		header('Location: login.php'); //Nếu không phải tài khoản admin thì chuyển về trang login.php
	}
 ?>