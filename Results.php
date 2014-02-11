<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Confirmation of registration</title>
    <link href="css/bootstrap.css" rel="stylesheet" type="text/css">
    <link href="css/Results.css" rel="stylesheet" type="text/css">
    <link href="css/Graph.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="http://cdn.oesmith.co.uk/morris-0.4.3.min.css" type="text/css">
    <script src="http://code.jquery.com/jquery-2.0.3.min.js" type="text/javascript">
	</script>
    <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js" type="text/javascript">
	</script>
    <script src="scripts/jquery.easypiechart.min.js" type="text/javascript">
	</script>
</head>

<body>
    <div id="wrapper">
        <!-- Sidebar -->

        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <!-- Brand and toggle get grouped for better mobile display -->

            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse"><span class="sr-only">Toggle navigation</span></button> <a class="navbar-brand" href="user.html">Uvote</a>
            </div><!-- Collect the nav links, forms, and other content for toggling -->

            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav side-nav">
                    <li class="active"><a href="Ongoing.php">On-going Elections</a></li>
					<li><a href="User.html"><i class="fa fa-desktop"></i> Home</a></li>
                    <li><a href="NewCandidate.html">Contact Candidates</a></li>

                    <li><a href="Previous.php">Previous elections</a></li>

                    <li><a href="RegisterCandidate.php">Register as candidate</a></li>

                    <li><a href="User.html">Home</a></li>

                    <li><a href="logout.php">Logout</a></li>
                </ul>
            </div><!-- /.navbar-collapse -->
        </nav>

        <div class="panel">
            <div class="ctrl">
                <span>_</span> <span>&times;</span>
            </div>

            <div class="chart">
                <div class="percentage" data-percent="21">
                    <span>21</span><sup>%</sup>
                </div>

                <div class="label">
                    New visits
                </div>
            </div>

            <div class="chart">
                <div class="percentage" data-percent="46">
                    <span>46</span><sup>%</sup>
                </div>

                <div class="label">
                    Bounce rate
                </div>
            </div>
        </div>
        <script>
$('.percentage').easyPieChart({
  animate: 1000,
  lineWidth: 4,
  onStep: function(value) {
    this.$el.find('span').text(Math.round(value));
  },
  onStop: function(value, to) {
    this.$el.find('span').text(Math.round(to));
  }
});        </script>
    </div>
</body>
</html>
