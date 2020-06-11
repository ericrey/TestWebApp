<?php
  //connection
  $connectionInfo = array("UID" => "ericrey", "pwd" => "ERICdragon123", "Database" => "ddacdbtp047620", 
  "LoginTimeout" => 30, "Encrypt" => 1, "TrustServerCertificate" => 0);
  $serverName = "tcp:ddactp047620.database.windows.net,1433";
  $conn = sqlsrv_connect($serverName, $connectionInfo);
  
  if (!$conn)
  {
    die("Error connection: ".sqlsrv_errors());
  }
//   echo "Connection Success";
//display table
echo "<table border= '1'";
$sql= "SELECT * FROM [dbo].[restaurant]";
$getResults= sqlsrv_query($conn, $tsql);
if ($getResult == FALSE)
{
  die(sqlsrv_errors());
}
while ($row = sqlsrv_fetch_array($getResult, SQLSRV_FETCH_ASSOC))
{
  echo "<tr>";
  echo "<td>". $row['restaurant_id'] . "</td>";
  echo "<td>". $row['restaurant_name'] ."</td>";
  echo "<td>". $row['restaurant_address'] . "</td>";
  echo "<td>". $row['restaurant_phone'] . "</td>";
  echo "</tr>";
}
echo "</table>";

?>
