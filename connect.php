<?php
 $servername = "192.168.0.85";
//  $servername = "192.168.100.91 ";
 $username = "sa";
 $password = "manunggal22";
 $db='pancamanunggal';

try {
 $conn = new PDO("sqlsrv:Server=$servername;Database=$db", $username, $password);
 // set the PDO error mode to exception
 $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch(PDOException $e)
{
 echo "Connection failed: " . $e->getMessage();
}
?>