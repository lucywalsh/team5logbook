<html>
<body>
	Welcome <?php echo $_GET["name"];?><br>
	Your email address is: <?php echo $_GET["email"]; ?><br>

<!--PHP-->
<?php



    $result2 = mssql_query("SELECT * FROM userLogin");

    echo $query;
    echo $result;
    echo $result2;
    

?>

</body>
</html>