<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Log In</title>
    <script src="script/togglePassword.js"></script>
</head>

<body>
    <h1>Log In</h1>
    <form action="remote/logInProcess.php" method="POST">

        <label for="email">Email:</label>
        <input type="text" id="email" name="email" required />

        <div class="password-container">
            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required />
            <img src="#" alt="Show password" class="show_password" onclick="togglePassword('password')" />
        </div>


        <div>
            Don't Have an Account? <a href="signUp.php">Sign Up</a>
        </div>

        <input class="button" type="submit" value="Log In" name="logIn"></input>
    </form>
</body>

</html>