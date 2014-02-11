<?php
// Make a MySQL Connection
mysql_connect("localhost", "root", "") or die(mysql_error());
mysql_select_db("UVOTE") or die(mysql_error());

// Get all the data from the "example" table
$result = mysql_query("SELECT Election_title FROM Elections where election_id =1")
or die(mysql_error());
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>On Going Elections</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.css" rel="stylesheet">

    <!-- Add custom CSS here -->
    <link href="css/Ongoing.css" rel="stylesheet">

     <link rel="stylesheet" href="css/font-awesome.min.css">
	</head>


  <body>

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
            <li><a href="Previous.php"><i class="fa fa-bar-chart-o"></i> Previous Elections</a></li>
            <li><a href="SelectElection.html"><i class="fa fa-table"></i> Create Election</a></li>
            <li><a href="ReminderEmail.html"><i class="fa fa-edit"></i> Send reminder emails</a></li>
            <li><a href="AdminSignup.php"><i class="fa fa-font"></i> Add Admin</a></li>
             <li><a href="Results.php"><i class="fa fa-tasks"></i> Results</a></li>
            <li><a href="Adminlogout.php"><i class="fa fa-pencil"></i> Logout</a></li>

            </li>
          </ul>

         </div><!-- /.navbar-collapse -->
      </nav>

<div class="heads">
	   <input type="text" class="text" placeholder="Search for election" />
	   <input type="submit" value="search" class="SearchButton">
	  </div>

      <div id="select">
  <div id="content">
    <div id="head">
      <h1>Elections</h1>

          </div>

   <?php
   while($row = mysql_fetch_array( $result )) {
   ?>
    	<div id="list">
		<div>
        <i></i>
		<h3><a href="AdminVote.php"><?php echo $row['Election_title']?></a></h3>
		<span class="fontawesome-chevron-right" ></span>
		</div>
		</div></div></div>



     <div class="space">
	  </div>
</div></div></div>
<?php
     }
     ?>








     <!-- Bootstrap core JavaScript -->

    <script src="scripts/bootstrap.js"></script>
    <!-- Page Specific Plugins -->

    <script src="http://cdn.oesmith.co.uk/morris-0.4.3.min.js"></script>
    <script src="scripts/chart-data-morris.js"></script>
    <script src="scripts/jquery.tablesorter.js"></script>
    <script src="scripts/tables.js"></script>

  </body>
</html>
