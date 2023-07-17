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

	$insert_qry = mysqli_execute(mysqli_query("INSERT INTO users (name, email, password, contact_number, country, state, district) VALUES ('".$val['name']."', '".$val['email']."', '".$val['password']."', ".$val['contact_number'].", '".$val['country']."', '".$val['state']."', '".$val['district']."')"));

	if (!$insert_qry) {
		echo "Insertion failed, ";
	}
}


$fetch_qry = mysqli_query("SELECT id, name, email, contact_number, country, state, district FROM users");

$data = mysqli_fetch($fetch_qry);

print_r($data);



// function insertQry() {
if(!empty($_POST) && $_POST["id"] > 0) { 

	$delete_qry = mysqli_execute(mysqli_query("UPDATE users SET status=2 WHERE id=".$_POST['id'].")"));

	if (!$delete_qry) {
		echo "Delete Entry failed, ";
	}
}

?>