<!-- header part -->
<?php
include("includes/header.php");
?>

<?php
include("db/conn.php");
?>

<!-- data update in sql part -->
<?php
if (isset($_POST['submit'])) {

    $name = mysqli_real_escape_string($con, $_POST['name']);

    $category_id = $_POST['category_id'];

    // Image Update

    $old_image = $_POST['old_image'];
    $image2 = $_FILES['upload_image']['name'];
    $target_dir = "image/";
    $target_file = $target_dir . basename($_FILES["upload_image"]["name"]);
    $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
    if (!$image2 == '') {
        $filename = time() . "." . $imageFileType;
    } else {
        $filename = $old_image;
    }

    // Image Update
    $query = "UPDATE `category` SET `name`='$name',`image`='$filename' WHERE `id` = '$category_id'";

    $query_run = mysqli_query ($con, $query);

    if ($query_run) {
        move_uploaded_file($_FILES['upload_image']['tmp_name'], $target_dir . $filename);
        if (!$image2 == '') {
            if (file_exists($target_dir . $old_image)) {
                unlink($target_dir . $old_image);
            }
        }
        echo "<script>alert('Category Edit Sucessfully')
        window.location.href='category.php';
        
        </script>";
    }
    exit(0);{
        echo "<script>alert('Category Not Edit Sucessfully')
        window.location.href='category.php';
        
        </script>";
        exit(0);
    }

}

?>
 <!-- Images End -->

<div id="layoutSidenav">


    <?php
    include("includes/side_bar.php");
    ?>
    <div id="layoutSidenav_content">

        <div class="container">
            <div class="row">
                <div class="col-md-12">

                    <div class="card-header bg-light mt-3">
                        <h2>Edit Category</h2>

                        <a href="category.php" role="button" class="btn btn-outline-dark" style="float: right;margin-top:-42px;">Back</a>
                    </div>

                    <div class="card-body">

                        <?php
                        if (isset($_GET['id'])) {
                            $gallery_id = $_GET['id'];
                            $gallery = "SELECT * FROM category WHERE id='$gallery_id'";
                            $gallery_run = mysqli_query($con, $gallery);
                            if (mysqli_num_rows($gallery_run) > 0) {
                                foreach ($gallery_run as $gallery_value) {


                        ?>




                                    <form action="#" method="POST" enctype="multipart/form-data">

                                    <div class="mb-3">
                                            <!-- <label for="exampleInputEmail1" class="form-label">id</label> -->
                                            <input type="hidden" name="category_id" value="<?php echo $gallery_value['id']; ?>" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">

                                        </div>

                                        <div class="mb-3">
                                            <label for="exampleInputEmail1" class="form-label">Name</label>
                                            <input type="text" name="name" value="<?php echo $gallery_value['name']; ?>" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">

                                        </div>
                                        <div class="mb-3">
                                            <label for="exampleInputPassword1" class="form-label">Image</label>
                                            <input type="hidden" name="old_image" value = "<?= $gallery_value['image'] ?>">
                                            <input type="file" name="upload_image" class="form-control" id="exampleInputPassword1">
                                        </div>

                                        <button type="submit" name="submit" class="btn btn-primary waves-effect width-md waves-light">Submit</button>
                                    </form>


                                <?php
                                }
                            } else {
                                ?>
                                <h4>No Record Found</h4>
                        <?php
                            }
                        }
                        ?>


                    </div>
                </div>
            </div>
        </div>




        <!-- footer part -->
        <?php
        include("includes/footer.php");

        ?>


