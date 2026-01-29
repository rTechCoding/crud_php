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
        $query = "UPDATE category SET status='$status' WHERE id='$id'";
        $update_status_sql = mysqli_query($con, $query);
    }
}

// Active & Deactive End

// Image Delete Start

if (isset($_GET['id']) != '' && isset($_GET['action']) == 'del') {

    $category_id = $_GET['id'];

    $check_query = "SELECT * FROM `category` WHERE `id`='$category_id'";
    $check_query_run = mysqli_query($con, $check_query);

    foreach ($check_query_run as $row) {

        if ($img_path = "image/" . $row['image']) {

            $query = "DELETE FROM `category` WHERE `id`='$category_id'";
            $query_run = mysqli_query($con, $query);

            if ($query_run) {
                unlink($img_path);
                echo "<script>alert('Category Deleted Sucessfully')
                window.location.href='category.php';

                </script>";
                exit(0);
            } else {
                echo "<script>alert('Category Not Deleted Sucessfully')
                window.location.href='category.php';
            
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
                        <h2 class="bg-light"><i class="fa fa-columns" aria-hidden="true"></i>CATEGORY</h2>
                        <a  class="btn btn-primary"  href="add_category.php" role="button" style="float: right;margin-top:-40px;"><i class="fa fa-plus"></i> Add Category</a>
                    </div>
                    <div class="card-body">
                        <table id="datatablesSimple">
                            <thead>
                                <tr>
                                    <th class="text-center">S.No</th>
                                    <th class="text-center">Name</th>
                                    <th class="text-center">Image</th>
                                    <th class="text-center">Status</th>
                                    <th class="text-center">Action</th>
                                </tr>
                            </thead>

                            <tbody>
                                <?php

                                $s_no = 1;

                                $query = "SELECT * FROM `category`";

                                $query_run = mysqli_query($con, $query);

                                if (mysqli_num_rows($query_run) > 0) {
                                    foreach ($query_run as $row) {




                                ?>

                                        <!--image insert  -->

                                        <tr class="text-center">
                                            <td><?php echo $s_no; ?></td>
                                            <td><?php echo $row['name']; ?></td>
                                            <!-- <td> <img src="image/<?php echo $row['image']; ?>" width="60px" height="60px" alt=""></td> -->
                                            <td> <?php echo "<a href='image/" . $row['image'] . "' target='_blank'> <img src='image/" . $row['image'] . "' width='60px' height='60px' alt='img" . 'image' . "' style='padding:2px;border:solid red 1px; border-radius:2px;'> </a>"; ?></td>
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
                                                <a href="category_edit.php? id=<?php echo $row['id']; ?>" class="btn btn-info">Edit</a>

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
