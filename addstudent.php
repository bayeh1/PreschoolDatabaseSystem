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
                <li class="active"><a data-toggle="tab" href="#view">Views</a></li>
                <li><a data-toggle="tab" href="#ops">Admin</a></li>
            </ul>
        </div>
        <div class="tab-content">
            <div id="ops" class="tab-pane fade in active">

                <div class="hbar"><h2>Add New Records</h2></div>
                <ul class="nav nav-pills nav-stacked">
                    <li><a href="addguardian.html">Add Guardian</a></li>
                    <li class="active"><a href="addstudent.php">Add Student</a></li>
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
            <div id="view" class="tab-pane fade">
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
            <form class="form-horizontal" action="studentadded.php" method="post">
            <fieldset>

            <!-- Form Name -->
            <legend>Enter Student Information</legend>

            <!-- Text input-->
            <div class="form-group">
              <label class="col-md-4 control-label" for="firstname">First Name</label>
              <div class="col-md-4">
              <input id="firstname" name="firstname" type="text" placeholder="" class="form-control input-md" required="">

              </div>
            </div>

            <!-- Text input-->
            <div class="form-group">
              <label class="col-md-4 control-label" for="lastname">Last Name</label>
              <div class="col-md-4">
              <input id="lastname" name="lastname" type="text" placeholder="" class="form-control input-md" required="">

              </div>
            </div>

            <!-- Select Basic -->
            <div class="form-group">
              <label class="col-md-4 control-label" for="guardian">Parent/Guardian</label>
              <div class="col-md-4">
                <select id="guardian" name="guardian" class="form-control">
                    <?php
                    include 'db.inc.php';
                    // Connect to MySQL DBMS
                    if (!($connection = @ mysql_connect($hostName, $username,
                        $password)))
                        showerror();
                    // Use the roasters database
                    if (!mysql_select_db($databaseName, $connection))
                        showerror();

                    $query = "SELECT parentSSN, fname, lname FROM parent";
                    if (!($result = @ mysql_query ($query, $connection)))
                        showerror();
                    while ($row = @ mysql_fetch_array($result))
                        echo "<option value='{$row["parentSSN"]}'> {$row["fname"]} {$row["lname"]}</option>";
                    ?>
                </select>
              </div>
            </div>

            <!-- Text input-->
            <div class="form-group">
              <label class="col-md-4 control-label" for="ssn">SSN</label>
              <div class="col-md-2">
              <input id="ssn" name="ssn" type="text" placeholder="" class="form-control input-md" required="">

              </div>
            </div>

            <!-- Select Basic -->
            <div class="form-group">
              <label class="col-md-4 control-label" for="age">Age</label>
              <div class="col-md-2">
                <select id="age" name="age" class="form-control">
                  <option value="2">2</option>
                  <option value="3">3</option>
                  <option value="4">4</option>
                </select>
              </div>
            </div>

            <!-- Textarea -->
            <div class="form-group">
              <label class="col-md-4 control-label" for="notes">Notes</label>
              <div class="col-md-4">
                <textarea class="form-control" id="notes" name="notes">Enter any allergies, illnesses, or notes.</textarea>
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