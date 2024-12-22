<?php
include('includes/header.php');
?>


<div id="layoutSidenav">
    <?php
    include("includes/side_bar.php");
    ?>
    <div id="layoutSidenav_content" style="margin-top:20px;">

        <main>
            <div class="container-fluid px-4">
            <div class="card mb-4">
                    <div class="card-header">
                        <h2 class="bg-light"><i class="fa fa-graduation-cap" aria-hidden="true"></i>Students Details</h2>
                        <a class="btn btn-primary" href="add_student.php" role="button" style="float: right;margin-top:-40px;"><i class="fa fa-plus"></i> Add Student Details</a>
                    </div>
                    <div class="card-body">
                        <table id="dt-all-checkbox" class="table" cellspacing="0" width="100%">
                            <thead>
                                <tr class="text-center">
                                    <th></th>
                                    <th class="th-sm">S.No</th>
                                    <th class="th-sm">First Name</th>
                                    <th class="th-sm">Last Name</th>
                                    <th class="th-sm">School|College</th>
                                    <th class="th-sm">Standard</th>
                                    <th class="th-sm">Phone No</th>
                                    <th class="th-sm">Email Address</th>
                                    <th class="th-sm">Student Id</th>
                                    <th class="th-sm">D.O.B</th>
                                    <th class="th-sm">Age</th>
                                    <th class="th-sm">Gender</th>
                                    <th class="th-sm">Skills</th>
                                    <th class="th-sm">Hobbies</th>
                                    <th class="th-sm">City</th>
                                    <th class="th-sm">Zip Code</th>
                                    <th class="th-sm">State</th>
                                    <th class="th-sm">Description</th>
                                    <th class="th-sm">Status</th>
                                    <th class="th-sm">Action</th>
                                </tr>
                            </thead>
                            
                            <tfoot>
                                <tr class="text-center">
                                    <th></th>
                                    <th>S.No</th>
                                    <th>First Name</th>
                                    <th>Last Name</th>
                                    <th>School|College</th>
                                    <th>Standard</th>
                                    <th>Phone No</th>
                                    <th>Email Address</th>
                                    <th>Student Id</th>
                                    <th>D.O.B</th>
                                    <th>Age</th>
                                    <th>Gender</th>
                                    <th>Skills</th>
                                    <th>Hobbies</th>
                                    <th>City</th>
                                    <th>Zip Code</th>
                                    <th>State</th>
                                    <th>Description</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </tfoot>
                        </table>

                    </div>
                
            </div>
        </main>

        <?php
        include('includes/footer.php');
        ?>