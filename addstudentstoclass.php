<?php

    session_start();

    include 'db.inc.php';

?>

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
            <div id="ops" class="tab-pane fade in active">

                <div class="hbar"><h2>Add New Records</h2></div>
                <ul class="nav nav-pills nav-stacked">
                    <li><a href="addguardian.html">Add Guardian</a></li>
                    <li><a href="addstudent.php">Add Student</a></li>
                    <li><a href="addemployee.php">Add Employee</a></li>
                    <li><a href="addclass.php">Add Class</a></li>
                </ul>
                <div class="hbar"><h2>Update Records</h2></div>
                <ul class="nav nav-pills nav-stacked">
                    <li class="active"><a href="addstudentstoclass.php">Add/Drop Students to Class</a></li>
                    <li><a href="#">Update Class Record</a></li>
                    <li><a href="#">Update Guardian</a></li>
                    <li><a href="#">Update Student</a></li>
                    <li><a href="#">Update Employee</a></li>
                </ul>

            </div>
            <div id="view" class="tab-pane fade">
                <button type="button" class="btn btn-info collapseButton" data-toggle="collapse" data-target="#students">+ Student Records</button>
                <div id="students" class="collapse">
                    <ul class="nav nav-pills nav-stacked">
                        <li><a href="allstudents.php">All Students</a></li>
                        <li><a href="studentsbyage.php">Students By Age</a></li>
                    </ul>
                </div>
                <button type="button" class="btn btn-info collapseButton" data-toggle="collapse" data-target="#classes">+ Class Records</button>
                <div id="classes" class="collapse">
                    <ul class="nav nav-pills nav-stacked">
                        <li><a href="allclasses.php">All Classes</a></li>
                        <li><a href="allstudentsinclass.php">Show Students In Class</a></li>
                    </ul>
                </div>
                <button type="button" class="btn btn-info collapseButton" data-toggle="collapse" data-target="#employee">+ Employee Records</button>
                <div id="employee" class="collapse">
                    <ul class="nav nav-pills nav-stacked">
                        <li><a href="allteachers.php">All Teachers</a></li>
                        <li><a href="allaids.php">All Aids</a></li>
                        <li><a href="alladmin.php">All Administrators</a></li>
                    </ul>
                </div>
            </div>
        </div>

    </div>

    <div class="results">
        <div class="formcontain">
            <form class="form-horizontal" method="post" action="">
                <fieldset>

                    <!-- Form Name -->
                    <legend>Add Students to Class</legend>

                    <!-- Select Basic -->
                    <div class="form-group">
                        <label class="col-md-4 control-label" for="selectage">Select Age</label>
                        <div class="col-md-4">
                            <select id="selectage" name="selectage" class="form-control">
                                <option value="2">Two</option>
                                <option value="3">Three</option>
                                <option value="4">Four</option>
                            </select>
                        </div>
                    </div>

                    <!-- Button -->
                    <div class="form-group">
                        <label class="col-md-4 control-label" for="submit"></label>
                        <div class="col-md-4">
                            <button id="submit" name="submit" class="btn btn-primary">filter</button>
                        </div>
                    </div>
                </fieldset>
            </form>
            <form class="form-horizontal" method="post" action="">
                    <!-- Select Multiple -->
                    <div class="form-group">
                        <label class="col-md-4 control-label" for="selectstudents">Select Student</label>
                        <div class="col-md-4">
                            <select id="selectstudents" name="selectstudents" class="form-control" multiple="multiple">
                                <option value="1">Students get loaded here with PHP</option>
                            </select>
                        </div>
                    </div>
                    <div class="results">
                        <div class="formcontain">
                            <table class="table">
                                <tr><th>ID</th><th>First Name</th><th>Last Name</th><th>Age</th><th>Parent</th><th>Class ID</th><th>Notes</th>
                                    <?php
                                    if (!($connection = @ mysql_connect($hostName, $username,
                                        $password)))
                                        showerror();
                                    // Use the roasters database
                                    if (!mysql_select_db($databaseName, $connection))
                                        showerror();
                                    //Select c.classID, c.capacity, c.age, c.session, t.fname, c.teacherSSN FROM class c INNER JOIN teacher t ON t.teacherSSN = c.teacherSSN";
                                    // Create SQL statement
                                    $age = $_POST["selectage"];
                                    $query = "Select DISTINCT s.studentSSN, s.fname, s.lname, s.age, p.fname, p.lname, s.classID, s.notes, s.parentSSN FROM student s INNER JOIN student ON s.age = '$age' INNER JOIN parent p ON p.parentSSN = s.parentSSN";
                                    // Execute SQL statement
                                    if (!($result = @ mysql_query ($query, $connection)))
                                        showerror();
                                    // Display results
                                    while ($row = @ mysql_fetch_array($result))
                                        echo "<tr>
                                                <td>{$row[0]}</td>
                                                <td>{$row[1]}</td>
                                                <td>{$row[2]}</td>
                                                <td>{$row[3]}</td>
                                                <td>{$row[4]} {$row[5]}</td>
                                                <td>{$row[6]}</td>
                                                <td>{$row[7]}</td>
                                                <td><a href='edit.php?id=".$row[0]."'>Edit</a></td>
                                                </tr>";
                                    ?>

                            </table>
                        </div>
                    </div>
                    <!-- Select Basic -->
                    <div class="form-group">
                        <label class="col-md-4 control-label" for="selectclass">Select Class</label>
                        <div class="col-md-4">
                            <select id="selectclass" name="selectclass" class="form-control">
                                <option value="1">Classes get loaded here with PHP</option>
                            </select>
                        </div>
                    </div>

                    <!-- Button -->
                    <div class="form-group">
                        <label class="col-md-4 control-label" for="submit"></label>
                        <div class="col-md-4">
                            <button id="submit" name="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </div>

                </fieldset>
            </form>

        </div>
    </div>
</div>
</body>
</html>
