<?php
//session_start
@session_start();
//$host="sql8.freesqldatabase.com";//taking host name of database
//$user="sql8514306";//taking user name of databse
//$pw="le6WR8JQgb";//taking password
//$schema="sql8514306";//taking the schema name to connect
$host="localhost";//taking host name of database
$user="sanjaykumar";//taking user name of databse
$pw="sanjaythings";//taking password
$schema="blackadam";//taking the schema name to connect
$mysqli=mysqli_connect($host,$user,$pw,$schema);//returns database handle - representation of connectn. of php to database

//CONNECT TO MySQL
if(!$mysqli){
    echo "connection failed<br>";
    echo "ERROR NUMBER:".mysqli_connect_errno(). "<br>";
    echo "ERROR MESSAGE:".mysqli_connect_error(). "<br>";
    die();
}


//open Products database
// if(!mysqli_select_db($database ,$schema ) )
// {
//     die("Could not open dk_testn_mysql database</body></html> ") ;
// }

//echo "connected successfully<br>";
?>