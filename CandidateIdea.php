<?php
mysql_connect("localhost", "root", "") or die(mysql_error());
mysql_select_db("UVOTE") or die(mysql_error());

$query = mysql_query(
	'SELECT id, first_name, last_name, student_number, candidate_position, image_path FROM voting');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Contact Candidates</title><!-- Bootstrap core CSS -->
    <link href="css/bootstrap.css" rel="stylesheet" type="text/css"><!-- Add custom CSS here -->
    <link href="css/CandidateIdea.css" rel="stylesheet" type="text/css">
    <link href="css/CandidateProfileCard.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link href="css/sb-admin.css" rel="stylesheet" type="text/css">

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

	  					<?php while($row = mysql_fetch_array($query)):
		  					$filePath = $row['image_path'];
		  					?>
		  					<div class="CanidateContact">
		  				<?php echo '<img class="profile-img" src="' . $filePath . '" />'?>
						<div class="profile-text">
							<h1 class="profile-name"><?php echo $row['first_name'].' '.$row['last_name']?></h1>
							<span class="profile-title"><?php echo $row['candidate_position'] ?></span>


							<div class="buttons">
								<img src="images/facebook.png"/>
								<img src="images/twitter.png"/>
								<img src="images/linkedin.png"/>

							</div>
								<div class="buttons">
									<input type="submit" value="Email"  id="submit" class="button green center">
									<input type="submit" value="Visit Profile"  id="submit" class="button blue center">

							</div></div></div>
						<?php endwhile?>

</body>
</html>
