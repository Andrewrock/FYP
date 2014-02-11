<?php

$host="localhost"; // Host name 
$username="root"; // Mysql username 
$password=""; // Mysql password 
$db_name="Elections"; // Database name 
$tbl_name="Class_Elections"; // Table name 

// Connect to server and select database.
mysql_connect("$host", "$username", "$password")or die("cannot connect"); 
mysql_select_db("$db_name")or die("cannot select DB");

// Get values from form 
$Election_title=$_POST['Election_title'];
$Election_start=$_POST['Election_start'];
$Election_end=$_POST['Election_end'];
$Election_deadline=$_POST['Election_deadline'];
$Year=$_POST['Year'];


// Insert data into mysql 
$sql="INSERT INTO $tbl_name(Election_title, Election_start, Election_end, Election_deadline, Year)VALUES('$Election_title', '$Election_start', '$Election_end', '$Election_deadline' ,'$Year')";
$result=mysql_query($sql);

// if successfully insert data into database, displays message "Successful". 
if($result){
 header('Location: Adminhome.html');
}

else {
 header('Location: ClassCreate.php');
}


// close connection 
mysql_close();
?>