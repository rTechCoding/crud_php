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

                        <a href="roy.php" role="button" class="btn btn-outline-secondary" style="float: right;margin-top:-42px;"><i class="fa fa-chevron-circle-left"></i>Back</a>
                    </div>

                    <div class="card-body">

                        <form action="roy_call.php" method="POST" enctype="multipart/form-data">

                            <b>
                                <div class="row mb-3">
                                    <div class="col-md-6">
                                        <label for="formGroupExampleInput" class="form-label">class</label>
                                        <input type="text" name="class" class="form-control" id="formGroupExampleInput" placeholder="First name" required>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="exampleInputLastname" class="form-label">section</label>
                                        <input type="text" name="section" class="form-control" id="formGroupExampleInput" placeholder="last name">
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <div class="col-md-6">
                                        <label for="exampleInputclass" class="form-label">Roll Number</label>
                                        <input type="text" name="roll" class="form-control" id="formGroupExampleInput" placeholder="School Name|College Name">
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



                </div>
            </div>
        </div>
    </div>




    <!-- footer part -->
    <?php
    include("includes/footer.php");
    ?>