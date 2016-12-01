<?php
include 'db.inc.php';
// Connect to MySQL DBMS
if (!($connection = @ mysql_connect($hostName, $username,
    $password)))
    showerror();
// Use the roasters database
if (!mysql_select_db($databaseName, $connection))
    showerror();

$query = "SELECT adminSSN, fname, lname FROM admin";
if (!($result = @ mysql_query ($query, $connection)))
    showerror();

?>