<?php
echo 'Hello World';
// PHP Data Objects(PDO) Sample Code:
try {
    $conn = new PDO("sqlsrv:server = tcp:remy-sql-123-test.database.windows.net,1433; Database = test-123-remy-sql", "Remy", "{Pavard#5}");
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch (PDOException $e) {
    print("Error connecting to SQL Server.");
    die(print_r($e));
}

// SQL Server Extension Sample Code:
$connectionInfo = array("UID" => "Remy", "pwd" => "{Pavard#5}", "Database" => "test-123-remy-sql", "LoginTimeout" => 30, "Encrypt" => 1, "TrustServerCertificate" => 0);
$serverName = "tcp:remy-sql-123-test.database.windows.net,1433";
$conn = sqlsrv_connect($serverName, $connectionInfo);
?>


?>