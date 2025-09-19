<?php
//Include the employee class
require_once "Employee.php";

//Create a new instance of Employee class
$emp = new Employee();

//Fetch all employee records from the database
$employees = $emp->read();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Employee Records</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>Tracy Data Solutions Company Limited</h1>
    </header>
    <div class="container">
        <h2>Employee Records</h2>
        <a class="btn" href="create.php">+ Add New Employee</a><br><br>

        <table>
            <tr>
                <th>ID</th><th>Name</th><th>Email</th><th>Position</th><th>Salary</th><th>Actions</th>
            </tr>
            <?php while($row = $employees->fetch_assoc()) { ?>
                <tr>
                    <td><?= $row['id']; ?></td>
                    <td><?= $row['name']; ?></td>
                    <td><?= $row['email']; ?></td>
                    <td><?= $row['position']; ?></td>
                    <td><?= $row['salary']; ?></td>
                    <td>
                        <a class="btn" href="update.php?id=<?= $row['id']; ?>">Edit</a>
                        <a class="btn danger" href="delete.php?id=<?= $row['id']; ?>" onclick="return confirm('Delete this employee?');">Delete</a>
                    </td>
                </tr>
            <?php } ?>
        </table>
    </div>
</body>
</html>
