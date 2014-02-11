<?php
$file_exts = array("jpg", "bmp", "jpeg", "gif", "png");
$upload_exts = end(explode(".", $_FILES["file"]["name"]));
if ((($_FILES["file"]["type"] == "image/gif")
		|| ($_FILES["file"]["type"] == "image/jpeg")
		|| ($_FILES["file"]["type"] == "image/png")
		|| ($_FILES["file"]["type"] == "image/pjpeg"))
	&& ($_FILES["file"]["size"] < 4000000)
	&& in_array($upload_exts, $file_exts))
{
	if ($_FILES["file"]["error"] > 0)
	{
		echo "Return Code: " . $_FILES["file"]["error"] . "<br>";
	}
	else
	{
		echo "Upload: " . $_FILES["file"]["name"] . "<br>";
		echo "Type: " . $_FILES["file"]["type"] . "<br>";
		echo "Size: " . ($_FILES["file"]["size"] / 1024) . " kB<br>";
		echo "Temp file: " . $_FILES["file"]["tmp_name"] . "<br>";

		// Enter your path to upload file here
		if (file_exists("uploads/" .
				$_FILES["file"]["name"]))
		{
			echo "<div class='error'>"."(".$_FILES["file"]["name"].")".
				" Unfortunately somebody has already uploaded an image that is either the exact the same, or has the same name.If you rename the file, everything will be ok. "."</div>";
		}
		else
		{
			move_uploaded_file($_FILES["file"]["tmp_name"],"uploads/" . $_FILES["file"]["name"]);

				$uploadDir = '/uploads/';
				$fileName = $_FILES['file']['name'];
				$filePath = $uploadDir . $_FILES["file"]["name"];
				$path =$uploadDir;
				//gets the file extension
				$ext = substr($fileName, strpos($fileName,'.'), strlen($fileName)-1);

			/*** if we are here the data is valid and we can insert it into database ***/
			header('Location: Confirm.php');

			/*** connect to database ***/
			/*** mysql hostname ***/
			$mysql_hostname = 'localhost';

			/*** mysql username ***/
			$mysql_username = 'root';

			/*** mysql password ***/
			$mysql_password = '';

			/*** database name ***/
			$mysql_dbname = 'UVOTE';


			$dbh = new PDO("mysql:host=$mysql_hostname;dbname=$mysql_dbname", $mysql_username, $mysql_password);
			/*** $message = a message saying we have connected ***/

			/*** set the error mode to excptions ***/
			$dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

			/*** prepare the insert ***/
			$stmt = $dbh->prepare("UPDATE candidate_details SET image_path ='$filePath' ORDER by candidate_user_id DESC LIMIT 1 ");

			/*** bind the parameters ***/
			$stmt->bindParam(':image_path', $filePath, PDO::PARAM_STR);

			/*** execute the prepared statement ***/
			$stmt->execute();



		}
	}
}
else
{
	echo "<div class='error'>We try our best to support as many image types as possible, we currently support .png, .jpg, .jpeg, .gif, and .bmp, Please try again with an image in these formats</div>";
}
?>
