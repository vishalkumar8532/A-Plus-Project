<?php
session_start();
if (!isset($_SESSION['email'])) {
  header("location:login.php");
}

include "./templates/top.php";

?>

<?php include "./templates/admin_navbar.php"; ?>


<div class="container-fluid">
  <div class="row">

    <?php include "./templates/sidebar.php"; ?>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
   <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

    <h2 style="display: contents;">Projects</h2>

   
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" style="margin-left: 900px;">
      Add Project
    </button>

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">ADD DATA</h5><br><br>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">

            <form action="projectdata.php" method="POST" enctype="multipart/form-data">
              <div class="form-group">
                <label for="exampleInputEmail1">Project Name</label>
                <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Project Name" name="name" required>

              </div>

              <div class="form-group">
                <label for="exampleInputPassword1">Project Description</label>
                <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Project Description" name="description" required>
              </div>


              <div class="form-group">
                <label for="exampleInputPassword1">Price </label>
                <input type="degit" class="form-control" id="exampleInputPassword1" placeholder="price" name="price"  required>
              </div>


              <div class="form-group">
                <label for="exampleInputPassword1">Image</label>
                <input type="file" class="form-control" id="exampleInputPassword1" placeholder="Image" name="project_image" accept="image/*" required>
              </div>

              <div class="form-group">
                <label for="exampleInputPassword1">Project synopsis</label>
                <input type="file" class="form-control" id="exampleInputPassword1" placeholder="Project synopsis" name="synopsis" accept=".zip,.rar,.7zip" required>
              </div>

              <div class="form-group">
                <label for="exampleInputPassword1">Project Source code</label>
                <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Project Source code" name="code"  required>
              </div>

              



              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary" name="upload">Save changes</button>
              </div>
            </form>
          </div>
        </div>
      </div>



    </div>

   

   

    <div class="table-responsive" style="margin-top: 30px;">
      <table class="table">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col" style="min-width: 30px;max-width: 50px;">Name</th>
            <th scope="col" style="word-wrap: break-word;min-width: 100px;max-width: 100px;">Description</th>
            <th scope="col">price</th>
            <th scope="col">Project Image</th>
            <th scope="col">Synopsis</th>
            <th scope="col">Code</th>
            <th scope="col">Edit Data</th>
            <th scope="col">Delete Data</th>


          </tr>
        </thead>
        <tbody>

          <?php
          $conn = new mysqli('localhost', 'root', '', 'a+project');
          if ($conn->connect_error) {
            die('Connection Failed :' . $conn->connect_error);
          } else {

            $stmt = "select * from project";
            $query = mysqli_query($conn, $stmt);
            $nums = mysqli_num_rows($query);
            while ($data = mysqli_fetch_array($query)) {
          ?>
              <tr>
                <td>&#9673;</td>
                <td style="min-width: 30px;max-width: 90px;"><?php echo $data['name'] ?></td>
                <td style="word-wrap: break-word;min-width: 100px;max-width: 200px; "><?php echo $data['description']?></td>
                <td><?php echo $data['price'] ?></td>
                
                <td><?php  
                echo "<img src='image/".$data['project_image']."' width='150' height='100'>"; ?></td>

               <td>
                  
                    
                   <?php echo "<a href='image/".$data['synopsis']."' download>"?>
                   <button  class="btn btn-primary" ><?php echo $data['synopsis']; ?></button>
                      </a>
                  
                </td>

                <td>
                <button  class="btn btn-primary" > <a href="<?php echo $data['Code']?>" target="_blank" style="color: white;">Source Code</button></a>
                  
                </td>

                <td>
                  <form action="edit_project.php" method="POST">
                    <input type="hidden" name="edit_id" value="<?php echo $data['id']?>">
                  <button type="submit" class="btn btn-primary"  >Edit</button>
                  </form>
                </td>
                <td>
                  <form action="delete_project.php" method="POST">
                    <input type="hidden" name="delete_id" value="<?php echo $data['id']?>">
                  <button type="submit" class="btn btn-danger" name="delete_btn" >Delete</button>
                  </form>
                </td>
                  
              </tr>

          <?php }
          }
          ?>



        </tbody>
      </table>

    </div>
  </div>


</div>


