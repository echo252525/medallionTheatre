<?php
// Include database connection
include_once "../connection/connection.php";

if (isset($_POST['signUp'])) {
    // Retrieve form data
    $fullname = $_POST['fullname'];
    $email = $_POST['email'];
    $contactNumber = $_POST['contact']; // ← HTML form name is 'contact', DB column is 'contactNumber'
    $password = $_POST['password'];
    $confirmPassword = $_POST['confirmPassword'];

    // Validate passwords match
    if ($password !== $confirmPassword) {
        echo "Passwords do not match!";
        exit();
    }

    // Hash the password
    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

    // Get current date and time
    $dateCreated = date('Y-m-d H:i:s');

    // Set initial balance
    $balance = 0;

    // Prepare the SQL statement (no userid field here!)
    $query = $pdo->prepare("INSERT INTO users (fullname, contactNumber, balance, email, password, dateCreated) 
                            VALUES (:fullname, :contactNumber, :balance, :email, :password, :dateCreated)");

    // Bind parameters
    $query->bindParam(':fullname', $fullname);
    $query->bindParam(':contactNumber', $contactNumber);
    $query->bindParam(':balance', $balance);
    $query->bindParam(':email', $email);
    $query->bindParam(':password', $hashedPassword);
    $query->bindParam(':dateCreated', $dateCreated);

    // Execute the query
    if ($query->execute()) {
        header("Location: ../pages/dashboard.php"); // Redirect to dashboard
        exit();
    } else {
        echo "Error during sign up!";
    }
}
?>