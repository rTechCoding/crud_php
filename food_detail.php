<?php
include("includes/header.php");
?>

<?php
include("db/conn.php");

// Active & Deactive Start

if (isset($_GET['type']) && isset($_GET['type']) != '') {
    $type = ($_GET['type']);
    if ($type == 'status') {
        $operation = ($_GET['operation']);
        $id = ($_GET['id']);
        if ($operation == 'active') {
            $status = '1';
        } else {
            $status = '0';
        }
        $query = "UPDATE food_details SET status='$status' WHERE id='$id'";
        $update_status_sql = mysqli_query($con, $query);
    }
}

// Active & Deactive End

// Image Delete Start

if (isset($_GET['id']) != '' && isset($_GET['action']) == 'del') {

    $food_details_id = $_GET['id'];

    $check_query = "SELECT * FROM `food_details` WHERE `id`='$food_details_id'";
    $check_query_run = mysqli_query($con, $check_query);

    foreach ($check_query_run as $row) {

        if ($img_path = "food_images/" . $row['image']) {

            $query = "DELETE FROM `food_details` WHERE `id`='$food_details_id'";
            $query_run = mysqli_query($con, $query);

            if ($query_run) {
                unlink($img_path);
                echo "<script>alert('Food Details Deleted Sucessfully')
                window.location.href='food_detail.php';

                </script>";
                exit(0);
            } else {
                echo "<script>alert('Food Details Not Deleted Sucessfully')
                window.location.href='food_detail.php';
            
                </script>";
                exit(0);
            }
        }
    }
}

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
                        <h2 class="bg-light"><i class="fa fa-columns" aria-hidden="true"></i>FOOD DETAILS</h2>
                        <!-- <a  class="btn btn-primary"  href="add_food_details.php" role="button" style="float: right;margin-top:-40px;"><i class="fa fa-plus"></i> Add food_details</a> -->
                        <button type="button" class="btn btn-primary ml-5" data-toggle="modal" data-target=".bd-example-modal-lg" style="float: right;margin-top:-40px;"><i class="fa fa-plus"></i>Add Food Details</button>
                    </div>
                    
                    <div class="card-body">
                        <table id="datatablesSimple" style="background-color:teal;">
                            <thead>
                                <tr style="text-align:center;color:white;">
                                    <th class="text-center">S.No</th>
                                    <th class="text-center">Name</th>
                                    <th class="text-center">Phone No</th>
                                    <th class="text-center">Address</th>
                                    <th class="text-center">Food Name</th>
                                    <th class="text-center">Quantity</th>
                                    <th class="text-center">Price</th>
                                    <th class="text-center">Status</th>
                                    <th class="text-center">Action</th>
                                </tr>
                            </thead>

                            <tbody>
                                <?php

                                $s_no = 1;

                                $query = "SELECT * FROM `food_details`";

                                $query_run = mysqli_query($con, $query);

                                if (mysqli_num_rows($query_run) > 0) {
                                    foreach ($query_run as $row) {

                                ?>

                                        <!--image insert  -->

                                        <tr class="text-center">
                                            <td><?php echo $s_no; ?></td>
                                            <td><?php echo $row['name']; ?></td>
                                            <td><?php echo $row['phone_no']; ?></td>
                                            <td><?php echo $row['address']; ?></td>
                                            <td><?php echo $row['food_name']; ?></td>
                                            <td><?php echo $row['quntity']; ?></td>
                                            <td><?php echo $row['price']; ?></td>
                                            <!-- <td> <img src="image/<?php echo $row['image']; ?>" width="60px" height="60px" alt=""></td> -->
                                            <!-- <td> <?php echo "<a href='food_images/" . $row['image'] . "' target='_blank'> <img src='food_images/" . $row['image'] . "' width='60px' height='60px' alt='img" . 'image' . "' style='padding:2px;border:solid red 1px; border-radius:2px;'> </a>"; ?></td> -->
                                            <td>
                                                <?php

                                                if ($row['status'] == 1) {
                                                    //echo"Active"
                                                    echo "
                                                        <a href='?type=status&operation=deactive&id=" . $row['id'] . "'class='btn btn-success'>Active</a>";
                                                } else {
                                                    //echo"Deactive"
                                                    echo "
                                                        <a href='?type=status&operation=active&id=" . $row['id'] . "'class='btn btn-warning'>Deactive</a>";
                                                }
                                                ?>
                                            </td>
                                            <td>
                                                <a href="food_detail.php? id=<?php echo $row['id']; ?>" class="btn btn-info">Edit</a>

                                                <a href="?id=<?php echo $row['id']; ?>&action=del" onclick="return confirm('Are you sure want to Delete?')" class="btn btn-danger">Delete</a>
                                            </td>

                                        </tr>




                                <?php
                                        $s_no++;
                                    }
                                }

                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </main>

        <?php
        include('includes/footer.php');

        ?>

