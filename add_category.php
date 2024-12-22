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

          <div class="card-header bg-light mt-3">
            <h2><i class="fa fa-puzzle-piece" aria-hidden="true"></i> Add Category</h2>

            <a href="category.php" role="button" class="btn btn-outline-success" style="float: right;margin-top:-42px;"><i class="fa fa-chevron-circle-left"></i>Back</a>
          </div>

          <div class="card-body">






            <form action="category_call.php" method="POST" enctype="multipart/form-data">
              <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Name</label>
                <input type="text" name="name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">

              </div>
              <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Image</label>
                <input type="file" name="image" class="form-control" id="exampleInputPassword1">
              </div>

              <button type="submit" name="submit" class="btn btn-primary">Submit</button>
            </form>



          </div>
        </div>
      </div>
    </div>




    <!-- footer part -->
    <?php
    include("includes/footer.php");
    ?>