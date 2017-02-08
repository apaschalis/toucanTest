<?php
/**
 * Date: 04/02/2017
 * Time: 8:34 PM
 */
include 'connect.php';#used in order to connect to the database.
#get connection variable from the connect.php file and store it in variable $connect.
$connect = $_SESSION['connect'];
#gets the posted school ID from the index.html file when the Display all clients of a school button is pressed.
$schoolID = $_POST['schools'];
#SQL query that is stored in $SQLQuery. joins the two tables ttcm represents toucantechmembers table and ltbs represents the ltblschool table. Joins the School_ID in both tables.
$SQLQuery = ("SELECT ID, FirstName, LastName, Email, ttcm.School FROM toucantechmembers as ttcm JOIN ltblschool as ltbs ON ttcm.School_ID = ltbs.School_ID WHERE ttcm.School_ID = '$schoolID'");
#runs the $SQLQuery in the database also requires the connection which is why the $connect variable is used.
$query = mysqli_query($connect,$SQLQuery) or die('query error 1');

#HTML Table Creation
echo '<h2 align="center"><u><b> Results </b></u></h2>';
echo '<table align="center" class=""  border = "1" id="table"  style="width:60%"> ';
echo   '<thead>';
echo  '<tr>';
echo  '<th> ID: </th>';
echo  '<th> First Name: </th>';
echo  '<th> Last Name: </th>';
echo   '<th> Email: </th>';
echo   '<th> School: </th>';
echo   '</tr>';
echo   '</thead>';


# if there is a greater number of rows than 0 in the SQL table then add the data to the HTML table.

if (mysqli_num_rows($query) > 0) {
    #start a while loop and sets the variable $row to fetching the data in the SQL database.
    while ($row = mysqli_fetch_assoc($query))
    {



          # extract($row);
  #$row can be used like an array to call each table column element seperately.
        echo '<tbody>';
        echo '<tr >';
        echo '<td>' . $row['ID'] . '</td>';
        echo '    ';
        echo '<td>'. $row['FirstName']. '</td>';
        echo '    ';
        echo '<td>'. $row['LastName']. '</td>';
        echo '   ';
        echo '<td>' . $row['Email']. '</td>';
        echo '    ';
        echo '<td>' . $row['School']. '</td>';
        echo '</tr>';
        echo '</tbody>';
    }
        echo '</table>';

}



# else is run when no information is found in the database.
else
{
    echo "<script> alert('0 results')
       window.location = 'index.html';</script>";
}

    #header('Location: index.html');
  #close connection.
mysqli_close($connect);
   #sends you back to the index.html page.
echo '<br>';
 echo '<div> <a href="index.html"> Click here to go back </a></div>';
?>

<html>
<head>
    <link href="css/bootstrap.css" rel="stylesheet"/>
</head>

</html>