<?php
header('Content-Type: application/json');

$conn = mysqli_connect("localhost","root","","nlcs");

$sqlQuery = "SELECT * FROM bill_detail INNER JOIN product ON product.id=bill_detail.id_product";

$result = mysqli_query($conn,$sqlQuery);

$data = array();
foreach ($result as $row) {
	$data[] = $row;
}

mysqli_close($conn);

echo json_encode($data);
?>