<?php
/*** begin our session ***/
session_start();

/*** first check that both the username, password and form token have been sent ***/
if(!isset( $_POST['admin_username'], $_POST['admin_password'], $_POST['admin_email'], $_POST['form_token']))
{
    $message = 'Please enter a valid username and password';
}
/*** check the form token is valid ***/
elseif( $_POST['form_token'] != $_SESSION['form_token'])
{
    $message = 'Invalid form submission';
     header('Location: AdminSignup.php');
}
/*** check the username is the correct length ***/
elseif (strlen( $_POST['admin_username']) > 20 || strlen($_POST['admin_username']) < 4)
{
    $message = 'Incorrect Length for Username';
    header('Location: AdminSignup.php');
}
/*** check the password is the correct length ***/
elseif (strlen( $_POST['admin_password']) > 20 || strlen($_POST['admin_password']) < 4)
{
    $message = 'Incorrect Length for Password';
     header('Location: AdminSignup.php');
}
/*** check the username has only alpha numeric characters ***/
elseif (ctype_alnum($_POST['admin_username']) != true)
{
    /*** if there is no match ***/
    $message = "Username must be alpha numeric";
     header('Location: AdminSignup.php');
}
/*** check the password has only alpha numeric characters ***/
elseif (ctype_alnum($_POST['admin_password']) != true)
{
        /*** if there is no match ***/
        $message = "Password must be alpha numeric";
         header('Location: AdminSignup.php');
}
else
{
    /*** if we are here the data is valid and we can insert it into database ***/
    header('Location: AdminHome.php');
    $admin_username = filter_var($_POST['admin_username'], FILTER_SANITIZE_STRING);
    $admin_password = filter_var($_POST['admin_password'], FILTER_SANITIZE_STRING);
    $admin_email = filter_var($_POST['admin_email'], FILTER_SANITIZE_STRING);

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

        /*** prepare the insert ***/
        $stmt = $dbh->prepare("INSERT INTO admin_details (admin_username, admin_password, admin_email ) VALUES (:admin_username, :admin_password, :admin_email )");

        /*** bind the parameters ***/
        $stmt->bindParam(':admin_username', $admin_username, PDO::PARAM_STR);
        $stmt->bindParam(':admin_password', $admin_password, PDO::PARAM_STR, 40);
        $stmt->bindParam(':admin_email', $admin_email, PDO::PARAM_STR);



        /*** execute the prepared statement ***/
        $stmt->execute();

        /*** unset the form token session variable ***/
        unset( $_SESSION['form_token'] );

        /*** if all is done, say thanks ***/
        $message = 'New user added';
    }
    catch(Exception $e)
    {
        /*** check if the username already exists ***/
        if( $e->getCode() == 23000)
        {
            $message = 'Username already exists';
             header('Location: AdminSignup.php');
        }
        else
        {
            /*** if we are here, something has gone wrong with the database ***/
            $message = 'We are unable to process your request. Please try again later"';
             header('Location: AdminSignup.php');
        }
    }
}
?>
