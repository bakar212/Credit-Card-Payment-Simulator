<?php 
$servername = "localhost";
$username = "root";
$password = "";
$database = "creditcard";

$databaseConn = new mysqli($servername,$username,$password,$database);//connection to database established

/*
if($databaseConn->connect_errno){//if an error exists with the connection
	die("ERROR!Connection Unsuccessful!".$databaseConn->connect_error);
}
else {
	echo "(DATABASE CONNECTION SUCCESSFUL)"."<br>";
}
*/

//------------------------------------------------------------------------------------------------------------------------------------------------------


$sqlQuery = "SELECT COUNT(ccnum) FROM `card`";//sql statement which returns an integer value for the numbers of rows 
$result = $databaseConn->query($sqlQuery) or die($databaseConn->error);

while($row = $result->fetch_assoc()){
	$rowResult = $row["COUNT(ccnum)"];//value stored in new variable
}


$PK_ID = $rowResult+1;//primary key id (#) basedupon number of rows in database + 1

//----------------------------------------------------------------------------------------------------------------------------------------------------

$mainSqlQuery = "INSERT INTO`card`(`#`,`ccnum`,`expdate`,`seccode`)Values($PK_ID,'$maskedCardNum','$sqlDate',$seccode)";

$result = $databaseConn->query($mainSqlQuery) or die($databaseConn->error);//query applied to mySQL/if not then end the script and show error

/*
if($result){//if the sql query executes successfully
	echo "(NEW RECORD CREATED SUCCESSFULLY)";
}
else {
	echo "ERROR!".$databaseConn->error;
}
*/

//-----------------------------------------------------------------------------------------------------------------------------------------------------

$databaseConn->close();//close connection to the database



?>