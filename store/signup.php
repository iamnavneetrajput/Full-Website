<!DOCTYPE html>
<html lang="en">
<head>
  <style>
    form {
  width: 500px;
  margin: auto;
  padding: 20px;
  border: 1px solid #ccc;
  border-radius: 10px;
}

label {
  font-weight: bold;
  margin-top: 10px;
  display: block;
}

input[type="text"],
input[type="email"],
input[type="password"],
input[type="file"],
input[type="text"] {
  width: 100%;
  padding: 10px;
  margin-top: 10px;
  border: 1px solid #ccc;
  border-radius: 5px;
}

button[type="submit"] {
  width: 100%;
  padding: 10px;
  margin-top: 20px;
  background-color: #4CAF50;
  color: white;
  border: none;
  border-radius: 5px;
  cursor: pointer;
}

button[type="submit"]:hover {
  background-color: #3e8e41;
}

  </style>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
<form action="submit_signup.php" method="post" enctype="multipart/form-data">
  <div>
    <label for="username">Username:</label>
    <input type="text" id="username" name="username" required>
  </div>
  <div>
    <label for="email">Email:</label>
    <input type="email" id="email" name="email" required>
  </div>
  <div>
    <label for="password">Password:</label>
    <input type="password" id="password" name="password" required>
  </div>
  <div>
    <label for="re-password">Re-enter Password:</label>
    <input type="password" id="re-password" name="re-password" required>
  </div>
  <div>
    <label for="image">Upload Image:</label>
    <input type="file" id="image" name="image" required>
  </div>
  <div>
    <label for="otp">Email OTP:</label>
    <input type="text" id="otp" name="otp" required>
  </div>
  <button type="submit">Sign Up</button>
</form>


<script>
  const form = document.querySelector('form');
const username = document.querySelector('#username');
const email = document.querySelector('#email');
const password = document.querySelector('#password');
const rePassword = document.querySelector('#re-password');
const otp = document.querySelector('#otp');

form.addEventListener('submit', (event) => {
  event.preventDefault();

  if (username.value === '') {
    alert('Username is required');
    return;
  }

  if (email.value === '') {
    alert('Email is required');
    return;
  }

  if (password.value === '') {
    alert('Password is required');
    return;
  }

  if (password.value !== rePassword.value) {
    alert('Passwords do not match');
    return;
  }

  if (otp.value === '') {
    alert('OTP is required');
    return;
  }

  form.submit();
});

</script>

</body>
</html>