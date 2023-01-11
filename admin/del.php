<?php
require_once('../config.php');


function query($sql) {
	//B1. Mo ket noi toi CSDL
	$conn = mysqli_connect(HOST, USERNAME, PASSWORD, DB);
	mysqli_set_charset($conn, 'utf8');

	mysqli_query($conn, $sql);


	mysqli_close($conn);
}

function queryResult($sql, $isSingle = false) {

	$conn = mysqli_connect(HOST, USERNAME, PASSWORD, DB);
	mysqli_set_charset($conn, 'utf8');

	
	$resultset = mysqli_query($conn, $sql);
	$data = [];

	while(($row = mysqli_fetch_array($resultset, 1)) != null) {
		$data[] = $row;
	}

	mysqli_close($conn);

	if($isSingle) {
		if(count($data) == 0) return null;

		return $data[0];
	}
	return $data;
}