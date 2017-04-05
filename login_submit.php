<?php

/*** begin our session ***/
session_start();

/*** check if the users is already logged in ***/
if(isset( $_SESSION['login_user'] == $_POST['username'] ))
{
    $message = 'Users is already logged in';
}
/*** check that both the username, password have been submitted ***/
if(!isset( $_POST['username'], $_POST['password']))
{
    $message = 'Please enter a valid username and password';
}
/*** check the username is the correct length ***/
elseif (strlen( $_POST['username']) > 100 || strlen($_POST['username']) < 4)
{
    $message = 'Incorrect Length for Username';
}
/*** check the password has only alpha numeric characters ***/
elseif (ctype_alnum($_POST['password']) != true)
{
        /*** if there is no match ***/
        $message = "Password must be alpha numeric";
}
else
{
    /*** if we are here the data is valid and we can insert it into database ***/
    $username = filter_var($_POST['username'], FILTER_SANITIZE_STRING);
    $password = filter_var($_POST['password'], FILTER_SANITIZE_STRING);

    // /*** now we can encrypt the password ***/
    // $phpro_password = sha1( $phpro_password );
    
    // /*** connect to database ***/
    // /*** mysql hostname ***/
    // $mysql_hostname = 'localhost';

    // /*** mysql username ***/
    // $mysql_username = 'root';

    // /*** mysql password ***/
    // $mysql_password = '';

    // /*** database name ***/
    // $mysql_dbname = 'siteusers';

    $db = mysqli_connect('localhost', 'root', '', 'siteusers') or die('Problem connection to server.');
    $sql ="SELECT Name FROM customers WHERE Email = '$username' AND Password = '$password'";
    $result = mysqli_query($db, $sql) or die('query failed');
    $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
    $count = mysqli_num_rows($result);
    if($count == 1) {
        // session_register("Name");
        $_SESSION['login_user'] = $username;
         
         header("location: memberIndex.php");
    }else {
         $error = "Your Login Name or Password is invalid";
    }


    // try
    // {
    //     $dbh = new PDO("mysql:host=$mysql_hostname;dbname=$mysql_dbname", $mysql_username, $mysql_password);
    //     /*** $message = a message saying we have connected ***/

    //     /*** set the error mode to excptions ***/
    //     $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    //     /*** prepare the select statement ***/
    //     $stmt = $dbh->prepare("SELECT phpro_user_id, phpro_username, phpro_password FROM customers 
    //                 WHERE Email = :phpro_username AND Password = :phpro_password");

    //     /*** bind the parameters ***/
    //     $stmt->bindParam(':phpro_username', $phpro_username, PDO::PARAM_STR);
    //     $stmt->bindParam(':phpro_password', $phpro_password, PDO::PARAM_STR, 40);

    //     /*** execute the prepared statement ***/
    //     $stmt->execute();

    //     /*** check for a result ***/
    //     $user_id = $stmt->fetchColumn();

    //     /*** if we have no result then fail boat ***/
    //     if($user_id == false)
    //     {
    //             $message = 'Login Failed';
    //     }
    //     /*** if we do have a result, all is well ***/
    //     else
    //     {
    //             /*** set the session user_id variable ***/
    //             $_SESSION['user_id'] = $user_id;

    //             /*** tell the user we are logged in ***/
    //             $message = 'You are now logged in';
    //     }


    // }
    // catch(Exception $e)
    // {
    //     /*** if we are here, something has gone wrong with the database ***/
    //     $message = 'We are unable to process your request. Please try again later';
    //     $phpro_username;
    //     $phpro_password;
    // }
}
?>

<html>
<head>
<title>PHPRO Login</title>
</head>
<body>
<p><?php
		echo $message;
        echo $password;
        echo $username; ?>
</body>
</html>