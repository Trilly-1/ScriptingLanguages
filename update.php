<?php
//include the employee class
require_once "Employee.php";

//Create an instance of the employee class
$emp = new Employee();

//Check if 'id' is passed in the URL to get the specific information details
if (isset($_GET['id'])) {
    $data = $emp->getById($_GET['id']);
}

//Check if the form is submitted to update the employee
if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    //calls the update method with form data
    $emp->update($_POST['id'], $_POST['name'], $_POST['email'], $_POST['position'], $_POST['salary']);

    //redirect back to the main page after update
    header("Location: index.php");
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Update Employee</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>Tracy Data Solutions Company Limited</h1>
    </header>
<div class="container">
    <h2>Update Employee</h2>
    <form method="POST">
        <input type="hidden" name="id" value="<?= $data['id']; ?>">
        
        <label>Name:</label>
        <input type="text" name="name" value="<?= $data['name']; ?>"><br>
        
        <label>Email:</label>
        <input type="email" name="email" value="<?= $data['email']; ?>"><br>
        
        <label>Position:</label>
        <input type="text" name="position" value="<?= $data['position']; ?>"><br>
        
        <label>Salary:</label>
        <input type="number" step="0.01" name="salary" value="<?= $data['salary']; ?>"><br>
        
        <button class="btn" type="submit">Update</button>
        <a class="btn danger" href="index.php">Cancel</a>
    </form>
</div>
</body>
</html>
