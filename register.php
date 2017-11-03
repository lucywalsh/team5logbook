<html>
<body>
	Welcome <?php echo $_GET["name"];?><br>
	Your email address is: <?php echo $_GET["email"]; ?><br>

</body>
</html>

<!--PHP-->
<?php
    // PHP Data Objects(PDO) Sample Code:
try {
    $conn = new PDO("sqlsrv:server = tcp:team5logbook.database.windows.net,1433; Database = logbookdatabase", "team5logbook", "adminPassword123");
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch (PDOException $e) {
    print("Error connecting to SQL Server.");
    die(print_r($e));
}

// SQL Server Extension Sample Code:
$connectionInfo = array("UID" => "team5logbook@team5logbook", "pwd" => "adminPassword123", "Database" => "logbookdatabase", "LoginTimeout" => 30, "Encrypt" => 1, "TrustServerCertificate" => 0);
$serverName = "tcp:team5logbook.database.windows.net,1433";
$conn = sqlsrv_connect($serverName, $connectionInfo);


    //declare the SQL statement that will query the database
    $query = "INSERT INTO userLogin (name, email) VALUES ('Jess','Jess@gmail.com')";

    //execute the SQL query and return records
    $result = mssql_query($query)
    or die('A error occured: ' . mysql_error());

    $result2 = mssql_query("SELECT * FROM userLogin");

    echo $query;
    echo $result;
    echo $result2;
    echo "hello";

?>

