<?php 
@include 'config.php';
session_start();

if(isset($_POST['submit'])){
    $name = mysqli_real_escape_string($conn, $_POST['username']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $pass = $_POST['password'];
    $cpass = $_POST['cpassword'];
 
    $select = "SELECT * FROM users WHERE email = '$email' && password = '$pass'";
 
    $result = mysqli_query($conn, $select);
    if(mysqli_num_rows($result) > 0){
        $error = 'User already exists!';
    } else {
        if($pass != $cpass){
            $error = 'Passwords do not match!';
        } else {
            $insert = "INSERT INTO users (name, email, password) VALUES ('$name', '$email', '$pass')";
            mysqli_query($conn, $insert);

            // Retrieve the inserted user details
            $selectInserted = "SELECT * FROM users WHERE email = '$email' LIMIT 1";
            $resultInserted = mysqli_query($conn, $selectInserted);
            $row = mysqli_fetch_assoc($resultInserted);
            
            $_SESSION['user_id'] = $row['email'];
            header('Location: login.php');
            exit;
        }
    }
}

// Display or handle the error message
if (!empty($error)) {
    echo $error;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Register Form</title>

   <!-- custom css file link  -->
   <style>
     body {
  background-image: url("https://source.unsplash.com/random/1920x1080");
  background-size: cover;
  font-family: sans-serif;
}

.form-container {
  width: 90%;
  max-width: 400px;
  margin: 0 auto;
  margin-top: 10%; /* Add some margin from the top */
  padding: 30px;
  background-color: rgba(255, 255, 255, 0.8); /* Use rgba for transparent background */
  border-radius: 5px;
  box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
}

.form-container h3 {
  text-align: center;
  font-size: 28px;
  color: #555;
  margin-bottom: 20px;
}

.form-container input[type=text],
.form-container input[type=email],
.form-container input[type=password] {
  width: 100%;
  padding: 10px;
  margin-bottom: 15px;
  border: none;
  background-color: #f2f2f2;
  border-radius: 5px;
  font-size: 16px;
  color: #555;
  outline: none;
}

.form-container input[type=submit] {
  width: 100%;
  padding: 10px;
  border: none;
  background-color: #4CAF50;
  color: #fff;
  border-radius: 5px;
  font-size: 16px;
  cursor: pointer;
  transition: all 0.3s ease;
  outline: none;
}

.form-container input[type=submit]:hover {
  background-color: #45a049;
}

.form-container p {
  text-align: center;
  margin-top: 15px;
}

.form-container a {
  color: #4CAF50;
  text-decoration: none;
}

.error-msg {
  color: #f00;
  font-size: 16px;
  display: block;
  margin-bottom: 10px;
  text-align: center;
}

@media only screen and (max-width: 768px) {
      .form-container {
         margin-top: 15%;
      }
   }

   @media only screen and (max-width: 480px) {
      .form-container {
         width: 80%;
         margin-top: 20%;
      }
      .form-container input[type=submit] {
         font-size: 14px;
      }
   }
</style>
</head>
<body>
   
<div class="form-container">

   <form action="" method="post">
      <h3>Register Now</h3>
      <?php
      if(isset($error)){
         foreach($error as $error){
            echo '<span class="error-msg">'.$error.'</span>';
         };
      };
      ?>
      <input type="text" name="username" required placeholder="Enter Your Name">
      <input type="email" name="email" required placeholder="Enter Your Email">
      <input type="password" name="password" required placeholder="Enter Your Password">
      <input type="password" name="cpassword" required placeholder="Confirm Your Password">
      <input type="submit" name="submit" value="Register Now">
      <p>Already have an account? <a href="login.php">Login Now</a></p>
   </form>

</div>

</body>
</html>
