<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Intro Component with Signup Form</title>
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap">
<style>


body{
    background-color: #84C3FA;
}

form {
  padding: clamp(1rem, 5vw, 2rem);
  background-color: #ffffff;
  border-radius: 0.5rem;
  box-shadow: 0 0.4rem 0.06rem rgba(249, 77, 77, 0.3);
  margin-right:300px;
}

.form-container {
  display:flex;
  margin: 0 auto; 
  margin-left: 10%; 
}

input, button {
  display: block;
}

.input-container {
  display: grid;
  margin-bottom: clamp(0.8rem, 3vw, 1.1rem);
}

input {
  grid-column: 1 / span 2;
  grid-row: 1;
  font-family: inherit;
  font-weight: 600;
  padding: 1em 3.5em 1em 1em;
  border: 1px solid rgba(201, 209, 217, 0.7);
}

input:hover {
  background-color: rgba(201, 209, 217, 0.1);
}

input:focus {
  outline: none;
  box-shadow: 0 0 1px 1px rgba(51, 65, 85, 0.5);
}

input.invalid {
  border: 2px solid #ff7979;
}

input.invalid:focus {
  box-shadow: 0 0 1px 1px #ff7979;
}

input.invalid::placeholder {
  color: #ff7979;
}

.icon,
.message {
  display: none;
}

.password-constraint.message,
.error.message {
  display: block;
  grid-column: 1 / span 2;
  grid-row: 2;
  font-size: 0.7rem;
  font-weight: 500;
  line-height: normal;
  text-align: right;
  margin-top: 0.3em;
  white-space: pre-wrap;
}

.error.icon {
  display: block;
  grid-column: 2;
  grid-row: 1;
  place-self: center end;
  margin-right: 1rem;
}

.password-constraint.message {
  color: #172b4d;
}

.error.message {
  color: #ff7979;
  font-style: italic;
}

button{
    background: #3498db;
  background-image: -webkit-linear-gradient(top, #3498db, #2980b9);
  background-image: -moz-linear-gradient(top, #3498db, #2980b9);
  background-image: -ms-linear-gradient(top, #3498db, #2980b9);
  background-image: -o-linear-gradient(top, #3498db, #2980b9);
  background-image: linear-gradient(to bottom, #3498db, #2980b9);
  -webkit-border-radius: 28;
  -moz-border-radius: 28;
  border-radius: 28px;
  text-shadow: 1px 1px 3px #666666;
  font-family: Arial;
  color: #ffffff;
  font-size: 13px;
  padding: 10px 20px 10px 20px;
  text-decoration: none;
  border:none;
}

.button:hover {
  background: #3cb0fd;
  background-image: -webkit-linear-gradient(top, #3cb0fd, #3498db);
  background-image: -moz-linear-gradient(top, #3cb0fd, #3498db);
  background-image: -ms-linear-gradient(top, #3cb0fd, #3498db);
  background-image: -o-linear-gradient(top, #3cb0fd, #3498db);
  background-image: linear-gradient(to bottom, #3cb0fd, #3498db);
  text-decoration: none;
}

.terms-of-service {
  color: #a6a6a6;
  font-size: 0.7rem;
  line-height: 1.7em;
}

.terms-of-service a {
  color: #ff7979;
  text-decoration: none;
  font-weight: 600;
}

.terms-of-service a:hover {
  color: rgba(255, 121, 121, 0.7);
}


</style>
</head>
<body>
<section>
  <div class="form-container">
  <form id="form" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post" onsubmit="return validateForm()">
  <p>Complete the below form to get instant access </p>
  <div class="input-container">
        <input 
          type="text" 
          name="company_name" 
          aria-label="Company Name" 
          placeholder="Company Name"
          pattern="[\p{L},\.\-'\s]*"
          maxlength="30"
          required>
        <p class="message"></p>
      </div>
      <div class="input-container">
        <input 
          type="text" 
          name="full_name" 
          aria-label="Full Name" 
          placeholder="Full Name"
          pattern="[\p{L},\.\-'\s]*"
          maxlength="30"
          required>
        <p class="message"></p>
      </div>
      <div class="input-container">
        <input 
          type="text" 
          name="email" 
          aria-label="Email" 
          placeholder="Email"
          pattern="[\p{L},\.\-'\s]*"
          maxlength="30"
          required>
        <p class="message"></p>
      </div>
      <div class="input-container">
        <input
          type="email" 
          name="phone" 
          aria-label="Phone" 
          placeholder="Phone"
          pattern="[\w\.\-\+\/]+@[\w\.\-\+\/]+\.[\w\.\-\+\/]+"
          maxlength="100"
          required>
        <p class="message"></p>
      </div>
      <div class="input-container">
        <input 
          id="choose_service"
          type="text" 
          name="choose_service" 
          aria-label="Choose Service" 
          placeholder="Choose Service" 
          pattern="(?=.*[a-z]+)(?=.*[A-Z]+)(?=.*\d)(?=.*\W).{8,40}"
          maxlength="40"
          required>
        <p id="password-message" class="message"></p>
      </div>
      <button type="submit">Send request</button>
    </form>
    <img src="immagineprogetto.PNG">
    <script>
        function validateForm() {
            var name = document.getElementById("name").value;
            var email = document.getElementById("email").value;

            if (name == "" || email == "") {
                alert("Inserisci tutti i campi!");
                return false; 
            }
            return true; 
        }
    </script>
    <?php
