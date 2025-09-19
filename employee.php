<?php
// Employee.php - Class for CRUD operations
//include the database class
require_once "db.php";

class Employee {
    private $db;

    //constructor creates a new database instance
    public function __construct() {
        $this->db = new Database();
    }

    // Create (Insert) adds a new employee to the database
    public function create($name, $email, $position, $salary) {
        $sql = "INSERT INTO employees (name, email, position, salary) VALUES (?, ?, ?, ?)";
        $stmt = $this->db->conn->prepare($sql);
        $stmt->bind_param("sssd", $name, $email, $position, $salary);
        return $stmt->execute();
    }

    // Read (Fetch all employees)
    public function read() {
        $sql = "SELECT * FROM employees";
        return $this->db->conn->query($sql);
    }

    // Get one employee by id
    public function getById($id) {
        $sql = "SELECT * FROM employees WHERE id=?";
        $stmt = $this->db->conn->prepare($sql);
        $stmt->bind_param("i", $id);
        $stmt->execute();
        return $stmt->get_result()->fetch_assoc();
    }

    // Update
    public function update($id, $name, $email, $position, $salary) {
        $sql = "UPDATE employees SET name=?, email=?, position=?, salary=? WHERE id=?";
        $stmt = $this->db->conn->prepare($sql);
        $stmt->bind_param("sssdi", $name, $email, $position, $salary, $id);
        return $stmt->execute();
    }

    // Delete
    public function delete($id) {
        $sql = "DELETE FROM employees WHERE id=?";
        $stmt = $this->db->conn->prepare($sql);
        $stmt->bind_param("i", $id);
        return $stmt->execute();
    }
}
?>
