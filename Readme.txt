Tracy Data Solutions Company limited
Record management System

Technologies: PHP, OOP, MySQL, HTML and CSS

Project Structure
│
 create.php          Form page for adding new employees
 employee.php        Main PHP class that connects to DB and handles CRUD
 index.php           Home page showing all employees in a table
 update.php          Page for editing/updating employee details
 delete.php          Page for deleting an employee
 style.css           CSS file for styling
 database.sql        SQL file to create the 'employees' table

Features of the system

Add Employee – Fill a form to add a new employee.
View Employees – All employees are shown in a table.
Edit Employee – Update employee details.
Delete Employee – Remove an employee from the database.
Styled with CSS for design.

Code for creating the database for the project

Open phpMyAdmin.
Create a database called company_db.
CREATE TABLE employees (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100) NOT NULL,
    email VARCHAR(100) UNIQUE,
    department VARCHAR(100),
    salary DECIMAL(10,2)
);

File explanations

employee.php
Contains the Employee class.
Connects to the MySQL database.
Handles functions:
create() – Add a new employee.
read() – Display all employees.
update() – Edit employee details.
delete() – Remove an employee.

create.php
A form where you can enter:
Employee name
Email
Department
Salary
Submits the data to employee.php to be saved in the database.

index.php
The homepage.
Displays all employees in a table.
Each row has buttons:
Edit → goes to update.php
Delete → goes to delete.php

update.php
Lets you edit employee details.
Uses the employee’s ID to update in the database.

delete.php
Deletes an employee from the database using their ID.

style.css
Adds styling for:
Page background
Forms
Buttons
