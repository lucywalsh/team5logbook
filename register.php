<!--PHP-->
<?php
    $myServer = "team5logbook.database.windows.net";
    $myUser = "team5logbook";
    $myPass = "adminPassword123";
    $myDB = "logbookdatabase";

    //connection to the database
    $dbhandle = mssql_connect($myServer, $myUser, $myPass)
      or die("Couldn't connect to SQL Server on $myServer");

    //select a database to work with
    $selected = mssql_select_db($myDB, $dbhandle)
      or die("Couldn't open database $myDB");

    //declare the SQL statement that will query the database
    $query = "INSERT INTO userLogin (name, email) VALUES ('Jess','Jess@gmail.com')";


    //execute the SQL query and return records
    $result = mssql_query($query);

    //close the connection
    mssql_close($dbhandle);

?>

<html>
<body>
	Welcome <?php echo $_GET["name"];?><br>
	Your email address is: <?php echo $_GET["email"]; ?><br>

</body>
</html>