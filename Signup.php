<?php

/*** begin our session ***/
session_start();

/*** set a form token ***/
$form_token = md5( uniqid('auth', true) );

/*** set the session form token ***/
$_SESSION['form_token'] = $form_token;
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <link href='http://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet' type='text/css'>
  <link rel="stylesheet" href="css/signup.css">
     <link rel="stylesheet" href="css/font-awesome.min.css">
</head>
<body>
  <h2>Welcome to Uvote</h2>
  <div class="ribbon"></div>
  <div class="login">
  <h1>Let's get started.</h1>
  <p></p>
   <form action="Signup_Submit.php" method="post">
    <div class="input">
      <div class="blockinput">
        <i class="fa fa-user"></i><input type="text" id="student_username" name="student_username"  placeholder="Student Number">
      </div>
      <div class="blockinput">
        <i class="fa fa-pencil"></i></i><input type="email" id="student_email" name="student_email" placeholder="Umail Address">
      </div>
      <div class="blockinput">
        <i class="fa fa-pencil"></i></i><input type="password" id="student_password" name="student_password" placeholder="Password">
      </div>
      
    </div>
 
    <input type="hidden" name="form_token" value="<?php echo $form_token; ?>" />
    <button>Signup</button>
  </form>
  </div>
  <p class="signup"><a href="Login.php">Already a member? login here</a></p>
   <p class="signup"><a href="Adminlogin.php">Admin member</a></p>
  
</body>
</html>
  