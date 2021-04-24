<?php
require_once('config.php');
?>

<?php

if(isset($_POST)){

	$firstname 		= $_POST['firstname'];
	$lastname 		= $_POST['lastname'];
	$email 			= $_POST['email'];
	$phonenumber	= $_POST['phonenumber'];
	

		$sql = "INSERT INTO users (firstname, lastname, email, phonenumber) VALUES(?,?,?,?)";
		$stmtinsert = $db->prepare($sql);
		$result = $stmtinsert->execute([$firstname, $lastname, $email, $phonenumber]);
		if($result){
			echo 'Thank you for registering!';
		}else{
			echo 'There were erros while saving the data.';
		}
}else{
	echo 'No data';
}