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
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Register as a Candidate</title><!-- Bootstrap core CSS -->
    <link href="css/bootstrap.css" rel="stylesheet" type="text/css"><!-- Add custom CSS here -->
    <link href="css/RegistrationOfCandidates.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
      <link href="css/sb-admin.css" rel="stylesheet" type="text/css">
	  <script src="//code.jquery.com/jquery-1.9.1.js"></script>
  <script src="//ajax.aspnetcdn.com/ajax/jquery.validate/1.9/jquery.validate.min.js">

  <!-- jQuery Form Validation code -->
  <script>

  // When the browser is ready...
  $(function() {

    // Setup form validation on the #register-form element
    $("#register-form").validate({

        // Specify the validation rules
        rules: {
            first_name: "required",
            last_name: "required",
            candidate_email: {
                required: true,
                email: true
            },
            candidate_password: {
                required: true,
                minlength: 5
            },
            candidate_student_number{
	            required: true;
	            minlength:9
            }
        },

        // Specify the validation error messages
        messages: {
            first_name: "Please enter your first name",
            last_name: "Please enter your last name",
            candidate_password: {
                required: "Please provide a password",
                minlength: "Your password must be at least 5 characters long"
            },
            candidate_email: "Please enter a valid email address",
            candidate_student_number: "Please accept our policy"
        },

        submitHandler: function(form) {
            form.submit();
        }
    });

  });

  </script>

       </head>

<body>

    <div id="wrapper">

      <!-- Sidebar -->
      <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="user.html">Uvote</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse navbar-ex1-collapse">
          <ul class="nav navbar-nav side-nav">
            <li class="active"><a href="Ongoing.php"><i class="fa fa-dashboard"></i> On-going Elections</a></li>
            <li><a href="NewCandidate.html"><i class="fa fa-comment-o"></i> Contact Candidates</a></li>
            <li><a href="CreateElection.html"><i class="fa fa-tasks"></i> Previous elections</a></li>
            <li><a href="RegisterCandidate.php"><i class="fa fa-pencil"></i> Register as candidate</a></li>
            <li><a href="User.html"><i class="fa fa-desktop"></i> Home</a></li>
            <li><a href="logout.php"><i class="fa fa-user"></i> Logout</a></li>
            </li>
          </ul>

         </div><!-- /.navbar-collapse -->
      </nav>

        <form action="Register_signup.php" class="sign-up" id="register-form"  method="post" novalidate="novalidate">
      			<h1 class="sign-up-title">Register as a Candidate</h1>

                <input type="text" id="first_name" name="first_name" class="sign-up-input" placeholder="First Name" autofocus>
                <input type="text" id="last_name" name="last_name" class="sign-up-input" placeholder="Last Name" >
                <input type="text" id="candidate_student_number" name="candidate_student_number"  class="sign-up-input" placeholder="Student Number" >
                <input type="password" id="candidate_password" name="candidate_password"  class="sign-up-input" placeholder="Enter a password" >
                <input type="text" id="candidate_email" name="candidate_email" class="sign-up-input" placeholder="Enter an email" >

								<div class="buttons">
							 	 <input type="hidden" name="form_token" value="<?php echo $form_token; ?>" />
                                <input type="submit" value="Submit"  id="submit" class="button green center">
                                <input type="reset" value="Clear"  id="reset" class="button red center">
								</div></form>




        <script>
       $('#Reset').click(function(){
            $('.sign-up')[0].reset();
 });
 </script>




         <!-- Bootstrap core JavaScript -->
         <script src="scripts/bootstrap.js" type="text/javascript"></script>

</body>
</html>
