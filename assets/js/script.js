document.addEventListener("DOMContentLoaded", function () {
  const registrationForm = document.getElementById("registrationForm");

  if (registrationForm) {
    registrationForm.addEventListener("submit", function (event) {
      const name = document.getElementById("name").value;
      const email = document.getElementById("email").value;
      const password = document.getElementById("password").value;

      const nameError = document.getElementById("nameError");
      const emailError = document.getElementById("emailError");
      const passwordError = document.getElementById("passwordError");

      // Reset error messages
      nameError.textContent = "";
      emailError.textContent = "";
      passwordError.textContent = "";

      let isValid = true;

      // Name Validation
      if (name.trim() === "") {
        nameError.textContent = "Name is required.";
        isValid = false;
      } else if (name.length < 3) {
        nameError.textContent = "Name must be at least 3 characters long.";
        isValid = false;
      }

      // Email Validation
      const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
      if (!emailRegex.test(email)) {
        emailError.textContent = "Invalid email format.";
        isValid = false;
      }

      // Password Validation
      if (password.length < 8) {
        passwordError.textContent =
          "Password must be at least 8 characters long.";
        isValid = false;
      }

      if (!isValid) {
        event.preventDefault(); // Prevent form submission if validation fails
      }
    });
  }
});

document
  .getElementById("editAdminForm")
  .addEventListener("submit", function (event) {
    let username = document.getElementById("username").value;
    let email = document.getElementById("email1").value;
    let password = document.getElementById("password1").value;
    let usernameError = document.getElementById("usernameError");
    let emailError = document.getElementById("emailError");
    let passwordError = document.getElementById("passwordError1");

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
document.addEventListener("DOMContentLoaded", function () {
  const changePasswordForm = document.getElementById("changePasswordForm");

  if (changePasswordForm) {
    changePasswordForm.addEventListener("submit", function (event) {
      const currentPassword = document.getElementById("current_password").value;
      const newPassword = document.getElementById("new_password").value;
      const confirmPassword = document.getElementById("confirm_password").value;

      const currentPasswordError = document.getElementById(
        "currentPasswordError"
      );
      const newPasswordError = document.getElementById("newPasswordError");
      const confirmPasswordError = document.getElementById(
        "confirmPasswordError"
      );

      // Reset error messages
      currentPasswordError.textContent = "";
      newPasswordError.textContent = "";
      confirmPasswordError.textContent = "";

      let isValid = true;

      // Current Password Validation (you can add more complex checks here)
      if (currentPassword.trim() === "") {
        currentPasswordError.textContent = "Current password is required.";
        isValid = false;
      }

      // New Password Validation
      if (newPassword.length < 6) {
        newPasswordError.textContent =
          "New password must be at least 6 characters long.";
        isValid = false;
      }

      // Confirm Password Validation
      if (confirmPassword !== newPassword) {
        confirmPasswordError.textContent = "Passwords do not match.";
        isValid = false;
      }

      if (!isValid) {
        event.preventDefault(); // Prevent form submission if validation fails
      }
    });
  }
});

console.log("Hello from script.js");
