<html>
<body>
	Welcome <?php echo $_GET["name"];?><br>
	Your email address is: <?php echo $_GET["email"]; ?><br>

<!--PHP-->
<?php

    //declare the SQL statement that will query the database
    $query = "INSERT INTO userLogin (name, email) VALUES ('Jess','Jess@gmail.com')";

    //execute the SQL query and return records
    $result = mssql_query($query)
    or die('A error occured: ' . mysql_error());

    echo "hello";

    $result2 = mssql_query("SELECT * FROM userLogin");

    echo $query;
    echo $result;
    echo $result2;
    

?>

</body>
</html>