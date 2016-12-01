<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="scripts.js"></script>
    <title>Preschool Database System</title>
</head>
<body>
<div class="container" id="wrapper">
    <div class="operations" id="truecontent">
        <div class="navigation">
            <ul class="nav nav-tabs leftbar">
                <li  class="active"><a data-toggle="tab" href="#view">Views</a></li>
                <li><a data-toggle="tab" href="#ops">Admin</a></li>
            </ul>
        </div>
        <div class="tab-content">
            <div id="ops" class="tab-pane fade">

                <div class="hbar"><h2>Add New Records</h2></div>
                <ul class="nav nav-pills nav-stacked">
                    <li><a href="addguardian.html">Add Guardian</a></li>
                    <li><a href="addstudent.php">Add Student</a></li>
                    <li><a href="addemployee.php">Add Employee</a></li>
                    <li><a href="addclass.html">Add Class</a></li>
                </ul>
                <div class="hbar"><h2>Update Records</h2></div>
                <ul class="nav nav-pills nav-stacked">
                    <li><a href="#">Add/Drop Students to Class</a></li>
                    <li><a href="#">Update Class Record</a></li>
                    <li><a href="#">Update Guardian</a></li>
                    <li><a href="#">Update Student</a></li>
                    <li><a href="#">Update Employee</a></li>
                </ul>

            </div>
            <div id="view" class="tab-pane fade in active">
                <button type="button" class="btn btn-info collapseButton" data-toggle="collapse" data-target="#students">+ Student Records</button>
                <div id="students" class="collapse">
                    <ul class="nav nav-pills nav-stacked">
                        <li><a href="#">Add/Drop Students to Class</a></li>
                        <li><a href="#">Update Class Record</a></li>
                        <li><a href="#">Update Guardian</a></li>
                        <li><a href="#">Update Student</a></li>
                        <li><a href="#">Update Employee</a></li>
                    </ul>
                </div>
                <button type="button" class="btn btn-info collapseButton" data-toggle="collapse" data-target="#classes">+ Class Records</button>
                <div id="classes" class="collapse">
                    <ul class="nav nav-pills nav-stacked">
                        <li><a href="#">Add/Drop Students to Class</a></li>
                        <li><a href="#">Update Class Record</a></li>
                        <li><a href="#">Update Guardian</a></li>
                        <li><a href="#">Update Student</a></li>
                        <li><a href="#">Update Employee</a></li>
                    </ul>
                </div>
                <button type="button" class="btn btn-info collapseButton" data-toggle="collapse" data-target="#employee">+ Employee Records</button>
                <div id="employee" class="collapse">
                    <ul class="nav nav-pills nav-stacked">
                        <li><a href="#">Add/Drop Students to Class</a></li>
                        <li><a href="#">Update Class Record</a></li>
                        <li><a href="#">Update Guardian</a></li>
                        <li><a href="#">Update Student</a></li>
                        <li><a href="#">Update Employee</a></li>
                    </ul>
                </div>
            </div>
        </div>

    </div>

    <div class="results">
        <div class="formcontain">
            <?php
            include 'db.inc.php';

            $fname = $_POST["firstname"];
            $lname = $_POST["lastname"];
            $salary = $_POST["salary"];
            $street = $_POST["street"];
            $city = $_POST["city"];
            $state = $_POST["state"];
            $postal = $_POST["postalcode"];
            $ssn = $_POST["ssn"];

            if (!($connection = @ mysql_connect($hostName, $username,
                $password)))
                showerror();

            if (!mysql_select_db($databaseName, $connection))
                showerror();

            $query = "INSERT INTO admin (adminSSN, fname, lname, salary, address, city, state, postal) VALUES ('$ssn','$fname','$lname', '$salary', '$street', '$city', '$state', '$postal')";
            if (!($result = @ mysql_query ($query, $connection)))
                showerror();
            else
                echo "<h1>Records added successfully!</h1>";

            ?>
        </div>
    </div>
</div>
</body>
</html>
