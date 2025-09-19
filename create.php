<?php
//Include the Employee class to access CRUD operations
require_once "Employee.php";

//Create a new instance of the Employee class
$emp = new Employee();

//Check if the form is submitted using POST method
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $emp->create($_POST['name'], $_POST['email'], $_POST['position'], $_POST['salary']);
    //After saving, redirect the user back to the main page
    header("Location: index.php");
    exit();
}
?>


<!DOCTYPE html>
<html>
<head>
    <title>Add Employee</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>Tracy Data Solutions Company Limited</h1>
    </header>
<div class="container">
    <h2>Add New Employee</h2>
    <form method="POST">
        <label>Name:</label>
        <input type="text" name="name" required><br>
        
        <label>Email:</label>
        <input type="email" name="email" required><br>
        
        <label>Position:</label>
        <input type="text" name="position"><br>
        
        <label>Salary:</label>
        <input type="number" step="0.01" name="salary"><br>
        
        <button class="btn" type="submit">Save</button>
        <a class="btn danger" href="index.php">Cancel</a>
    </form>
</div>
</body>
</html>
