<?php
session_start();
if (!isset($_SESSION['email'])) {
  header("location:login.php");
}

include "./templates/top.php";

?>
<?php include "./templates/admin_navbar.php"; ?>
<?php include "./templates/sidebar.php"; ?>


<div class="table-responsive" style="margin-top: 30px;">
      <table class="table">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col" style="min-width: 30px;max-width: 50px;">Name</th>
            <th scope="col" style="word-wrap: break-word;min-width: 100px;max-width: 100px;">Description</th>
            <th scope="col">Number</th>
            <th scope="col">Email</th>
            <th scope="col">Language</th>
            <th scope="col">UPI ID</th>
            <th scope="col">Synopsis</th>
            <th scope="col">Source Code</th>


          </tr>
        </thead>
        <tbody>

          <?php
          $conn = new mysqli('localhost', 'root', '', 'a+project');
          if ($conn->connect_error) {
            die('Connection Failed :' . $conn->connect_error);
          } else {

            $stmt = "select * from sell";
            $query = mysqli_query($conn, $stmt);
            $nums = mysqli_num_rows($query);
            while ($data = mysqli_fetch_array($query)) {
          ?>
              <tr>
                <td>&#9673;</td>
                <td style="min-width: 30px;max-width: 90px;"><?php echo $data['project_name'] ?></td>
                <td style="word-wrap: break-word;min-width: 100px;max-width: 200px; "><?php echo $data['project_description']?></td>
                <td><?php echo $data['number'] ?></td>
                <td><?php echo $data['email'] ?></td>
                <td><?php echo $data['language'] ?></td>
                <td><?php echo $data['upi'] ?></td>

                
                
                  <td>
                    
                   <?php echo "<a href='data/".$data['synopsis']."' download>"?>
                   <button  class="btn btn-primary" ><?php echo $data['synopsis']; ?></button>
                      </a>
                  
                </td>

                <td>
                  
                    
                   <?php echo "<a href='data/".$data['source_code']."' download>"?>
                   <button  class="btn btn-primary" ><?php echo $data['source_code']; ?></button>
                      </a>
                  
                </td>

              
                  
              </tr>

          <?php }
          }
          ?>



        </tbody>
      </table>

    </div>