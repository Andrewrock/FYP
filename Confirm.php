<?php
$uploadDir = '/uploads/';
// Make a MySQL Connection
mysql_connect("localhost", "root", "") or die(mysql_error());
mysql_select_db("UVOTE") or die(mysql_error());
// Get all the data from the "candidate" table
$result = mysql_query("SELECT first_name, last_name, candidate_student_number, candidate_email, candidate_position FROM candidate_details ORDER by candidate_user_id DESC LIMIT 1")
or die(mysql_error());
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Confirmation of registration</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.css" rel="stylesheet">

    <!-- Add custom CSS here -->
    <link href="css/Confirm.css" rel="stylesheet">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <!-- Page Specific CSS -->
    <link rel="stylesheet" href="http://cdn.oesmith.co.uk/morris-0.4.3.min.css">
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
      <div class="row">
            <div class="col-lg-12">
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <h3 class="panel-title">Confirmation</h3>
                    </div>



					<h1>Candidate Details</h1>
					<?php
					mysql_connect("localhost", "root", "") or die(mysql_error());
					mysql_select_db("UVOTE") or die(mysql_error());
					// Get all the data from the "candidate" table
					$image = mysql_query("SELECT image_path FROM candidate_details ORDER by candidate_user_id DESC LIMIT 1")
						or die(mysql_error());
 						while($row = mysql_fetch_array( $image )) {
						$filePath = $row['image_path'];
					 	echo '<img class="img-circle mb-7 hero-image" src="' . $filePath . '" />';
					 	echo"<br>";
					 	}
					 	?>

					<table class="rwd-table">
						<tr>
							<th>First Name</th>
							<th>Last Name</th>
							<th>Student Number</th>
							<th>Email</th>
							<th>Position</th>
							</tr>




							 <?php
   while($row = mysql_fetch_array( $result )) {
   								echo "<td>" . $row['first_name'] . "</td>";
								echo "<td>" . $row['last_name'] . "</td>";
								echo "<td>" . $row['candidate_student_number'] . "</td>";
								echo "<td>" . $row['candidate_email'] . "</td>";
								echo "<td>" . $row['candidate_position'] . "</td>";
								echo "</tr>";
								echo "</table>";

												}
												?>

												<div class="buttons">

                                <input type="submit" value="Change Details" id="submit" class="btn btn-primary">

                            </div></div></div></div>


    <script src="scripts/bootstrap.js"></script>
    <!-- Page Specific Plugins -->

    <script src="http://cdn.oesmith.co.uk/morris-0.4.3.min.js"></script>
    <script src="scripts/chart-data-morris.js"></script>
    <script src="scripts/jquery.tablesorter.js"></script>
    <script src="scripts/tables.js"></script>
  </body>
</html>
