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
                    <li><a href="addstudent.php">Add Student</a></li>
                    <li class="active"><a href="addemployee.php">Add Employee</a></li>
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
            <div class="navigation">
                <ul class="nav nav-tabs">
                    <li class="active"><a data-toggle="tab" href="#teacher">Teacher</a></li>
                    <li><a data-toggle="tab" href="#aid">Aid</a></li>
                    <li><a data-toggle="tab" href="#admin">Administrator</a></li>
                </ul>
            </div>
            <div class="tab-content">
                <div id ="teacher" class="tab-pane fade in active">
                    <form class="form-horizontal">
                        <fieldset>

                            <!-- Form Name -->
                            <legend>New Teacher Information</legend>

                            <!-- Text input-->
                            <div class="form-group">
                                <label class="col-md-4 control-label" for="firstname">First Name</label>
                                <div class="col-md-4">
                                    <input id="firstnamet" name="firstname" type="text" placeholder="" class="form-control input-md" required="">

                                </div>
                            </div>

                            <!-- Text input-->
                            <div class="form-group">
                                <label class="col-md-4 control-label" for="lastname">Last Name</label>
                                <div class="col-md-4">
                                    <input id="lastnamet" name="lastname" type="text" placeholder="" class="form-control input-md" required="">

                                </div>
                            </div>

                            <!-- Text input-->
                            <div class="form-group">
                                <label class="col-md-4 control-label" for="certexpire">Cert Expiration</label>
                                <div class="col-md-4">
                                    <input id="certexpiret" name="certexpire" type="text" placeholder="xx/xx/xxxx" class="form-control input-md" required="">
                                    <span class="help-block">Date certification expires</span>
                                </div>
                            </div>

                            <!-- Text input-->
                            <div class="form-group">
                                <label class="col-md-4 control-label" for="sessionrate">Session Pay</label>
                                <div class="col-md-4">
                                    <input id="sessionratet" name="sessionrate" type="text" placeholder="$XX.XX" class="form-control input-md" required="">

                                </div>
                            </div>

                            <!-- Select Basic -->
                            <div class="form-group">
                                <label class="col-md-4 control-label" for="supervisor">Supervisor</label>
                                <div class="col-md-4">
                                    <select id="supervisort" name="supervisor" class="form-control">
                                        <?php
                                        include 'getAdmins.php';
                                        while ($row = @ mysql_fetch_array($GLOBALS['result']))
                                            echo "<option value='{$row["adminSSN"]}'> {$row["fname"]} {$row["lname"]}</option>";

                                        ?>
                                    </select>
                                </div>
                            </div>

                            <!-- Text input-->
                            <div class="form-group">
                                <label class="col-md-4 control-label" for="street">Address</label>
                                <div class="col-md-4">
                                    <input id="streett" name="street" type="text" placeholder="Street" class="form-control input-md" required="">

                                </div>
                            </div>

                            <!-- Text input-->
                            <div class="form-group">
                                <label class="col-md-4 control-label" for="city"></label>
                                <div class="col-md-4">
                                    <input id="cityt" name="city" type="text" placeholder="City" class="form-control input-md" required="">

                                </div>
                            </div>

                            <!-- Text input-->
                            <div class="form-group">
                                <label class="col-md-4 control-label" for="state"></label>
                                <div class="col-md-2">
                                    <input id="statet" name="state" type="text" placeholder="MD" class="form-control input-md" required="">

                                </div>
                            </div>

                            <!-- Text input-->
                            <div class="form-group">
                                <label class="col-md-4 control-label" for="postalcode"></label>
                                <div class="col-md-2">
                                    <input id="postalcodet" name="postalcode" type="text" placeholder="Postal Code" class="form-control input-md" required="">

                                </div>
                            </div>
                            <!-- Text input-->
                            <div class="form-group">
                                <label class="col-md-4 control-label" for="ssn">SSN</label>
                                <div class="col-md-2">
                                    <input id="ssnt" name="ssn" type="text" placeholder="" class="form-control input-md" required="">

                                </div>
                            </div>

                            <!-- Button -->
                            <div class="form-group">
                                <label class="col-md-4 control-label" for="submit"></label>
                                <div class="col-md-4">
                                    <button id="submitt" name="submit" class="btn btn-primary">Submit</button>
                                </div>
                            </div>

                        </fieldset>
                    </form>

                </div>
                <div id="aid" class="tab-pane fade">
                    <form class="form-horizontal">
                        <fieldset>

                            <!-- Form Name -->
                            <legend>New Aid Information</legend>

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

                            <!-- Text input-->
                            <div class="form-group">
                                <label class="col-md-4 control-label" for="certexpire">Cert Expiration</label>
                                <div class="col-md-4">
                                    <input id="certexpire" name="certexpire" type="text" placeholder="xx/xx/xxxx" class="form-control input-md">
                                    <span class="help-block">Date certification expires</span>
                                </div>
                            </div>

                            <!-- Text input-->
                            <div class="form-group">
                                <label class="col-md-4 control-label" for="sessionrate">Session Pay</label>
                                <div class="col-md-4">
                                    <input id="sessionrate" name="sessionrate" type="text" placeholder="$XX.XX" class="form-control input-md" required="">

                                </div>
                            </div>

                            <!-- Select Basic -->
                            <div class="form-group">
                                <label class="col-md-4 control-label" for="supervisor">Supervisor</label>
                                <div class="col-md-4">
                                    <select id="supervisor" name="supervisor" class="form-control">

                                    </select>
                                </div>
                            </div>

                            <!-- Text input-->
                            <div class="form-group">
                                <label class="col-md-4 control-label" for="street">Address</label>
                                <div class="col-md-4">
                                    <input id="street" name="street" type="text" placeholder="Street" class="form-control input-md" required="">

                                </div>
                            </div>

                            <!-- Text input-->
                            <div class="form-group">
                                <label class="col-md-4 control-label" for="city"></label>
                                <div class="col-md-4">
                                    <input id="city" name="city" type="text" placeholder="City" class="form-control input-md" required="">

                                </div>
                            </div>

                            <!-- Text input-->
                            <div class="form-group">
                                <label class="col-md-4 control-label" for="state"></label>
                                <div class="col-md-2">
                                    <input id="state" name="state" type="text" placeholder="MD" class="form-control input-md" required="">

                                </div>
                            </div>

                            <!-- Text input-->
                            <div class="form-group">
                                <label class="col-md-4 control-label" for="postalcode"></label>
                                <div class="col-md-2">
                                    <input id="postalcode" name="postalcode" type="text" placeholder="Postal Code" class="form-control input-md" required="">

                                </div>
                            </div>
                            <!-- Text input-->
                            <div class="form-group">
                                <label class="col-md-4 control-label" for="ssn">SSN</label>
                                <div class="col-md-2">
                                    <input id="ssn" name="ssn" type="text" placeholder="" class="form-control input-md" required="">

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
                <div id="admin" class="tab-pane fade">
                    <form class="form-horizontal" action="adminadded.php" method="post">
                        <fieldset>

                            <!-- Form Name -->
                            <legend>New Administrator Information</legend>

                            <!-- Text input-->
                            <div class="form-group">
                                <label class="col-md-4 control-label" for="firstname">First Name</label>
                                <div class="col-md-4">
                                    <input id="firstnamead" name="firstname" type="text" placeholder="" class="form-control input-md" required="">

                                </div>
                            </div>

                            <!-- Text input-->
                            <div class="form-group">
                                <label class="col-md-4 control-label" for="lastname">Last Name</label>
                                <div class="col-md-4">
                                    <input id="lastnamead" name="lastname" type="text" placeholder="" class="form-control input-md" required="">

                                </div>
                            </div>

                            <!-- Text input-->
                            <div class="form-group">
                                <label class="col-md-4 control-label" for="salaryad">Salary</label>
                                <div class="col-md-4">
                                    <input id="salaryad" name="salary" type="text" placeholder="$XX.XX" class="form-control input-md" required="">
                                    <span class="help-block">Enter monthly salary.</span>
                                </div>
                            </div>

                            <!-- Text input-->
                            <div class="form-group">
                                <label class="col-md-4 control-label" for="street">Address</label>
                                <div class="col-md-4">
                                    <input id="streetad" name="street" type="text" placeholder="Street" class="form-control input-md" required="">

                                </div>
                            </div>

                            <!-- Text input-->
                            <div class="form-group">
                                <label class="col-md-4 control-label" for="city"></label>
                                <div class="col-md-4">
                                    <input id="cityad" name="city" type="text" placeholder="City" class="form-control input-md" required="">

                                </div>
                            </div>

                            <!-- Text input-->
                            <div class="form-group">
                                <label class="col-md-4 control-label" for="state"></label>
                                <div class="col-md-2">
                                    <input id="statead" name="state" type="text" placeholder="MD" class="form-control input-md" required="">

                                </div>
                            </div>

                            <!-- Text input-->
                            <div class="form-group">
                                <label class="col-md-4 control-label" for="postalcode"></label>
                                <div class="col-md-2">
                                    <input id="postalcodead" name="postalcode" type="text" placeholder="Postal Code" class="form-control input-md" required="">

                                </div>
                            </div>

                            <!-- Text input-->
                            <div class="form-group">
                                <label class="col-md-4 control-label" for="ssn">SSN</label>
                                <div class="col-md-2">
                                    <input id="ssnad" name="ssn" type="text" placeholder="" class="form-control input-md" required="">

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
    </div>
</div>
</body>
</html>