<?php
/*** begin our session ***/
session_start();

/*** first check that both the username, password and form token have been sent ***/
if(!isset( $_POST['first_name'], $_POST['last_name'], $_POST['candidate_student_number'], $_POST['candidate_password'], $_POST['candidate_email'], $_POST['form_token']))
{
    $message = 'Please enter a valid username and password';
    header('Location: RegisterCandidate.php');
}
/*** check the form token is valid ***/
elseif( $_POST['form_token'] != $_SESSION['form_token'])
{
    $message = 'Invalid form submission';
    header('Location: RegisterCandidate.php');
}
/*** check the username is the correct length ***/
elseif (strlen( $_POST['first_name']) > 20 || strlen($_POST['first_name']) < 1)
{
    $message = 'Incorrect Length for Username';
   header('Location: RegisterCandidate.php');
}
elseif (strlen( $_POST['last_name']) > 20 || strlen($_POST['last_name']) < 1)
{
    $message = 'Incorrect Length for Username';
   header('Location: RegisterCandidate.php');
}
/*** check the password is the correct length ***/
elseif (strlen( $_POST['candidate_password']) > 20 || strlen($_POST['candidate_password']) < 4)
{
    $message = 'Incorrect Length for Password';
    header('Location: RegisterCandidate.php');
}
/*** check the username has only alpha numeric characters ***/
elseif (ctype_alnum($_POST['first_name']) != true)
{
    /*** if there is no match ***/
    $message = "Username must be alpha numeric";
   header('Location: RegisterCandidate.php');
}
elseif (ctype_alnum($_POST['last_name']) != true)
{
    /*** if there is no match ***/
    $message = "Username must be alpha numeric";
   header('Location: RegisterCandidate.php');
}

/*** check the password has only alpha numeric characters ***/
elseif (ctype_alnum($_POST['candidate_password']) != true)
{
        /*** if there is no match ***/
        $message = "Password must be alpha numeric";
        header('Location: RegisterCandidate.php');
}
else
{
    /*** if we are here the data is valid and we can insert it into database ***/
    header('Location: CandidateProcessing.php');
    $first_name = filter_var($_POST['first_name'], FILTER_SANITIZE_STRING);
    $last_name = filter_var($_POST['last_name'], FILTER_SANITIZE_STRING);
    $candidate_student_number = filter_var($_POST['candidate_student_number'], FILTER_SANITIZE_STRING);
    $candidate_password = filter_var($_POST['candidate_password'], FILTER_SANITIZE_STRING);
    $candidate_email = filter_var($_POST['candidate_email'], FILTER_SANITIZE_STRING);

    /*** now we can encrypt the password ***/
    $candidate_password = sha1( $candidate_password );

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
        $stmt = $dbh->prepare("INSERT INTO candidate_details (first_name, last_name, candidate_student_number, candidate_password, candidate_email ) VALUES (:first_name, :last_name, :candidate_student_number, :candidate_password, :candidate_email )");

        /*** bind the parameters ***/
        $stmt->bindParam(':first_name', $first_name, PDO::PARAM_STR);
        $stmt->bindParam(':last_name', $last_name, PDO::PARAM_STR);
        $stmt->bindParam(':candidate_student_number', $candidate_student_number, PDO::PARAM_STR);
        $stmt->bindParam(':candidate_password', $candidate_password, PDO::PARAM_STR, 40);
        $stmt->bindParam(':candidate_email', $candidate_email, PDO::PARAM_STR);



        /*** execute the prepared statement ***/
        $stmt->execute();

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
            header('Location: RegisterCandidate.php');
        }
    }
}
?>
