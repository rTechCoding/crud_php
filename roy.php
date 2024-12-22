<?php
include("includes/header.php");
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
                        <h2 class="bg-light"><i class="fa fa-columns" aria-hidden="true"></i>Data</h2>
                        <a  class="btn btn-primary"  href="add_roy.php" role="button" style="float: right;margin-top:-40px;"><i class="fa fa-plus"></i> Add Category</a>
                    </div>
                    <div class="card-body">
                        <table id="datatablesSimple">
                            <thead>
                                <tr>
                                    <th class="text-center">S.No</th>
                                    <th class="text-center">Class</th>
                                    <th class="text-center">Section</th>
                                    <th class="text-center">Roll Number</th>
                                    <th class="text-center">Status</th>
                                    <th class="text-center">Action</th>
                                </tr>
                            </thead>

                            <tbody>
                                
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </main>

        <?php
        include('includes/footer.php');
        ?>