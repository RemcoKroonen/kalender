<?php

function getStudent($id) 
{
	$db = openDatabaseConnection();

	$sql = "SELECT * FROM birthdays WHERE birthday_id = :id";
	$query = $db->prepare($sql);
	$query->execute(array(
		":id" => $id));

	$db = null;

	return $query->fetch();
}

function getAllBirthdays() 
{
	$db = openDatabaseConnection();

	$sql = "SELECT * FROM birthdays";
	$query = $db->prepare($sql);
	$query->execute();

	$db = null;

	return $query->fetchAll();
}

function editStudent() 
{
	$firstname = isset($_POST['firstname']) ? $_POST['firstname'] : null;
	$day = isset($_POST['day']) ? $_POST['day'] : null;
	$year = isset($_POST['year']) ? $_POST['year'] : null;
	$id = isset($_POST['id']) ? $_POST['id'] : null;
	
	if (strlen($firstname) == 0 || strlen($day) == 0 || strlen($year) == 0) {
		return false;
	}
	
	$db = openDatabaseConnection();

	$sql = "UPDATE birthday SET birthday_firstname = :firstname, birthday_day = :day, birthday_year = :year WHERE birthday_id = :id";
	$query = $db->prepare($sql);
	$query->execute(array(
		':firstname' => $firstname,
		':day' => $lastname,
		':year' => $gender,
		':id' => $id));

	$db = null;
	
	return true;
}

function deleteStudent($id = null) 
{
	if (!$id) {
		return false;
	}
	
	$db = openDatabaseConnection();

	$sql = "DELETE FROM birthday WHERE birthday_id=:id ";
	$query = $db->prepare($sql);
	$query->execute(array(
		':id' => $id));

	$db = null;
	
	return true;
}

function createStudent() 
{
	$firstname = isset($_POST['firstname']) ? $_POST['firstname'] : null;
	$day = isset($_POST['day']) ? $_POST['day'] : null;
	$year = isset($_POST['year']) ? $_POST['year'] : null;
	
	if (strlen($firstname) == 0 || strlen($day) == 0 || strlen($year) == 0) {
		return false;
	}
	
	$db = openDatabaseConnection();

	$sql = "INSERT INTO birthday(birthday_firstname, birthday_day, birthday_year) VALUES (:firstname, :day, :year)";
	$query = $db->prepare($sql);
	$query->execute(array(
		':firstname' => $firstname,
		':day' => $day,
		':year' => $year));

	$db = null;
	
	return true;
}
