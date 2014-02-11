<?php
mysql_connect("localhost", "root", "") or die(mysql_error());
mysql_select_db("UVOTE") or die(mysql_error());
// Get all the data from the "candidate" table
$Auditor = mysql_query("SELECT  candidate_user_id, first_name, last_name, image_path FROM candidate_details WHERE candidate_position = 'Auditor'") or die(mysql_error());
$ViceAuditor = mysql_query("SELECT candidate_user_id, first_name, last_name, image_path FROM candidate_details WHERE candidate_position = 'Vice Auditor'") or die(mysql_error());
$PRO = mysql_query("SELECT candidate_user_id, first_name, last_name, image_path FROM candidate_details WHERE candidate_position = 'PRO'") or die(mysql_error());
$Education_Officer = mysql_query("SELECT candidate_user_id, first_name, last_name, image_path FROM candidate_details WHERE candidate_position = 'Education Officer'") or die(mysql_error());
$Finance_Officer =mysql_query("SELECT candidate_user_id, first_name, last_name, image_path FROM candidate_details WHERE candidate_position = 'Finanace officer'") or die(mysql_error());
$Sports_Officer = mysql_query("SELECT candidate_user_id, first_name, last_name, image_path FROM candidate_details WHERE candidate_position = 'Sports Officer'") or die(mysql_error());
$Secretary = mysql_query("SELECT candidate_user_id, first_name, last_name, image_path FROM candidate_details WHERE candidate_position = 'Secretary'") or die(mysql_error());
?>

<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Vote</title><!-- Bootstrap core CSS -->
    <link href="css/bootstrap.css" rel="stylesheet" type="text/css"><!-- Custom styles for this template -->
    <link href="css/VOTEEXAMPLE.css" rel="stylesheet" type="text/css">
    <link href="css/main.css" rel="stylesheet" type="text/css">
    <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css"><!-- Add custom CSS here -->
    <link href='http://fonts.googleapis.com/css?family=Quando' rel='stylesheet' type='text/css'>
</head>

<body>
    <div id="wrapper">
        <!-- Sidebar -->

        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <!-- Brand and toggle get grouped for better mobile display -->

            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse"><span class="sr-only">Toggle navigation</span></button> <a class="navbar-brand" href="User.html">Uvote</a>
            </div><!-- Collect the nav links, forms, and other content for toggling -->

            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav side-nav">
                    <li class="active"><a href="Ongoing.php">On-going Elections</a></li>

                    <li><a href="NewCandidate.html">Contact Candidates</a></li>

                    <li><a href="">Previous elections</a></li>
                        <li><a href="User.html"><i class="fa fa-desktop"></i> Home</a></li>

                    <li><a href="RegisterCandidate.html">Register as candidate</a></li>

                    <li><a href="User.html">Home</a></li>

                    <li><a href="logout.php">Logout</a></li>
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
 	 while($row = mysql_fetch_array( $Auditor )) {

$filePath = $row['image_path'];
?>
<ul class="responsive_grid">
<li>
<div class="team_member">
<div class="info">
<img src=<?php echo $filePath ?> />
<h5> <?php echo $row['first_name'] ."&nbsp" .$row['last_name']?></h5>
<a href="#" class="btn btn-blue" > Vote</a>
</div></div></li>
                            </ul></div></section>
                            <?php
}
?>


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