function togglePassword(field) {
    const passwordInput = document.getElementById(field);
    const icon = document.querySelector(
    `img[alt="Show ${field === 'password' ? 'password' : 'confirm password'}"]`);

    if (passwordInput.type === "password") {
        passwordInput.type = "text";
        icon.src = "#"; // You can replace this with a password-visible icon if you wish
    } else {
        passwordInput.type = "password";
        icon.src = "#"; // You can replace this with a password-hidden icon if you wish
    }
}

function validatePasswords() {
    const password = document.getElementById("password").value;
    const confirmPassword = document.getElementById("confirmPassword").value;

    if (password !== confirmPassword) {
        alert("Passwords do not match!");
        return false; // Prevent form submission
    }
    return true; // Allow form submission
}
   