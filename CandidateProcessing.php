
<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Which Position</title><!-- Bootstrap core CSS -->
    <link href="css/bootstrap.css" rel="stylesheet" type="text/css"><!-- Add custom CSS here -->
    <link href="css/RegistrationPosition.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="css/font-awesome.min.css">


 <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script>

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


     <form action="Register_Position.php" class="sign-up" method="post">
             <h1 class="sign-up-title">Select a Position to run for</h1>

            <hr>
            		<div class="RadioAlign">
                            <div class="positions">
							   <input type="radio" name="candidate_position" id="radio" value="Auditor" class="radio"/>
							   <label for="radio">Auditor</label>
							   </div>

							   <div class="positions">
								   <input type="radio" name="candidate_position" id="radio2" value="Vice Auditor" class="radio"/>
								   <label for="radio2">Vice Auditor</label>
								   </div>

								   <div class="positions">
									   <input type="radio" name="candidate_position" id="radio3" value="Education Officer" class="radio"/>
									   <label for="radio3">Education Officer</label>
									   </div>

									   <div class="positions">
										   <input type="radio" name="candidate_position" id="radio4" value="Sports Officer" class="radio"/>
										   <label for="radio4">Sports Officer</label>
										   </div>

										    <div class="positions">
										   <input type="radio" name="candidate_position" id="radio5" value="Secretary" class="radio"/>
										   <label for="radio5">Secretary</label>
										   </div>

										   <div class="positions">
										   <input type="radio" name="candidate_position" id="radio6" value="Finance Officer" class="radio"/>
										   <label for="radio6">Finance Officer</label>
										   </div>

										    <div class="positions">
										   <input type="radio" name="candidate_position" id="radio7" value="Social Officer" class="radio"/>
										   <label for="radio7">Social Officer</label>
										   </div>

										   <div class="positions">
										   <input type="radio" name="candidate_position" id="radio8" value="pro" class="radio"/>
										   <label for="radio8">Pro</label>


										   	<div class="buttons">

                                <input type="submit" value="Submit"  id="submit" class="button green center">
                                <input type="reset" value="Clear"  id="reset" class="button red center">
										   	</div></div></div></form>


<script>
$('.sign-up').click(function(){
            $('.create')[0].reset();
 });
 </script>






         <!-- Bootstrap core JavaScript -->
         <script src="scripts/bootstrap.js" type="text/javascript"></script> <!-- Page Specific Plugins -->
</body>
</html>
