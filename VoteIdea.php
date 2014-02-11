<?php
mysql_connect("localhost", "root", "") or die(mysql_error());
mysql_select_db("UVOTE") or die(mysql_error());

$query = mysql_query(
	'SELECT id, first_name, last_name, student_number, candidate_position, image_path, vote
	FROM voting');

?>
<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Vote</title><!-- Bootstrap core CSS -->
    <link href="css/bootstrap.css" rel="stylesheet" type="text/css"><!-- Custom styles for this template -->
    <link href="css/VOTEEXAMPLE.css" rel="stylesheet" type="text/css">
    <link href="http://netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css"><!-- Add custom CSS here -->
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
	<script src="scripts/voting.js"></script>
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
                    <li class="active"><a href="Ongoing.php"><i class="fa fa-dashboard"></i> On-going Elections</a></li>
            <li><a href="NewCandidate.html"><i class="fa fa-comment-o"></i> Contact Candidates</a></li>
            <li><a href=""><i class="fa fa-tasks"></i> Previous elections</a></li>
            <li><a href="RegisterCandidate.php"><i class="fa fa-pencil"></i> Register as candidate</a></li>
              <li><a href="User.html"><i class="fa fa-desktop"></i> Home</a></li>
            <li><a href="logout.php"><i class="fa fa-user"></i> Logout</a></li>

                </ul>
            </div><!-- /.navbar-collapse -->
        </nav>

		<div class="wrap">

		<?php while($row = mysql_fetch_array($query)):
		$filePath = $row['image_path'];
		?>
				<div id="<?php echo $row['id'] ?>" class="item" data-postid="<?php echo $row['id'] ?>">

<!--<button class="test">Vote</button> -->
				<div class="vote-span">
				<p></p>
				<p class="tagIcon"> Vote</p>
				<div class="vote" data-action="up">
				<p class="test"><?php echo $row['candidate_position'] ?></p>
				<h2><?php echo $row['first_name'].' '.$row['last_name']?></h2>

</div></div>
			<?php echo '<img class="img-circle mb-7 hero-image" src="' . $filePath . '" />'?>


<script>
testArray[increment] = '<?php echo $row['id'] ?>'
increment = increment +1;
testArray[increment] = '<?php echo $row['candidate_position'] ?>';
increment = increment+ 1;
</script>
			<!--</div>-->

		</div><!--item-->
		<?php endwhile?>


	</div>

<script type="text/javascript">
var async;
$(".test").click(function(){
async = $.ajaxSetup({
		url: 'ajaxvote.php',
		type: 'POST',
		cache: 'false'
	});

});
		</script>

</body>
</html>