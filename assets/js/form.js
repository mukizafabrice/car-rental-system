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
