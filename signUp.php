<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Sign Up</title>
    <script src="script/togglePassword.js"></script>
</head>

<body>
    <h1>Sign Up</h1>
    <form action="remote/signUpProcess.php" method="POST" onsubmit="return validatePasswords()">
        <label for="fullname">Full Name:</label>
        <input type="text" id="fullname" name="fullname" required><br><br>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required><br><br>

        <label for="contact">Contact Number:</label>
        <input type="tel" id="contact" name="contact" required><br><br>
        <div class=" password-container">
            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required />
            <img src="#" alt="Show password" class="show_password" onclick="togglePassword('password')">
        </div>

        <div class="password-container">
            <label for="confirmPassword">Confirm Password:</label>
            <input type="password" id="confirmPassword" name="confirmPassword" required />
            <img src="#" alt="Show confirm password" class="show_password" onclick="togglePassword('confirmPassword')">
        </div>

        <div>
            Already Have an Account? <a href="index.php">Log In</a>
        </div>

        <input type="submit" value="Sign Up" name="signUp">
    </form>
</body>

</html>