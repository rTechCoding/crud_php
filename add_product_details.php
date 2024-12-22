<!-- header part -->
<?php
include("includes/header.php");
include ("db/conn.php");
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
            <h2><i class="fa fa-puzzle-piece" aria-hidden="true"></i>Add Product Details</h2>

            <a href="product_details.php" role="button" class="btn btn-outline-dark" style="float: right;margin-top:-42px;"><i class="fa fa-chevron-circle-left"></i>Back</button></a>
          </div>

          <div class="card-body">






            <form action="product_call.php" method="POST" enctype="multipart/form-data">


              <div class="mb-3">
                <label for="exampleInputFullname" class="form-label">Category</label>
                <select  name="category_name" class="form-control" aria-describedby="emailHelp">
                  <option>Select Category</option>
               <?php

                  $query = "SELECT id,name FROM category";
                  $query_run = mysqli_query($con,$query);
                  while($row = mysqli_fetch_assoc($query_run)){

                    echo"<option value=" . $row['id'] . ">" . $row['name'] . "</option>";

                  }

              ?>
                </select>
              </div>
        
              <div class="mb-3">
                <label for="exampleInputFullname" class="form-label">Product Name</label>
                <input type="text" name="product_name" class="form-control" id="exampleInputName" aria-describedby="emailHelp" required>
              </div>

              <div class="mb-3">
                <label for="exampleInputPrice" class="form-label">Price</label>
                <input type="text" name="price" class="form-control" id="exampleInputPrice" required>
              </div>

              <div class="mb-3">
                <label for="exampleInputQuantity" class="form-label">Quantity</label>
                <input type="text" name="quantity" class="form-control" id="exampleInputQuantity">
              </div>

              <div class="mb-3">
                <label for="exampleInputDescription" class="form-label">Description</label>
               <textarea name="description" id="" class="form-control" cols="30" rows="5"></textarea>
              </div>

              <div class="mb-3">
                <label for="exampleInputImage" class="form-label">Image</label>
                <input type="file" name="image" class="form-control" id="exampleInputImage" required>
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