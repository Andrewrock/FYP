<?php

if(isset($_POST['submit'])) {
	$target = "/Applications/XAMPP/xamppfiles/htdocs/uploads";
	$file_name = $FILES['file']['name'];
	$tmp_dir =$_FILES['file']['tmp_name'];
	
	try
	{
		if(!preg_match('/(gif|jpe?g|png) $/i', $file_name) ||
		!preg_match('/^(image)/', $_FILES['file']['type']) ||
		$_FILES['file']['size'] > 900000)
		{
			throw new Exception("please select a new file");
			exit;
		}
		
		move_uploaded_file($tmp_dir, $target.$file_name);
		$status = true;
	}
	catch (Exception $e)
	{
		echo $e->getMessage();
	}
}

?>
