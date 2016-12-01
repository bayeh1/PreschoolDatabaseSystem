<table border="1">
<?php
include 'db.inc.php';
// Connect to MySQL DBMS
if (!($connection = @ mysql_connect($hostName, $username,
    $password)))
    showerror();
// Use the roasters database
if (!mysql_select_db($databaseName, $connection))
    showerror();

// Create SQL statement
$query = $_POST["test"];
// Execute SQL statement
if (!($result = @ mysql_query ($query, $connection)))
    showerror();
// Display results
while ($row = @ mysql_fetch_array($result)){
    echo "<tr>";
    foreach ($row as $value){
        echo "<td>$value</td>";
    }
    echo "</tr>";
}

?>
</table>
