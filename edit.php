<?php
/*

EDIT.PHP

Allows user to edit specific entry in database

*/



// creates the edit record form

// since this form is used multiple times in this file, I have made it a function that is easily reusable
include ('db.inc.php');

function renderForm($id, $firstname, $lastname)
{
  if (!($connection = @ mysql_connect($hostName, $username,
      $password)))
      showerror();
  // Use the roasters database
  if (!mysql_select_db($databaseName, $connection))
      showerror();
?>
<!DOCTYPE html>
<html>
<head>
<title>Edit Record</title>
</head>
<body>

<?php
// if there are any errors, display them
if ($error != '')
{
echo '<div style="padding:4px; border:1px solid red; color:red;">'.$error.'</div>';
}
?>
<form action="" method="post">

<input type="hidden" name="id" value="<?php echo $id; ?>"/>

<div>

<p><strong>ID:</strong> <?php echo $id; ?></p>
<strong>First Name: </strong> <input type="text" name="firstname" value="<?php echo $firstname; ?>"/><br/>
<strong>Last Name: </strong> <input type="text" name="lastname" value="<?php echo $lastname; ?>"/><br/>
<strong>Age: </strong> <input type="text" name="age" value="<?php echo $age; ?>"/><br/>
<strong>Parent: </strong> <input type="text" name="lastname" value="<?php echo $lastname; ?>"/><br/>

<input type="submit" name="submit" value="Submit">
</div>
</form>
</body>
</html>

<?php
}

// check if the form has been submitted. If it has, process the form and save it to the database
if (isset($_POST['submit'])){

// confirm that the 'id' value is a valid integer before getting the form data

if (is_numeric($_POST['studentSSN'])){

// get form data, making sure it is valid
$id = $_POST['studentSSN'];

$firstname = mysql_real_escape_string(htmlspecialchars($_POST['fname']));

$lastname = mysql_real_escape_string(htmlspecialchars($_POST['lname']));

// check that firstname/lastname fields are both filled in

if ($firstname == '' || $lastname == '')

{

// generate error message

$error = 'ERROR: Please fill in all required fields!';
renderForm($id, $firstname, $lastname, $error);

}
else
{
// save the data to the database
mysql_query("UPDATE student SET firstname='$firstname', lastname='$lastname' WHERE id='$id'")
or die(mysql_error());
// once saved, redirect back to the view page
header("Location: view.php");
}
}
else
{
// if the 'id' isn't valid, display an error
echo 'Error!';
}
}
else
// if the form hasn't been submitted, get the data from the db and display the form
{
// get the 'id' value from the URL (if it exists), making sure that it is valid (checing that it is numeric/larger than 0)
if (isset($_GET['id']) && is_numeric($_GET['id']) && $_GET['id'] > 0)

{
// query db
$id = $_GET['studentSSN'];

$result = mysql_query("SELECT * FROM student WHERE id=$id")

or die(mysql_error());

$row = mysql_fetch_array($result);
// check that the 'id' matches up with a row in the databse
if($row)
{
// get data from db
$firstname = $row['fname'];
$lastname = $row['lname'];
// show form
renderForm($id, $firstname, $lastname, '');
}
else
// if no match, display result
{
echo "No results!";
}
}
else
// if the 'id' in the URL isn't valid, or if there is no 'id' value, display an error
{
echo 'Error!';
}
}
?>
