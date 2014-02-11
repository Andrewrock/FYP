<?php

/*** begin our session ***/
session_start();

/*** check if the users is already logged in ***/
if(isset( $_SESSION['admin_user_id'] ))
{
    $message = 'Users is already logged in';
    header('Location: adminlogin.php');
}
/*** check that both the username, password have been submitted ***/
if(!isset( $_POST['admin_username'], $_POST['admin_password']))
{
    $message = 'Please enter a valid username and password';
    header('Location: ladminogin.php');
}
/*** check the username is the correct length ***/
elseif (strlen( $_POST['admin_username']) > 20 || strlen($_POST['admin_username']) < 4)
{
    $message = 'Incorrect Length for Username';
    header('Location: adminlogin.php');
}
/*** check the password is the correct length ***/
elseif (strlen( $_POST['admin_password']) > 20 || strlen($_POST['admin_password']) < 4)
{
    $message = 'Incorrect Length for Password';
    header('Location: adminlogin.php');
}
/*** check the username has only alpha numeric characters ***/
elseif (ctype_alnum($_POST['admin_username']) != true)
{
    /*** if there is no match ***/
    $message = "Username must be alpha numeric";
    header('Location: adminlogin.php');
}
/*** check the password has only alpha numeric characters ***/
elseif (ctype_alnum($_POST['admin_password']) != true)
{
        /*** if there is no match ***/
        $message = "Password must be alpha numeric";
        header('Location: adminlogin.php');
}
else
{
header('Location: AdminHome.php');
    /*** if we are here the data is valid and we can insert it into database ***/
    $admin_username = filter_var($_POST['admin_username'], FILTER_SANITIZE_STRING);
    $admin_password = filter_var($_POST['admin_password'], FILTER_SANITIZE_STRING);

    /*** now we can encrypt the password ***/
    $admin_password = sha1( $admin_password );

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
        $stmt = $dbh->prepare("SELECT admin_user_id, admin_username, admin_password FROM admin_details
                    WHERE admin_username = :admin_username AND admin_password = :admin_password");

        /*** bind the parameters ***/
        $stmt->bindParam(':admin_username', $admin_username, PDO::PARAM_STR);
        $stmt->bindParam(':admin_password', $admin_password, PDO::PARAM_STR, 40);

        /*** execute the prepared statement ***/
        $stmt->execute();

        /*** check for a result ***/
        $admin_user_id = $stmt->fetchColumn();

        /*** if we have no result then fail boat ***/
        if($admin_user_id == false)
        {
                $message = 'Login Failed';
        }
        /*** if we do have a result, all is well ***/
        else
        {
                /*** set the session user_id variable ***/
                $_SESSION['admin_user_id'] = $admin_user_id;

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

