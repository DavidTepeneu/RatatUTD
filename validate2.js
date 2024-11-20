function validatePassword(password) {
  const regex = /^(?=.*[a-z])(?=.*\d)(?=.*[A-Z])(?=.*[!@#$%^&*()\-+.]).{6,20}$/;
  return regex.test(password);
}

function validateUser(username) {
  const regex = /^[a-zA-Z0-9\s]*$/;
  return regex.test(username);
}

const form = document.getElementById("loginForm2");
const usernameInput = document.getElementById("user2");
const passwordInput = document.getElementById("pswd2");
const newpasswordInput = document.getElementById("newpswd");

form.addEventListener("submit", function (event) {
  console.log("Form submitted");

  const password = passwordInput.value;
  const newpassword = newpasswordInput.value;
  const username = usernameInput.value;

  console.log("Username:", username);
  console.log("Password:", password);

  if (!validateUser(username)) {
    event.preventDefault();
    alert(
      "Username must not contain special characters, no sql injection allowed!!!"
    );
  }

  if (!validatePassword(password)) {
    event.preventDefault();
    alert(
      "Password must be 6-20 characters long and include at least one uppercase letter, one lowercase letter, one number, and one special character (!@#$%^&*()-+.)"
    );
  }

  if (!validatePassword(newpassword)) {
    event.preventDefault();
    alert(
      "Password must be 6-20 characters long and include at least one uppercase letter, one lowercase letter, one number, and one special character (!@#$%^&*()-+.)"
    );
  }
});
