<?php

// Make a MySQL Connection
mysql_connect("localhost", "root", "") or die(mysql_error());
mysql_select_db("UVOTE") or die(mysql_error());
// Get all the data from the "candidate" table
$auditor = mysql_query("SELECT * from Previous_Election where candidate_position = 'Auditor'") or die(mysql_error());
$viceAuditor = mysql_query("SELECT * from Previous_Election where candidate_position = 'Vice Auditor'") or die(mysql_error());
$pro  = mysql_query("SELECT * from Previous_Election where candidate_position = 'pro'") or die(mysql_error());
$secretary  = mysql_query("SELECT * from Previous_Election where candidate_position = 'Secretary'") or die(mysql_error());
$education  = mysql_query("SELECT * from Previous_Election where candidate_position = 'Education Officer'") or die(mysql_error());
$finance  = mysql_query("SELECT * from Previous_Election where candidate_position = 'Finance Officer'") or die(mysql_error());
$sports  = mysql_query("SELECT * from Previous_Election where candidate_position = 'Sports Officer'") or die(mysql_error());

$elections = mysql_query("select Election_title from Elections where Election_id = 2") or die(mysql_error());
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Admin Home</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.css" rel="stylesheet">

    <!-- Add custom CSS here -->
    <link href="css/Previous.css" rel="stylesheet">
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
          <a class="navbar-brand" href="index.html">Uvote Admin</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse navbar-ex1-collapse">
          <ul class="nav navbar-nav side-nav">
            <li class="active"><a href="OngoingAdmin.php"><i class="fa fa-dashboard"></i> On-going Elections</a></li>
                <li><a href="User.html"><i class="fa fa-desktop"></i> Home</a></li>
            <li><a href="SelectPrevious.php"><i class="fa fa-bar-chart-o"></i> Previous Elections</a></li>
            <li><a href="SelectElection.html"><i class="fa fa-table"></i> Create Election</a></li>
            <li><a href="ReminderEmail.html"><i class="fa fa-edit"></i> Send reminder emails</a></li>
            <li><a href="AdminSignup.php"><i class="fa fa-font"></i> Add Admin</a></li>
             <li><a href="Results.php"><i class="fa fa-tasks"></i> Results</a></li>
            <li><a href="Adminlogout.php"><i class="fa fa-pencil"></i> Logout</a></li>

            </li>
          </ul>

         </div><!-- /.navbar-collapse -->
      </nav>


        <div class="row">
          <div class="col-lg-8">
            <div class="panel panel-primary">
              <div class="panel-heading">
              <?php
              while($title =mysql_fetch_array( $elections)){
              ?>
                <h3 class="panel-title"><i class="fa fa-clock-o"></i><?php echo $title['Election_title']?></h3>
                <?php
                }
                ?>
              </div>
              <div class="panel-body">
                <table class="rwd-table">
                <th>Auditor</th>
						<tr>
							<th>Candidate Name</th>
							<th>Position</th>
							<th>Number of Votes</th>
							</tr>


	 <?php
   while($row = mysql_fetch_array( $auditor )) {
   ?>
   					<td>  <?php echo $row['first_name'] ."&nbsp" .$row['last_name']?></td>
					<td>  <?php echo $row['candidate_position']?></td>
					<td>  <?php echo   str_repeat('&nbsp;', 10) . $row['votes']?></td>
				</tr>
				<?php
				}
				?>
				</table>





					  <table class="rwd-table">
                <th>Vice Auditor</th>
						<tr>
							<th>Candidate Name</th>
							<th>Position</th>
							<th>Number of Votes</th>
							</tr>


	 <?php
   while($row = mysql_fetch_array( $viceAuditor )) {
   ?>
   					<td>  <?php echo $row['first_name'] ."&nbsp" .$row['last_name']?></td>
					<td>  <?php echo $row['candidate_position']?></td>
					<td>  <?php echo   str_repeat('&nbsp;', 10) . $row['votes']?></td>
				</tr>
				<?php
				}
				?>
				</table>



					  <table class="rwd-table">
                <th>PRO</th>
						<tr>
							<th>Candidate Name</th>
							<th>Position</th>
							<th>Number of Votes</th>
							</tr>


	 <?php
   while($row = mysql_fetch_array( $pro )) {
   ?>
   					<td>  <?php echo $row['first_name'] ."&nbsp" .$row['last_name']?></td>
					<td>  <?php echo $row['candidate_position']?></td>
					<td>  <?php echo   str_repeat('&nbsp;', 10) . $row['votes']?></td>
				</tr>
				<?php
				}
				?>
				</table>



					  <table class="rwd-table">
                <th>Finance Officer</th>
						<tr>
							<th>Candidate Name</th>
							<th>Position</th>
							<th>Number of Votes</th>
							</tr>


	 <?php
   while($row = mysql_fetch_array( $finance )) {
   ?>
   					<td>  <?php echo $row['first_name'] ."&nbsp" .$row['last_name']?></td>
					<td>  <?php echo $row['candidate_position']?></td>
					<td>  <?php echo   str_repeat('&nbsp;', 10) . $row['votes']?></td>
				</tr>
				<?php
				}
				?>
				</table>




					  <table class="rwd-table">
                <th>Secretary</th>
						<tr>
							<th>Candidate Name</th>
							<th>Position</th>
							<th>Number of Votes</th>
							</tr>


	 <?php
   while($row = mysql_fetch_array( $secretary )) {
   ?>
   					<td>  <?php echo $row['first_name'] ."&nbsp" .$row['last_name']?></td>
					<td>  <?php echo $row['candidate_position']?></td>
					<td>  <?php echo   str_repeat('&nbsp;', 10) . $row['votes']?></td>
				</tr>
				<?php
				}
				?>
				</table>



					  <table class="rwd-table">
                <th>Sports Officer</th>
						<tr>
							<th>Candidate Name</th>
							<th>Position</th>
							<th>Number of Votes</th>
							</tr>


	 <?php
   while($row = mysql_fetch_array( $sports )) {
   ?>
   					<td>  <?php echo $row['first_name'] ."&nbsp" .$row['last_name']?></td>
					<td>  <?php echo $row['candidate_position']?></td>
					<td>  <?php echo   str_repeat('&nbsp;', 10) . $row['votes']?></td>
				</tr>
				<?php
				}
				?>
				</table>



					  <table class="rwd-table">
                <th>Education Officer</th>
						<tr>
							<th>Candidate Name</th>
							<th>Position</th>
							<th>Number of Votes</th>
							</tr>


	 <?php
   while($row = mysql_fetch_array( $education )) {
   ?>
   					<td>  <?php echo $row['first_name'] ."&nbsp" .$row['last_name']?></td>
					<td>  <?php echo $row['candidate_position']?></td>
					<td>  <?php echo   str_repeat('&nbsp;', 10) . $row['votes']?></td>
				</tr>
				<?php
				}
				?>
				</table>

		             </div></div></div></div>




           <!-- Bootstrap core JavaScript -->

    <script src="scripts/bootstrap.js"></script>
    <!-- Page Specific Plugins -->

    <script src="http://cdn.oesmith.co.uk/morris-0.4.3.min.js"></script>
    <script src="scripts/chart-data-morris.js"></script>
    <script src="scripts/jquery.tablesorter.js"></script>
    <script src="scripts/tables.js"></script>

  </body>
</html>