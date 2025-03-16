document
  .getElementById("registrationForm")
  .addEventListener("submit", function (event) {
    let name = document.getElementById("name").value;
    let email = document.getElementById("email").value;
    let password = document.getElementById("password").value;

    let nameError = document.getElementById("nameError");
    let emailError = document.getElementById("emailError");
    let passwordError = document.getElementById("passwordError");

    nameError.textContent = "";
    emailError.textContent = "";
    passwordError.textContent = "";

    let isValid = true;

    if (name.trim() === "") {
      nameError.textContent = "Name is required.";
      isValid = false;
    } else if (name.length < 3) {
      nameError.textContent = "Name must be at least 3 characters long.";
      isValid = false;
    }

    let emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    if (!emailRegex.test(email)) {
      emailError.textContent = "Invalid email format.";
      isValid = false;
    }

    if (password.length < 8) {
      passwordError.textContent =
        "Password must be at least 8 characters long.";
      isValid = false;
    }

    if (!isValid) {
      event.preventDefault();
    }
  });

document
  .getElementById("editAdminForm")
  .addEventListener("submit", function (event) {
    let username = document.getElementById("username").value;
    let email = document.getElementById("email").value;
    let password = document.getElementById("password").value;
    let usernameError = document.getElementById("usernameError");
    let emailError = document.getElementById("emailError");
    let passwordError = document.getElementById("passwordError");

    usernameError.textContent = "";
    emailError.textContent = "";
    passwordError.textContent = "";

    if (username.length < 3) {
      usernameError.textContent = "Username must be at least 3 characters.";
      event.preventDefault();
    }

    if (!email.includes("@")) {
      emailError.textContent = "Invalid email format.";
      event.preventDefault();
    }

    if (password.length > 0 && password.length < 6) {
      passwordError.textContent = "Password must be at least 6 characters.";
      event.preventDefault();
    }
  });
document
  .getElementById("changePasswordForm")
  .addEventListener("submit", function (event) {
    let newPassword = document.getElementById("new_password").value;
    let confirmPassword = document.getElementById("confirm_password").value;
    let newPasswordError = document.getElementById("newPasswordError");
    let confirmPasswordError = document.getElementById("confirmPasswordError");

    newPasswordError.textContent = "";
    confirmPasswordError.textContent = "";

    if (newPassword.length < 6) {
      newPasswordError.textContent = "Password must be at least 6 characters.";
      event.preventDefault();
    }

    if (newPassword !== confirmPassword) {
      confirmPasswordError.textContent = "Passwords do not match.";
      event.preventDefault();
    }
    console.log("JavaScript is running!");
  });
