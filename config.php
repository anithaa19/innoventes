<?php 

$dbName ="kreditbee";
$host = "localhost";
$username = "root";
$password = "Root@123";


$dbConn = mysqli_connect($host, $username, $password, $dbName);

if (!$dbConn ){
	die("DB Connection failed");
}

// function insertQry() {
if(!empty($_POST) && $_POST["email"] != '') { 

	$val = array(
		"name" => $_POST["username"],
		"email" => $_POST["email"],
		"password" => $_POST["password"],
		"contact_number" => $_POST["contact_number"],
		"state" => $_POST["state"],
		"district" => $_POST["district"],
		"country" => $_POST["country"],

	);

	$insert_qry = mysqli_execute(mysqli_query($dbConn, "INSERT INTO users (name, email, password, contact_number, country, state, district) VALUES ('".$val['name']."', '".$val['email']."', '".$val['password']."', ".$val['contact_number'].", '".$val['country']."', '".$val['state']."', '".$val['district']."')"));

	if (!$insert_qry) {
		echo "Insertion failed, ";
	}
}


$fetch_qry = mysqli_query($dbConn, "SELECT id, name, email, contact_number, country, state, district FROM users");

$resultData = array();
if (mysqli_num_rows($fetch_qry) > 0) {
	// output data of each row
	while($row = mysqli_fetch_assoc($fetch_qry)) {
		array_push($resultData, $row);
		
	}
	return $resultData;
  } 
?>