
<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Image Upload</title><!-- Bootstrap core CSS -->
    <link href="css/bootstrap.css" rel="stylesheet" type="text/css"><!-- Add custom CSS here -->

    <link rel="stylesheet" href="css/font-awesome.min.css">
     <link href="css/CandidateImage.css" rel="stylesheet" type="text/css">

 <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script>

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



      <form action="UploadImage.php"  class="sign-up" method="post" enctype="multipart/form-data">

             <h1 class="sign-up-title">Upload a image</h1>
			 	<h4 class="info">The image uploaded will be used for elections</h4>
			 	<h4 class="info">A default image will be provided, if you chose not to upload an image.</h4>

            					<div class="buttons">
                           			<div class="fileUpload btn btn-success">
							   			<span>Upload an image</span>
							   			<input type="file"  class="upload" id="file" name="file" id="file"> <br/>
							   			<input type="hidden" name="image" id="image">
							   			</div>
            					</div>


							 <hr>


							 	<div class="buttons">

                                <input type="submit" value="Submit" id="submit" class="btn btn-primary">

							 	</div></form>
        <script>
$('#Reset').click(function(){
            $('#Election')[0].reset();
 });
 </script>






         <!-- Bootstrap core JavaScript -->
         <script src="scripts/bootstrap.js" type="text/javascript"></script> <!-- Page Specific Plugins -->

</body>
</html>
