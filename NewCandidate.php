<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Candidates</title>

    <!-- Bootstrap core CSS -->
     <link href="css/bootstrap.css" rel="stylesheet" type="text/css"><!-- Custom styles for this template -->
    <link href="css/VOTEEXAMPLE.css" rel="stylesheet" type="text/css">
    <link href="css/main.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link href='http://fonts.googleapis.com/css?family=Quando' rel='stylesheet' type='text/css'>

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
          <a class="navbar-brand" href="User.html">Uvote</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse navbar-ex1-collapse">
          <ul class="nav navbar-nav side-nav">
            <li class="active"><a href="Ongoing.php"><i class="fa fa-dashboard"></i> On-going Elections</a></li>
            <li><a href="NewCandidate.html"><i class="fa fa-comment-o"></i> Contact Candidates</a></li>
            <li><a href=""><i class="fa fa-tasks"></i> Previous elections</a></li>
            <li><a href="RegisterCandidate.php"><i class="fa fa-pencil"></i> Register as candidate</a></li>
              <li><a href="User.html"><i class="fa fa-desktop"></i> Home</a></li>
            <li><a href="logout.php"><i class="fa fa-user"></i> Logout</a></li>

            </li>
          </ul>

         </div><!-- /.navbar-collapse -->
      </nav>

        <form action="submit_vote.php" method="post">
            <div id="select">
                    <section id="hero" style="height:auto;min-height:100px; max-height:600px;">

                            <fieldset>
                                <legend>Auditor</legend>
                            </fieldset>

                                <?php
					mysql_connect("localhost", "root", "") or die(mysql_error());
					mysql_select_db("UVOTE") or die(mysql_error());
					// Get all the data from the "candidate" table
					$Auditor = mysql_query("SELECT first_name, last_name, image_path FROM candidate_details WHERE candidate_position =  'Auditor'")

						or die(mysql_error());
 						while($row = mysql_fetch_array( $Auditor )) {
						$filePath = $row['image_path'];
						echo '<ul class="responsive_grid">';
						echo '<li>';
						echo '<div class="team_member">';
						echo '<div class="info">';
					 	echo '<img src="' . $filePath . '" />';
					 	echo '<h5>' . $row['first_name'] ."&nbsp" .$row['last_name'] .'</h5>';
					 	echo '<a href="#" class="btn btn-blue">Contact</a>';
					 	echo '</div></div></li>';
					 	}
					 	?>
                            </ul></div></section>



		<div id="select">
		 <section id="hero" style="height:auto;min-height:575px; max-height:600px;">
			<fieldset>
			 <legend>Vice Auditor</legend>
			</fieldset>
			 <ul class="responsive_grid">

		<?php
			mysql_connect("localhost", "root", "") or die(mysql_error());
			mysql_select_db("UVOTE") or die(mysql_error());
			$Vice_Auditor = mysql_query("SELECT first_name, last_name, image_path FROM candidate_details WHERE candidate_position = 'Vice Auditor'")
				or die(mysql_error());
 				 while($row = mysql_fetch_array( $Vice_Auditor )) {
					$filePath = $row['image_path'];
						echo '<li>';
						echo '<div class="team_member">';
						echo '<div class="info">';
					 	echo '<img src="' . $filePath . '" />';
					 	echo '<h5>' . $row['first_name'] ."&nbsp" .$row['last_name'] .'</h5>';
					 	echo '<a href="#" class="btn btn-blue">Contact</a>';
					 	echo '</div></div></li>';
					 	}
					 	?>
										</ul></section></div>


<div id="select">
		 <section id="hero" style="height:auto;min-height:300px; max-height:600px;">
			<fieldset>
			 <legend>Secretary</legend>
			</fieldset>
			 <ul class="responsive_grid">

		<?php
			mysql_connect("localhost", "root", "") or die(mysql_error());
			mysql_select_db("UVOTE") or die(mysql_error());
			$Secretary = mysql_query("SELECT first_name, last_name, image_path FROM candidate_details WHERE candidate_position = 'Secretary'")
				or die(mysql_error());
 				 while($row = mysql_fetch_array( $Secretary )) {
					$filePath = $row['image_path'];
						echo '<li>';
						echo '<div class="team_member">';
						echo '<div class="info">';
					 	echo '<img src="' . $filePath . '" />';
					 	echo '<h5>' . $row['first_name'] ."&nbsp" .$row['last_name'] .'</h5>';
					 	echo '<a href="#" class="btn btn-blue">Contact</a>';
					 	echo '</div></div></li>';
					 	}
					 	?>
										</ul></section></div>

<div id="select">
		 <section id="hero" style="height:auto;min-height:300px; max-height:600px;">
			<fieldset>
			 <legend>Sports Officer</legend>
			</fieldset>
			 <ul class="responsive_grid">

		<?php
			mysql_connect("localhost", "root", "") or die(mysql_error());
			mysql_select_db("UVOTE") or die(mysql_error());
			$Sports_Officer = mysql_query("SELECT first_name, last_name, image_path FROM candidate_details WHERE candidate_position = 'Sports Officer'")
				or die(mysql_error());
 				 while($row = mysql_fetch_array( $Sports_Officer )) {
					$filePath = $row['image_path'];
						echo '<li>';
						echo '<div class="team_member">';
						echo '<div class="info">';
					 	echo '<img src="' . $filePath . '" />';
					 	echo '<h5>' . $row['first_name'] ."&nbsp" .$row['last_name'] .'</h5>';
					 	echo '<a href="#" class="btn btn-blue">Contact</a>';
					 	echo '</div></div></li>';
					 	}
					 	?>
										</ul></section></div>


<div id="select">
		 <section id="hero" style="height:auto;min-height:300px; max-height:600px;">
			<fieldset>
			 <legend>Finance Officer</legend>
			</fieldset>
			 <ul class="responsive_grid">

	<?php
		mysql_connect("localhost", "root", "") or die(mysql_error());
		mysql_select_db("UVOTE") or die(mysql_error());
		$Finance_Officer = mysql_query("SELECT first_name, last_name, image_path FROM candidate_details WHERE candidate_position = 'Finance Officer'")
				or die(mysql_error());
 				 while($row = mysql_fetch_array( $Finance_Officer )) {
					$filePath = $row['image_path'];
						echo '<li>';
						echo '<div class="team_member">';
						echo '<div class="info">';
					 	echo '<img src="' . $filePath . '" />';
					 	echo '<h5>' . $row['first_name'] ."&nbsp" .$row['last_name'] .'</h5>';
					 	echo '<a href="#" class="btn btn-blue">Contact</a>';
					 	echo '</div></div></li>';
					 	}
					 	?>
										</ul></section></div>


<div id="select">
		 <section id="hero" style="height:auto;min-height:515px; max-height:600px;">
			<fieldset>
			 <legend>Education Officer</legend>
			</fieldset>
			 <ul class="responsive_grid">

	<?php
	mysql_connect("localhost", "root", "") or die(mysql_error());
	mysql_select_db("UVOTE") or die(mysql_error());
	$Education_Officer = mysql_query("SELECT first_name, last_name, image_path FROM candidate_details WHERE candidate_position = 'Education Officer'")
				or die(mysql_error());
 				 while($row = mysql_fetch_array( $Education_Officer )) {
					$filePath = $row['image_path'];
						echo '<li>';
						echo '<div class="team_member">';
						echo '<div class="info">';
					 	echo '<img src="' . $filePath . '" />';
					 	echo '<h5>' . $row['first_name'] ."&nbsp" .$row['last_name'] .'</h5>';
					 	echo '<a href="#" class="btn btn-blue">Contact</a>';
					 	echo '</div></div></li>';
					 	}
					 	?>
										</ul></section></div>

<div id="select">
		 <section id="hero" style="height:auto;min-height:315px; max-height:600px;">
			<fieldset>
			 <legend>PRO</legend>
			</fieldset>
			 <ul class="responsive_grid">

	<?php
	mysql_connect("localhost", "root", "") or die(mysql_error());
	mysql_select_db("UVOTE") or die(mysql_error());
	$PRO = mysql_query("SELECT first_name, last_name, image_path FROM candidate_details WHERE candidate_position = 'PRO'")
				or die(mysql_error());
 				 while($row = mysql_fetch_array( $PRO )) {
					$filePath = $row['image_path'];
						echo '<li>';
						echo '<div class="team_member">';
						echo '<div class="info">';
					 	echo '<img src="' . $filePath . '" />';
					 	echo '<h5>' . $row['first_name'] ."&nbsp" .$row['last_name'] .'</h5>';
					 	echo '<a href="#" class="btn btn-blue">Contact</a>';
					 	echo '</div></div></li>';
					 	}
					 	?>
										</ul></section></div>
                            </form>
        <!-- Bootstrap core JavaScript
    ================================================== -->
        <!-- Placed at the end of the document so the pages load faster -->
        <script src="https://code.jquery.com/jquery-1.10.2.min.js" type="text/javascript">
</script> <script src="scripts/bootstrap.min.js" type="text/javascript">
</script> <script src="scripts/jribbble.js" type="text/javascript">
</script> <script src="scripts/site-ck.js" type="text/javascript">
</script>
    </div>
</body>
</html>
