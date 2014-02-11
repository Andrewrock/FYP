
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Class Election</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.css" rel="stylesheet">

    <!-- Add custom CSS here -->
    <link href="css/ClassCreate.css" rel="stylesheet">

	
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <!-- Page Specific CSS -->
    <link rel="stylesheet" href="http://cdn.oesmith.co.uk/morris-0.4.3.min.css">
    
	<link rel="stylesheet" href="http://code.jquery.com/ui/1.10.3/themes/smoothness/jquery-ui.css" />
	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script>
	<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.8.11/jquery-ui.min.js"></script>
	<script type="text/javascript" src="scripts/jquery-1.9.1.min.js"></script>
	<script src="http://code.jquery.com/jquery-1.9.1.js"></script>
	<script src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>
	
	<script src="scripts/jquery.js"></script>
	<script src="scripts/jquery.validate.js"></script>
	
  	<script>
	  $(function() {
	  $( "#Election_start" ).datepicker({dateFormat: "dd-mm-yy"});
	  });
	 </script>
	 
	 <script>
	  $(function() {
	  $( "#Election_end" ).datepicker({dateFormat: "dd-mm-yy"});
	  });
	 </script>
	 
	 <script>
	  $(function() {
	  $( "#Election_deadline" ).datepicker({dateFormat: "dd-mm-yy"});
	  });
	 </script>
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
            <li><a href="charts.html"><i class="fa fa-bar-chart-o"></i> Previous Elections</a></li>
            <li><a href="SelectElection.html"><i class="fa fa-table"></i> Create Election</a></li>
            <li><a href="ReminderEmail.html"><i class="fa fa-edit"></i> Send reminder emails</a></li>
            <li><a href="AdminSignup.php"><i class="fa fa-font"></i> Add Admin</a></li>
            <li><a href="AdminHome.html"><i class="fa fa-desktop"></i> Home</a></li>
            <li><a href="Adminlogout.php"><i class="fa fa-pencil"></i> Logout</a></li>
            
            </li>
          </ul>

         </div><!-- /.navbar-collapse -->
      </nav>
      
      
			<div class="row">
  			<div class="col-lg-13">
	  		<div class="panel panel-primary">
		  	<div class="panel-heading">
			<h3 class="panel-title"><i class="fa fa-bar-chart-o"></i> Create Election </h3>
			</div>
			<div class="panel-body">
			<h1 class="blue">Fill out the form below</h1>
				<hr>
        
         <form action="ClassCreate_Submit.php" class="create" method="post">

		<p class="textbox">Election Title<input type="text" id="Election_title" name="Election_title" /></p>
        <div class="demo">
		 <p class="textbox">Election start date: <input type="text" id="Election_start" name="Election_start" /></p>
        </div>
        <div class="demo">
         <p class="textbox">Election end date: <input type="text" id="Election_end" name="Election_end" /></p>
        </div>
         <div class="demo">
         <p class="textbox">Deadline to register as candidate: <input type="text" id="Election_deadline" name="Election_deadline" /></p>
         </div>
       
			      	        
           <div class="radios">
           <p class="textbox">Which year is the election for</p>
	<input id="Year" type="radio" name="Year" data-rel="Positions" class="trigger" value="1stYears">
	<label for="Year">1st Years</label>
	
	<input id="Year1" type="radio" name="Year" data-rel="Positions" class="trigger" value="2ndYears">
	<label for="Year1">2nd Years</label>
	
	<input id="Year2" type="radio" name="Year" data-rel="Positions" class="trigger" value="3rdYears">
	<label for="Year2">3rd Years</label>

	<input id="Year3" type="radio" name="Year" data-rel="Positions" class="trigger" value="4thYears">
	<label for="Year3">4th Years</label>

	<input id="Year4" type="radio" name="Year" data-rel="Positions" class="trigger" value="Masters">
	<label for="Year4">Masters</label>
	
</div>
		
			
			<br />
			<div class="buttons">
			
    <button class="btn btn-primary">Submit</button>
    <input type="reset" value="Clear" id="Reset" class="btn btn-danger" />
    
			</div>
        </form>
              </div></div></div></div>
      
 

<script>
$('#Reset').click(function(){
            $('#Election')[0].reset();
 });
 </script>
 
  <script>
	 $('.trigger').click(function(){
		 $('.content').show();
		 $('.' +(this).data('rel')).show();
	 });
 </script>
 

  
  
      
      
    <!-- Bootstrap core JavaScript -->
     <!-- Bootstrap core JavaScript -->
   
    <script src="scripts/bootstrap.js"></script>
    <!-- Page Specific Plugins -->
    
    <script src="http://cdn.oesmith.co.uk/morris-0.4.3.min.js"></script>
    <script src="scripts/chart-data-morris.js"></script>
    <script src="scripts/jquery.tablesorter.js"></script>
    <script src="scripts/tables.js"></script>

  </body>
</html>
