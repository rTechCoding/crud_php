<!-- header part -->
<?php
include("includes/header.php");
?>


<div id="layoutSidenav">



    <?php
    include("includes/side_bar.php");
    ?>
    <div id="layoutSidenav_content">

        <div class="container">
            <div class="row">
                <div class="col-md-12">

                    <div class="card-header bg-light mt-4">
                        <h2><i class="fa fa-puzzle-piece" aria-hidden="true"></i> Add Student Details</h2>

                        <a href="student_details.php" role="button" class="btn btn-outline-secondary" style="float: right;margin-top:-42px;"><i class="fa fa-chevron-circle-left"></i>Back</a>
                    </div>

                    <div class="card-body">

                        <form action="student_details_call.php" method="POST" enctype="multipart/form-data">

                            <b>
                                <div class="row mb-3">
                                    <div class="col-md-2">
                                    <label for="formGroupExampleInput" class="form-label">Title</label>
                                        <select class="form-control" name="title" required="">
                                            <option selected>Select Title</option>
                                            <option value="Male">Mr.</option>
                                            <option value="Female">Mrs.</option>
                                        </select>
                                    </div>

                                    <div class="col-md-5">
                                        <label for="formGroupExampleInput" class="form-label">First Name</label>
                                        <input type="text" name="first_name" class="form-control" id="formGroupExampleInput" placeholder="First name" required>
                                    </div>
                                    <div class="col-md-5">
                                        <label for="exampleInputLastname" class="form-label">Last Name</label>
                                        <input type="text" name="last_name" class="form-control" id="formGroupExampleInput" placeholder="last name">
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <div class="col-md-6">
                                        <label for="exampleInputclass" class="form-label">School Name|College Name</label>
                                        <input type="text" name="education" class="form-control" id="formGroupExampleInput" placeholder="School Name|College Name">
                                    </div>

                                    <div class="col-md-6">
                                        <label for="formGroupExampleInput" class="form-label">Standard</label>
                                        <div class="input-group">
                                            <div class="form-control">

                                                <label>
                                                    <div class="form-check-inline"></div>
                                                    <input type="radio" name="class" value="Intermediate" required>
                                                    Intermediate
                                                </label>

                                                <label>
                                                    <div class="form-check-inline"></div>
                                                    <input type="radio" name="class" value=" Undergraduate"> Undergraduate
                                                </label>

                                                <label>
                                                    <div class="form-check-inline"></div>
                                                    <input type="radio" name="class" value="Postgraduate"> Postgraduate
                                                </label>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-md-4">
                                        <label for="exampleInputStudent Id" class="form-label">Student Id</label>
                                        <input type="file" name="student_id" class="form-control" id="formGroupExampleInput" placeholder="Student Id" required>
                                    </div>
                                    <div class="col-md-3">
                                        <label for="exampleInputemail" class="form-label">Email</label>
                                        <input type="email" name="email" class="form-control" id="formGroupExampleInput" placeholder="Email" require>
                                    </div>
                                    <div class="col-md-3">
                                        <label for="exampleInputAge" class="form-label">Date Of Birth</label>
                                        <!-- <input type="date" name="age" min="16" max="30" value="" class="form-control" placeholder="Age"> -->
                                        <input id="txtbirthdate" type="date" name="txtbirthdate" class="form-control" maxlength="10" placeholder="mm/dd/yyyy" onkeyup="getAgeVal(0)" onblur="getAgeVal(0);" required>
                                    </div>
                                    <div class="col-md-2">
                                        <label for="formGroupExampleInput" class="form-label">Age</label>
                                        <!-- <input type="text" name="Age" class="form-control" id="formGroupExampleInput" placeholder="Age" required> -->
                                        <input type="text" class="form-control" required="" name="txtage" id="txtage" autocomplete="off" disabled>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-md-3">

                                        <label for="exampleInputPhoneNumber" class="form-label">Phone Number</label>
                                        <input type="text" name="phone_number" class="form-control" id="formGroupExampleInput" placeholder="Phone Number" required>

                                    </div>
                                    <div class="col-md-3">
                                        <label for="exampleInputcity" class="form-label">City</label>
                                        <input type="text" name="city" class="form-control" id="formGroupExampleInput" placeholder="City">
                                    </div>
                                    <div class="col-md-3">
                                        <label for="formGroupExampleInput" class="form-label">State</label>
                                        <input type="text" name="state" class="form-control" id="formGroupExampleInput" placeholder="State">
                                    </div>
                                    <div class="col-md-3">
                                        <label for="formGroupExampleInput" class="form-label">Zip Code</label>
                                        <input type="number" name="zip" class="form-control" placeholder="Zip Code">
                                    </div>
                                </div>

                                <!-- Skills , Gender And Hobbies -->
                                <div class="row mb-3">

                                    <div class="col-md-4">
                                        <label for="formGroupExampleInput" class="form-label">Skills</label>
                                        <div class="form-control">
                                            <label>
                                                <input type="checkbox" name="skills" value="Web">WebDeveloper</label>
                                            <label>
                                                <div class="form-check-inline"></div>
                                                <input type="checkbox" name="skills" value="Java">Java
                                            </label>
                                            <label>
                                                <div class="form-check-inline"></div>
                                                <input type="checkbox" name="skills" value="Andriod">Andriod
                                            </label>
                                            <label>
                                                <div class="form-check-inline"></div>
                                                <input type="checkbox" name="skills" value="Python">Python
                                            </label>
                                        </div>
                                    </div>

                                    <div class="col-md-4">
                                        <label for="formGroupExampleInput" class="form-label">Gender</label>
                                        <div class="input-group">
                                            <div class="form-control">

                                                <label>
                                                    <input type="radio" name="gender" value="male" required>
                                                    Male
                                                </label>

                                                <label for="female">
                                                    <div class="form-check-inline"></div>
                                                    <input type="radio" name="gender" value="female" id="female"> Female
                                                </label>

                                                <label for="other">
                                                    <div class="form-check-inline"></div>
                                                    <input type="radio" name="gender" value="other" id="other"> Other
                                                </label>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-4">
                                        <label for="formGroupExampleInput" class="form-label">Hobbies</label>
                                        <div class="form-control">
                                            <div>
                                                <label>
                                                    <div class="form-check-inline"></div>
                                                    <input type="checkbox" name="hobbies" value="Web">Music
                                                </label>
                                                <label>
                                                    <div class="form-check-inline"></div>
                                                    <input type="checkbox" name="hobbies" value="iOS">Sports
                                                </label>
                                                <label>
                                                    <div class="form-check-inline"></div>
                                                    <input type="checkbox" name="hobbies" value="Andriod">Travel
                                                </label>
                                                <label>
                                                    <div class="form-check-inline"></div>
                                                    <input type="checkbox" name="hobbies" value="Game">Movies
                                                </label>
                                            </div>
                                        </div>
                                    </div>

                                </div>


                                <div class="mb-4">
                                    <label for="exampleInputDescription" class="form-label">Description</label>
                                    <textarea name="description" id="" class="form-control" cols="30" rows="5"></textarea>
                                </div>
                            </b>
                            <button type="submit" name="submit" class="btn btn-outline-primary">Submit</button>

                        </form>

                        <!-- age automatics -->

                        <script type="text/javascript">
                            function formatDate(date) {
                                var d = new Date(date),
                                    month = '' + (d.getMonth() + 1),
                                    day = '' + d.getDate(),
                                    year = d.getFullYear();

                                if (month.length < 2) month = '0' + month;
                                if (day.length < 2) day = '0' + day;

                                return [year, month, day].join('-');

                            }

                            function getAge(dateString) {
                                var birthdate = new Date().getTime();
                                if (typeof dateString === 'undefined' || dateString === null || (String(dateString) === 'NaN')) {
                                    // variable is undefined or null value
                                    birthdate = new Date().getTime();
                                }
                                birthdate = new Date(dateString).getTime();
                                var now = new Date().getTime();
                                // now find the difference between now and the birthdate
                                var n = (now - birthdate) / 1000;
                                if (n < 604800) { // less than a week
                                    var day_n = Math.floor(n / 86400);
                                    if (typeof day_n === 'undefined' || day_n === null || (String(day_n) === 'NaN')) {
                                        // variable is undefined or null
                                        return '';
                                    } else {
                                        return day_n + ' day' + (day_n > 1 ? 's' : '') + ' old';
                                    }
                                } else if (n < 2629743) { // less than a month
                                    var week_n = Math.floor(n / 604800);
                                    if (typeof week_n === 'undefined' || week_n === null || (String(week_n) === 'NaN')) {
                                        return '';
                                    } else {
                                        return week_n + ' week' + (week_n > 1 ? 's' : '') + ' old';
                                    }
                                } else if (n < 31562417) { // less than 24 months
                                    var month_n = Math.floor(n / 2629743);
                                    if (typeof month_n === 'undefined' || month_n === null || (String(month_n) === 'NaN')) {
                                        return '';
                                    } else {
                                        return month_n + ' month' + (month_n > 1 ? 's' : '') + ' old';
                                    }
                                } else {
                                    var year_n = Math.floor(n / 31556926);
                                    if (typeof year_n === 'undefined' || year_n === null || (String(year_n) === 'NaN')) {
                                        return year_n = '';
                                    } else {
                                        return year_n + ' year' + (year_n > 1 ? 's' : '') + ' old';
                                    }
                                }
                            }

                            function getAgeVal(pid) {
                                var birthdate = formatDate(document.getElementById("txtbirthdate").value);
                                var count = document.getElementById("txtbirthdate").value.length;
                                if (count == '10') {
                                    var age = getAge(birthdate);
                                    var str = age;
                                    var res = str.substring(0, 1);
                                    if (res == '-' || res == '0') {
                                        document.getElementById("txtbirthdate").value = "";
                                        document.getElementById("txtage").value = "";
                                        $('#txtbirthdate').focus();
                                        return false;
                                    } else {
                                        document.getElementById("txtage").value = age;
                                    }
                                } else {
                                    document.getElementById("txtage").value = "";
                                    return false;
                                }
                            }
                        </script>

                    </div>
                </div>
            </div>
        </div>




        <!-- footer part -->
        <?php
        include("includes/footer.php");
        ?>