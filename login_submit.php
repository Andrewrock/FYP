<?php

/*** begin our session ***/
session_start();

/*** check if the users is already logged in ***/
if(isset( $_SESSION['student_user_id'] ))
{
    $message = 'Users is already logged in';
    header('Location: login.php');
}
/*** check that both the username, password have been submitted ***/
if(!isset( $_POST['student_username'], $_POST['student_password']))
{
    $message = 'Please enter a valid username and password';
    header('Location: login.php');
}
/*** check the username is the correct length ***/
elseif (strlen( $_POST['student_username']) > 20 || strlen($_POST['student_username']) < 4)
{
    $message = 'Incorrect Length for Username';
    header('Location: login.php');
}
/*** check the password is the correct length ***/
elseif (strlen( $_POST['student_password']) > 20 || strlen($_POST['student_password']) < 4)
{
    $message = 'Incorrect Length for Password';
    header('Location: login.php');
}
/*** check the username has only alpha numeric characters ***/
elseif (ctype_alnum($_POST['student_username']) != true)
{
    /*** if there is no match ***/
    $message = "Username must be alpha numeric";
    header('Location: login.php');
}
/*** check the password has only alpha numeric characters ***/
elseif (ctype_alnum($_POST['student_password']) != true)
{
        /*** if there is no match ***/
        $message = "Password must be alpha numeric";
        header('Location: login.php');
}
else
{
header('Location: user.html');
    /*** if we are here the data is valid and we can insert it into database ***/
    $student_username = filter_var($_POST['student_username'], FILTER_SANITIZE_STRING);
    $student_password = filter_var($_POST['student_password'], FILTER_SANITIZE_STRING);

    /*** now we can encrypt the password ***/
    $student_password = sha1( $student_password );
    
    /*** connect to database ***/
    /*** mysql hostname ***/
    $mysql_hostname = 'localhost';

    /*** mysql username ***/
    $mysql_username = 'root';

    /*** mysql password ***/
    $mysql_password = '';

    /*** database name ***/
    $mysql_dbname = 'UVOTE';

    try
    {
        $dbh = new PDO("mysql:host=$mysql_hostname;dbname=$mysql_dbname", $mysql_username, $mysql_password);
        /*** $message = a message saying we have connected ***/

        /*** set the error mode to excptions ***/
        $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        /*** prepare the select statement ***/
        $stmt = $dbh->prepare("SELECT student_user_id, student_username, student_password FROM student_details 
                    WHERE student_username = :student_username AND student_password = :student_password");

        /*** bind the parameters ***/
        $stmt->bindParam(':student_username', $student_username, PDO::PARAM_STR);
        $stmt->bindParam(':student_password', $student_password, PDO::PARAM_STR, 40);

        /*** execute the prepared statement ***/
        $stmt->execute();

        /*** check for a result ***/
        $student_user_id = $stmt->fetchColumn();

        /*** if we have no result then fail boat ***/
        if($student_user_id == false)
        {
                $message = 'Login Failed';
        }
        /*** if we do have a result, all is well ***/
        else
        {
                /*** set the session user_id variable ***/
                $_SESSION['student_user_id'] = $student_user_id;

                /*** tell the user we are logged in ***/
                $message = 'You are now logged in';
        }


    }
    catch(Exception $e)
    {
        /*** if we are here, something has gone wrong with the database ***/
        $message = 'We are unable to process your request. Please try again later"';
    }
}
?>

