<?php
require_once 'dbconn.php';


function addProduct($data)
{
	$conn= db_conn();
	$query = "INSERT INTO user_info(Name,Email,Username,Password,ConfirmPass,Gender) VALUES(:name,:email,:website,:comment,:conpass,:gender)";
	try{
		$stmt = $conn->prepare($query);
		$stmt->execute([
			':name' => $data['name'],
			':email' => $data['email'],
			':website' => $data['website'],
			':comment' => $data['comment'],
			':conpass' => $data['conpass'],
			':gender' => $data['gender']
			
		]);
	}
	catch(PDOException $e){
		echo $e->getMessage();
	}

	$conn = null;
	return true;

}

function login($data)
{
    $conn = db_conn();
    $query = "SELECT * FROM user_info WHERE name = :name AND password = :conpass";
    try
    {
        $stmt = $conn->prepare($query);
        $stmt->execute([
            ':name' => $data['name'],
            ':conpass' => $data['conpass']
        ]);
    }
    catch(PDOException $e)
    {
        echo $e->getMessage();
    }

    $row = $stmt->fetch(PDO::FETCH_ASSOC);

    return $row;
}






?>