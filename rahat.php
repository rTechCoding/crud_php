
<!-- Modal -->
<div class="modal fade" id="Addadminprofile" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role = "document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add Admin Data</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
        <samp aria-hidden="true">&times;</samp>
        </button>
    </div>
    <form action="code.php" method="POST">
      <div class="modal-body">
        <div class="form-group">
            <label>Username</label>
            <input type="text" name="username" class="form-control" placeholder="Enter Username">
        </div>
        <div class="form-group">
            <label>Email</label>
            <input type="email" name="email" class="form-control" placeholder="Enter Email">
        </div>
        <div class="form-group">
            <label>Password</label>
            <input type="password" name="pass" class="form-control" placeholder="Enter Password">
        </div>
        <div class="form-group">
            <label>Confirm Password</label>
            <input type="password" name="conf_pass" class="form-control" placeholder="Confirm Password">
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" name ="registerbtn" class="btn btn-primary">Save changes</button>
      </div>
    </form>

    </div>
  </div>
</div>

<div class = "container-fluid">

   <!-- Button trigger modal -->
     <div class = "card shadow mb-4">
        <div class="ard-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Admin Profile
              <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                Add Admin Profile
              </button>
            </h6>
        </div>
        
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width=100% cellspacing="0">
                    <thead>
                        <tr>
                           <th>Id</th> 
                           <th>Username</th>
                           <th>Email</th>
                           <th>Password</th>
                           <th>EDIT</th>
                           <th>DELETE</th>
                        </tr>
                    </thead>
                </table>
            </div>
        </div>

     </div>


</div>