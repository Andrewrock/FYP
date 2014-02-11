<?php


/*** first check that both the username, password and form token have been sent ***/
if(!isset( $_POST['candidate_position']))
{
    $message = 'Please enter a valid username and password';
    header('Location: CandidateProcessing.php');
}


else
{
    /*** if we are here the data is valid and we can insert it into database ***/
    header('Location: CanidateImage.php');


    $candidate_position = filter_var($_POST['candidate_position'], FILTER_SANITIZE_STRING);
	$candidate_user_id = mysql_query("SELECT MAX(candidate_user_id ) FROM candidate_details");

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

        $stmt = $dbh->prepare("UPDATE candidate_details set candidate_position = '$candidate_position' ORDER by candidate_user_id DESC LIMIT 1 ");





        /*** bind the parameters ***/
        $stmt->bindParam(':candidate_position', $candidate_position, PDO::PARAM_STR);



        /*** execute the prepared statement ***/
        $stmt->execute();


    }
    catch(Exception $e)
    {

            /*** if we are here, something has gone wrong with the database ***/
            $message = 'We are unable to process your request. Please try again later"';
            header('Location: CandidateProcessing.php');

    }
}
?>
