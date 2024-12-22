<!-- header part -->
<?php
include("includes/header.php");
include("db/conn.php")
?>


<div id="layoutSidenav">



    <?php
    include("includes/side_bar.php");
    ?>

    <div id="layoutSidenav_content">
        <main>
            <div class="container-fluid px-4">
                <h1 class="card-header bg-light mt-3"><i class="fa fa-database"></i>Dashboard</h1>
                <ol class="breadcrumb mb-4">
                    <li class="breadcrumb-item active">Dashboard</li>
                </ol>
                <div class="row">
                    <div class="col-xl-3 col-md-6">
                        <div class="card" style="background-color:Cornflowerblue;">
                            <div class="card-body" style="text-align:center;color:black;font-size:20px;">CATEGORY DETAILS

                                <!-- Display Data-->
                                <?php

                                $query = "SELECT * FROM `category`";
                                $query_run = mysqli_query($con, $query);
                                if ($category_total = mysqli_num_rows($query_run)) {
                                    echo '<h4 class="mb-0" style="color:white";>' . $category_total . '</h4>';
                                } else {
                                    echo '<h4 class="mb-0">No Data Found</h4>';
                                }
                                ?>
                            </div>
                            <div class="card-footer d-flex align-items-center justify-content-between">
                                <a class="small text-white stretched-link" href="#">View Details</a>
                                <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6">
                        <div class="card" style="background-color:Lightsteelblue ;">
                            <div class="card-body" style="text-align:center;color:white;font-size:20px;">PRODUCT DETAILS

                                <!-- Display Data-->
                                <?php

                                $query = "SELECT * FROM `product`";
                                $query_run = mysqli_query($con, $query);
                                if ($product_total = mysqli_num_rows($query_run)) {
                                    echo '<h4 class="mb-0" style="color:black";>' . $product_total . '</h4>';
                                } else {
                                    echo '<h4 class="mb-0">No Data Found</h4>';
                                }
                                ?>
                            </div>
                            <div class="card-footer d-flex align-items-center justify-content-between">
                                <a class="small text-white stretched-link" href="#">View Details</a>
                                <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6">
                        <div class="card" style="background-color:darkcyan;">
                            <div class="card-body" style="text-align:center;color:black;font-size:20px;">STUDENTS DETAILS

                                <!-- Display Data-->
                                <?php

                                $query = "SELECT * FROM `category`";
                                $query_run = mysqli_query($con, $query);
                                if ($category_total = mysqli_num_rows($query_run)) {
                                    echo '<h4 class="mb-0" style="color:white";>' . $category_total . '</h4>';
                                } else {
                                    echo '<h4 class="mb-0">No Data Found</h4>';
                                }
                                ?>
                            </div>
                            <div class="card-footer d-flex align-items-center justify-content-between">
                                <a class="small text-white stretched-link" href="#">View Details</a>
                                <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6">
                        <div class="card bg-danger text-white mb-4">
                            <div class="card-body">Danger Card</div>
                            <div class="card-footer d-flex align-items-center justify-content-between">
                                <a class="small text-white stretched-link" href="#">View Details</a>
                                <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </main>
        <!-- footer part -->
        <?php
        include("includes/footer.php");
        ?>