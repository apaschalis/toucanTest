                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                     <?php



/**





 * Date: 03/02/2017



 * Time: 7:45 PM



 */







#database connection information such as hostname, username, password and database.



$hostname = 'sql300.byethost12.com';

#$hostname1= 'sql300.byetcluster.com';



$sql_username= 'b12_19603876';



$sql_password= 'Andrew1993';



$database= 'b12_19603876_ToucanTechDB';







$connect = mysqli_connect('127.0.0.1','root','','toucantechdb') or die (mysqli_connect_error());



$_SESSION['connect']=$connect;







# mysqli_select_db($connect,'Clients') or die($sql_db_error);



























?>