<?php
/**
 * Date: 03/02/2017
 * Time: 8:30 PM
 */
# file that connects to database
 include 'connect.php'; 
#used to get the connect variable from connect.php and store it in the variable $connect.
$connect=$_SESSION['connect']; 
session_start();
#gets the values entered by the user and stores it in a variable. it also escapes any special characters to help prevent SQL Injection.
#gets ID from database and adds one to it.
$sqlFetchID = mysqli_fetch_assoc(mysqli_query($connect, "SELECT COUNT(DISTINCT ID) + 1 AS ID FROM toucantechmembers"));
$ID = $sqlFetchID['ID'];
#ucfirst = uppercase first letter and strtolower makes all enteries lowercase making it easier to query when someone puts all entries in capital or a mixture.
$firstName = ucfirst(strtolower(mysqli_real_escape_string($connect,$_POST['firstName'])));
$lastName = ucfirst(strtolower(mysqli_real_escape_string($connect,$_POST['lastName'])));
$email = strtolower(mysqli_real_escape_string($connect,$_POST['email']));
$schoolID = ucfirst(strtolower(mysqli_real_escape_string($connect,$_POST['school'])));
$sqlschoolName = mysqli_fetch_assoc(mysqli_query($connect, "SELECT School FROM ltblschool WHERE School_ID = '$schoolID'"));
$schoolName = $sqlschoolName['School'];

#Check existing user to give same ID
$SQLQuery = ("SELECT * FROM toucantechmembers");
#runs the $SQLQuery in the database also requires the connection which is why the $connect variable is used.
$fetchMemberTable = mysqli_query($connect,$SQLQuery) or die('query error 1');
if (mysqli_num_rows($fetchMemberTable) > 0)
{
    #start a while loop and sets the variable $row to fetching the data in the SQL database.
    while ($row = mysqli_fetch_assoc($fetchMemberTable))
    {
        if($row['FirstName'] == $firstName && $row['LastName'] == $lastName && $row['Email'] == $email && $row['School_ID'] == $schoolID)
        {
            echo "<script> alert('USER ALREADY EXISTS IN THAT SCHOOL!!')
                window.location = 'index.html';</script>";
            exit();
        }
        elseif($row['FirstName'] == $firstName && $row['LastName'] == $lastName && $row['Email'] == $email)
        {    #if the firstname lastname and email are the same but they go to another school it sets the $ID variable to the ID of the user on the database.
            $ID = $row['ID'];
        }
    }
}

#stores Error cannot find database in the $sql_db_error variable.
$sql_db_error= 'Error cannot find database';
# creates the SQL query or gives an error message.
$query = "Insert INTO toucantechmembers (ID,FirstName, LastName, Email, School, School_ID) VALUES ('$ID', '$firstName', '$lastName', '$email', '$schoolName', '$schoolID')" or die ($sql_db_error);
#sends query to mySQL or gives error message error data cannot be added to database
$db = mysqli_query($connect,$query) or die('error, data cannot be added to database');



#closes mySQL connection.
mysqli_close($connect);

#js to display data submitted successfully in a dialog box and when OK is pressed it sends you back to the index.html page.
#prints information successfully submitted.
echo "<script> alert('data submitted successfully.')
       window.location = 'index.html';</script>";


?>