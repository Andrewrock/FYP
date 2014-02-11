<?php
/*** begin our session ***/
session_start();

/*** first check that both the username, password and form token have been sent ***/
if(!isset( $_POST['student_username'], $_POST['student_password'], $_POST['student_email'], $_POST['form_token']))
{
    $message = 'Please enter a valid username and password';
    header('Location: Singup.php');
}
/*** check the form token is valid ***/
elseif( $_POST['form_token'] != $_SESSION['form_token'])
{
    $message = 'Invalid form submission';
    header('Location: Signup.php');
}
/*** check the username is the correct length ***/
elseif (strlen( $_POST['student_username']) > 20 || strlen($_POST['student_username']) < 4)
{
    $message = 'Incorrect Length for Username';
    header('Location: Signup.php');
}
/*** check the password is the correct length ***/
elseif (strlen( $_POST['student_password']) > 20 || strlen($_POST['student_password']) < 4)
{
    $message = 'Incorrect Length for Password';
    header('Location: Signup.php');
}
/*** check the username has only alpha numeric characters ***/
elseif (ctype_alnum($_POST['student_username']) != true)
{
    /*** if there is no match ***/
    $message = "Username must be alpha numeric";
    header('Location: Signup.php');
}
/*** check the password has only alpha numeric characters ***/
elseif (ctype_alnum($_POST['student_password']) != true)
{
        /*** if there is no match ***/
        $message = "Password must be alpha numeric";
        header('Location: Signup.php');
}
else
{
    /*** if we are here the data is valid and we can insert it into database ***/
    header('Location: user.html');
    $student_username = filter_var($_POST['student_username'], FILTER_SANITIZE_STRING);
    $student_password = filter_var($_POST['student_password'], FILTER_SANITIZE_STRING);
    $student_email = filter_var($_POST['student_email'], FILTER_SANITIZE_STRING);

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

        /*** prepare the insert ***/
        $stmt = $dbh->prepare("INSERT INTO student_details (student_username, student_password, student_email ) VALUES (:student_username, :student_password, :student_email )");

        /*** bind the parameters ***/
        $stmt->bindParam(':student_username', $student_username, PDO::PARAM_STR);
        $stmt->bindParam(':student_password', $student_password, PDO::PARAM_STR, 40);
        $stmt->bindParam(':student_email', $student_email, PDO::PARAM_STR);
        


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
        }
        else
        {
            /*** if we are here, something has gone wrong with the database ***/
            $message = 'We are unable to process your request. Please try again later"';
            header('Location: Signup.php');
        }
    }
}
?>
