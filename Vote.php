<?php
// Make a MySQL Connection
mysql_connect("localhost", "root", "") or die(mysql_error());
mysql_select_db("UVOTE") or die(mysql_error());

// Get all the data from the "example" table
$result = mysql_query("SELECT first_name, last_name FROM candidate_details where candidate_position ='Auditor'")
or die(mysql_error());
?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Vote</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.css" rel="stylesheet">


    <!-- Custom styles for this template -->
    <link href="css/main.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <!-- Add custom CSS here -->




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
            <li><a href="RegisterCandidate.html"><i class="fa fa-pencil"></i> Register as candidate</a></li>
              <li><a href="User.html"><i class="fa fa-desktop"></i> Home</a></li>
            <li><a href="logout.php"><i class="fa fa-user"></i> Logout</a></li>

            </li>
          </ul>

         </div><!-- /.navbar-collapse -->
      </nav>

<form action="submit_vote.php" method="post">

			 <div id="select">
			 <div class="radios">
	<section id="hero" style="height:auto;min-height:100px; max-height:390px;">
			<div class="hero-block">
			<fieldset>
				<legend>Auditor</legend>
			</fieldset>
				<div class="option">
    <img class="img-circle" src="images/desk.jpg" class="mb-7 hero-image">
    <input id="masters" type="radio" name="Vice_Auditor" value="Masters">
	<label for="masters">Masters</label>
	</div>

<div class="option">
    <img class="img-circle" src="images/desk.jpg" class="mb-7 hero-image">
    <input id="masters1" type="radio" name="Vice_Auditor" value="Masters">
	<label for="masters1">Masters</label>
	</div>

<div class="option">
    <img class="img-circle" src="images/desk.jpg" class="mb-7 hero-image">
    <input id="masters2" type="radio" name="Vice_Auditor" value="Masters">
	<label for="masters2">Masters</label>
	</div>

<div class="option">
    <img class="img-circle" src="images/desk.jpg" class="mb-7 hero-image">
    <input id="masters3" type="radio" name="Vice_Auditor" value="Masters">
	<label for="masters3">Masters</label>
	</div>

<div class="option">
    <img class="img-circle" src="images/desk.jpg" class="mb-7 hero-image">
    <input id="masters4" type="radio" name="Vice_Auditor" value="Masters">
	<label for="masters4">Masters</label>
	</div>


			</div></section></div></div>

		 <div id="select">
  <div class="radios">
	<section id="hero" style="height:auto;min-height:100px; max-height:390px;">
			<div class="hero-block">
			<fieldset>
<legend>Vice Auditor</legend>
</fieldset>
			 				<div class="option">
    <img class="img-circle" src="images/desk.jpg" class="mb-7 hero-image">
    <input id="masters5" type="radio" name="Vice_Auditor" value="Masters">
	<label for="masters5">Masters</label>
	</div>

<div class="option">
    <img class="img-circle" src="images/desk.jpg" class="mb-7 hero-image">
    <input id="masters6" type="radio" name="Vice_Auditor" value="Masters">
	<label for="masters6">Masters</label>
	</div>

<div class="option">
    <img class="img-circle" src="images/desk.jpg" class="mb-7 hero-image">
    <input id="masters7" type="radio" name="Vice_Auditor" value="Masters">
	<label for="masters7">Masters</label>
	</div>

<div class="option">
    <img class="img-circle" src="images/desk.jpg" class="mb-7 hero-image">
    <input id="masters8" type="radio" name="Vice_Auditor" value="Masters">
	<label for="masters8">Masters</label>
	</div>

			</div>
			</section>
			</div>
	 </div>



		 <div id="select">
  <div class="radios">
	<section id="hero" style="height:auto;min-height:100px; max-height:390px;">
			<div class="hero-block">
			<fieldset>
<legend>Social Officer</legend>
</fieldset>
			 				<div class="option">
    <img class="img-circle" src="images/view.jpg" class="mb-7 hero-image">
    <input id="masters9" type="radio" name="Social_Officer" value="Masters">
	<label for="masters9">Masters</label>
	</div>

<div class="option">
    <img class="img-circle" src="images/view.jpg" class="mb-7 hero-image">
    <input id="masters10" type="radio" name="Social_Officer" value="Masters">
	<label for="masters10">Masters</label>
	</div>

<div class="option">
    <img class="img-circle" src="images/view.jpg" class="mb-7 hero-image">
    <input id="masters11" type="radio" name="Social_Officer" value="Masters">
	<label for="masters11">Masters</label>
	</div>

<div class="option">
    <img class="img-circle" src="images/view.jpg" class="mb-7 hero-image">
    <input id="masters12" type="radio" name="Social_Officer" value="Masters">
	<label for="masters12">Masters</label>
	</div>

			</div>
			</section>
			</div>
	 </div>

 <div id="select">
  <div class="radios">
	<section id="hero" style="height:auto;min-height:100px; max-height:390px;">
			<div class="hero-block">
			<fieldset>
<legend>Education Officer</legend>
</fieldset>
			 				<div class="option">
    <img class="img-circle" src="images/ucc.jpg" class="mb-7 hero-image">
    <input id="masters13" type="radio" name="Education_Officer" value="Masters">
	<label for="masters13">Masters</label>
	</div>

<div class="option">
    <img class="img-circle" src="images/ucc.jpg" class="mb-7 hero-image">
    <input id="masters14" type="radio" name="Education_Officer" value="Masters">
	<label for="masters14">Masters</label>
	</div>

<div class="option">
    <img class="img-circle" src="images/ucc.jpg" class="mb-7 hero-image">
    <input id="masters15" type="radio" name="Education_Officer" value="Masters">
	<label for="masters15">Masters</label>
	</div>

<div class="option">
    <img class="img-circle" src="images/ucc.jpg" class="mb-7 hero-image">
    <input id="masters16" type="radio" name="Education_Officer" value="Masters">
	<label for="masters16">Masters</label>
	</div>

			</div>
			</section>
			</div>
	 </div>

 <div id="select">
  <div class="radios">
	<section id="hero" style="height:auto;min-height:100px; max-height:390px;">
			<div class="hero-block">
			<fieldset>
<legend>Sports Officer</legend>
</fieldset>
			 				<div class="option">
    <img class="img-circle" src="images/brick.jpg" class="mb-7 hero-image">
    <input id="masters17" type="radio" name="Sports_Officer" value="Masters">
	<label for="masters17">Masters</label>
	</div>

<div class="option">
    <img class="img-circle" src="images/brick.jpg" class="mb-7 hero-image">
    <input id="masters18" type="radio" name="Sports_Officer" value="Masters">
	<label for="masters18">Masters</label>
	</div>

<div class="option">
    <img class="img-circle" src="images/brick.jpg" class="mb-7 hero-image">
    <input id="masters19" type="radio" name="Sports_Officer" value="Masters">
	<label for="masters19">Masters</label>
	</div>

<div class="option">
    <img class="img-circle" src="images/brick.jpg" class="mb-7 hero-image">
    <input id="masters20" type="radio" name="Sports_Officer" value="Masters">
	<label for="masters20">Masters</label>
	</div>

			</div>
			</section>
			</div>
	 </div>

 <div id="select">
  <div class="radios">
	<section id="hero" style="height:auto;min-height:100px; max-height:390px;">
			<div class="hero-block">
			<fieldset>
<legend>Secretary</legend>
</fieldset>
			 				<div class="option">
    <img class="img-circle" src="images/bg.jpg" class="mb-7 hero-image">
    <input id="masters21" type="radio" name="Secretary" value="Masters">
	<label for="masters21">Masters</label>
	</div>

<div class="option">
    <img class="img-circle" src="images/bg.jpg" class="mb-7 hero-image">
    <input id="masters22" type="radio" name="Secretary" value="Masters">
	<label for="masters22">Masters</label>
	</div>

<div class="option">
    <img class="img-circle" src="images/bg.jpg" class="mb-7 hero-image">
    <input id="masters23" type="radio" name="Secretary" value="Masters">
	<label for="masters23">Masters</label>
	</div>

<div class="option">
    <img class="img-circle" src="images/bg.jpg" class="mb-7 hero-image">
    <input id="masters24" type="radio" name="Secretary" value="Masters">
	<label for="masters24">Masters</label>
	</div>

			</div>
			</section>
			</div>
	 </div>

 <div id="select">
  <div class="radios">
	<section id="hero" style="height:auto;min-height:100px; max-height:390px;">
			<div class="hero-block">
			<fieldset>
<legend>Finance Officer</legend>
</fieldset>
			 				<div class="option">
    <img class="img-circle" src="images/macpic.jpg" class="mb-7 hero-image">
    <input id="masters25" type="radio" name="Finance_Officer" value="Masters">
	<label for="masters25">Masters</label>
	</div>

<div class="option">
    <img class="img-circle" src="images/macpic.jpg" class="mb-7 hero-image">
    <input id="masters26" type="radio" name="Finance_Officer" value="Masters">
	<label for="masters26">Masters</label>
	</div>

<div class="option">
    <img class="img-circle" src="images/macpic.jpg" class="mb-7 hero-image">
    <input id="masters27" type="radio" name="Finance_Officer" value="Masters">
	<label for="masters27">Masters</label>
	</div>

<div class="option">
    <img class="img-circle" src="images/macpic.jpg" class="mb-7 hero-image">
    <input id="masters28" type="radio" name="Finance_Officer" value="Masters">
	<label for="masters28">Masters</label>
	</div>

			</div>
			</section>
			</div>
	 </div>

 <div id="select">
  <div class="radios">
	<section id="hero" style="height:auto;min-height:100px; max-height:390px;">
			<div class="hero-block">
			<fieldset>
<legend>PRO</legend>
</fieldset>
			 				<div class="option">
    <img class="img-circle" src="images/blur.jpg" class="mb-7 hero-image">
    <input id="masters29" type="radio" name="PRO" value="Masters">
	<label for="masters29">Masters</label>
	</div>

<div class="option">
    <img class="img-circle" src="images/blur.jpg" class="mb-7 hero-image">
    <input id="masters30" type="radio" name="PRO" value="Masters">
	<label for="masters30">Masters</label>
	</div>

<div class="option">
    <img class="img-circle" src="images/blur.jpg" class="mb-7 hero-image">
    <input id="masters31" type="radio" name="PRO" value="Masters">
	<label for="masters31">Masters</label>
	</div>

<div class="option">
    <img class="img-circle" src="images/blur.jpg" class="mb-7 hero-image">
    <input id="masters32" type="radio" name="PRO" value="Masters">
	<label for="masters32">Masters</label>
	</div>



			</div>
			</section>
			</div>
	 </div>





							 	<div class="buttons">
							 	 	<input type="hidden" name="form_token" value="<?php echo $form_token; ?>" />
							 	 	<input type="submit" value="Submit" id="submit" class="btn btn-primary">
							 	 	<input type="submit" value="Clear" id="Reset" class="btn btn-danger">
							 	 	</div>
							 	 		</form>


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
    <script src="scripts/bootstrap.min.js"></script>
    <script src="scripts/jribbble.js"></script>
    <script src="scripts/site-ck.js"></script>

  </body>
</html>
