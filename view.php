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
  echo "Connection Success";

?>
