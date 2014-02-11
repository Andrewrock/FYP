<?php

// Make a MySQL Connection
mysql_connect("localhost", "root", "") or die(mysql_error());
mysql_select_db("UVOTE") or die(mysql_error());
// Get all the data from the "candidate" table
$result = mysql_query("SELECT Election_title, Election_start, Election_end, Election_deadline FROM Elections where election_id =1") or die(mysql_error());
$data = mysql_query("SELECT candidate_position, count(candidate_position) counting FROM candidate_details group by candidate_position") or die(mysql_error());
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
    <link href="css/Adminhome.css" rel="stylesheet">
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

      <div id="page-wrapper">

        <div class="row">
          <div class="col-lg-12">
            <h1>Admin Dashboard,<small>manage and create elections</small></h1>
                      </div>
        </div><!-- /.row -->

        <div class="row">
          <div class="col-lg-3">
            <div class="panel panel-info">
              <div class="panel-heading">
                <div class="row">
                  <div class="col-xs-6">
                    <i class="fa fa-archive fa-5x"></i>
                  </div>
                  <div class="col-xs-6 text-right">
                    <p class="announcement-heading"></p>
                    <p class="announcement-text">On-going elections</p>
                  </div>
                </div>
              </div>
              <a href="OngoingAdmin.php">
                <div class="panel-footer announcement-bottom">
                  <div class="row">
                    <div class="col-xs-6">
                      Current elections
                    </div>
                    <div class="col-xs-6 text-right">
                      <i class="fa fa-arrow-circle-right"></i>
                    </div>
                  </div>
                </div>
              </a>
            </div>
          </div>
          <div class="col-lg-3">
            <div class="panel panel-previous">
              <div class="panel-heading">
                <div class="row">
                  <div class="col-xs-6">
                    <i class="fa fa-calendar fa-5x"></i>
                  </div>
                  <div class="col-xs-6 text-right">
                    <p class="announcement-heading"></p>
                    <p class="announcement-text">Previous Elections</p>
                  </div>
                </div>
              </div>
              <a href="Previous.php">
                <div class="panel-footer announcement-bottom">
                  <div class="row">
                    <div class="col-xs-6">
                     Previous elections
                    </div>
                    <div class="col-xs-6 text-right">
                      <i class="fa fa-arrow-circle-right"></i>
                    </div>
                  </div>
                </div>
              </a>
            </div>
          </div>
          <div class="col-lg-3">
            <div class="panel panel-danger">
              <div class="panel-heading">
                <div class="row">
                  <div class="col-xs-6">
                    <i class="fa fa-tasks fa-5x"></i>
                  </div>
                  <div class="col-xs-6 text-right">
                    <p class="announcement-heading"></p>
                    <p class="announcement-text">New Election</p>
                  </div>
                </div>
              </div>
              <a href="SelectElection.html">
                <div class="panel-footer announcement-bottom">
                  <div class="row">
                    <div class="col-xs-6">
                      Create new election
                    </div>
                    <div class="col-xs-6 text-right">
                      <i class="fa fa-arrow-circle-right"></i>
                    </div>
                  </div>
                </div>
              </a>
            </div>
          </div>
          <div class="col-lg-3">
            <div class="panel panel-success">
              <div class="panel-heading">
                <div class="row">
                  <div class="col-xs-6">
                    <i class="fa fa-comments fa-5x"></i>
                  </div>
                  <div class="col-xs-6 text-right">
                    <p class="announcement-heading"></p>
                    <p class="announcement-text">Send emails</p>
                  </div>
                </div>
              </div>
              <a href="ReminderEmail.html">
                <div class="panel-footer announcement-bottom">
                  <div class="row">
                    <div class="col-xs-6">
                    Reminder emails
                    </div>
                    <div class="col-xs-6 text-right">
                      <i class="fa fa-arrow-circle-right"></i>
                    </div>
                  </div>
                </div>
              </a>
            </div>
          </div>

          <div class="col-lg-3">
            <div class="panel panel-results">
              <div class="panel-heading">
                <div class="row">
                  <div class="col-xs-6">
                    <i class="fa fa-bar-chart-o fa-5x"></i>
                  </div>
                  <div class="col-xs-6 text-right">
                    <p class="announcement-heading"></p>
                    <p class="announcement-text">Results</p>
                  </div>
                </div>
              </div>
              <a href="Results.php">
                <div class="panel-footer announcement-bottom">
                  <div class="row">
                    <div class="col-xs-6">
                    View Results
                    </div>
                    <div class="col-xs-6 text-right">
                      <i class="fa fa-arrow-circle-right"></i>
                    </div>
                  </div>
                </div>
              </a>
            </div>
          </div>

          <div class="col-lg-3">
            <div class="panel panel-logout">
              <div class="panel-heading">
                <div class="row">
                  <div class="col-xs-6">
                    <i class="fa fa-user fa-5x"></i>
                  </div>
                  <div class="col-xs-6 text-right">
                    <p class="announcement-heading"></p>
                    <p class="announcement-text">Logout</p>
                  </div>
                </div>
              </div>
              <a href="Adminlogout.php">
                <div class="panel-footer announcement-bottom">
                  <div class="row">
                    <div class="col-xs-6">
                    Logout
                    </div>
                    <div class="col-xs-6 text-right">
                      <i class="fa fa-arrow-circle-right"></i>
                    </div>
                  </div>
                </div>
              </a>
            </div>
          </div>


        </div><!-- /.row -->

        <div class="row">
          <div class="col-lg-8">
            <div class="panel panel-primary">
              <div class="panel-heading">
                <h3 class="panel-title"><i class="fa fa-clock-o"></i>Current Election Details </h3>
              </div>
              <div class="panel-body">
                <table class="rwd-table">
						<tr>
							<th>Election Title</th>
							<th>Election Start Date</th>
							<th>Election End Date</th>
							<th>Deadline to register as candidate</th>
							</tr>


	 <?php
   while($row = mysql_fetch_array( $result )) {
   ?>
   		<td><?php echo $row['Election_title']?></td>
		<td><?php echo $row['Election_start']?></td>
		<td><?php echo $row['Election_end']?></td>
	    <td><?php echo $row['Election_deadline']?></td>
			</tr>
			</table>
				<?php
				}
				?>
	               </div></div></div></div>


        <div class="row">
          <div class="col-lg-8">
            <div class="panel panel-primary">
              <div class="panel-heading">
                <h3 class="panel-title"><i class="fa fa-long-arrow-right"></i> Candidate Statistics</h3>
              </div>
              <div class="panel-body">
             <table class="rwd-table">
				 	<tr>
							<th>Position</th>
							<th>Number of Candidates</th>
				 	</tr>


					 		<?php
					 		while($info = mysql_fetch_array( $data ))
					 		{
					 		?>
					<tr>
					<td><?php echo $info['candidate_position']?></td>
					<td><?php echo str_repeat('&nbsp;', 15) .$info['counting']?></td>
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