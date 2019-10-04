<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "logreg";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    	$request = $_POST['request'];
    	$name = $_POST['name'];
    	$email = $_POST['email'];
    	$message = $_POST['message'];
    if($request=='register'){
	    $sql = "INSERT INTO users (name, email, message)
	    VALUES ('".$name."', '".$email."', '".$message."')";
	    $conn->exec($sql);
	    echo $name;
	    return true;
	}    
	if($request=='login'){
	    $sql = "SELECT `name` FROM users WHERE `name` = '".$name."' and `email` = '".$email."';";
	    $res = $conn->query($sql);
	    $res = $res->fetch(PDO::FETCH_ASSOC);
	    if($res['name']){
	    	echo $res['name'];
	    	return;
	    }
	    header('HTTP/1.1 401 Unauthorized', true, 401);
	    return;
	}	
    }
catch(PDOException $e)
    {
    echo $sql . "<br>" . $e->getMessage();
    }

$conn = null;
?>