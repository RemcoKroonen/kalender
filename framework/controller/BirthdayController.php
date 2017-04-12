<?php

require(ROOT . "model/BirthdayModel.php");

function index()
{
	render("birthday/index", array(
		'birthdays' => getAllBirthdays()
	));
}

function create()
{
	render("birthday/create");
}

function createSave()
{
	if (!createStudent()) {
		header("Location:" . URL . "error/index");
		exit();
	}

	header("Location:" . URL . "birthday/index");
}

function edit($id)
{
	render("student/edit", array(
		'student' => getStudent($id)
	));
}

function editSave()
{
	if (!editStudent()) {
		header("Location:" . URL . "error/index");
		exit();
	}

	header("Location:" . URL . "birthday/index");
} 

function delete($id)
{
	if (!deleteStudent($id)) {
		header("Location:" . URL . "error/index");
		exit();
	}

	header("Location:" . URL . "birthday/index");
}
