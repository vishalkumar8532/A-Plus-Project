<?php session_start(); ?>
<?php include "./templates/admin_navbar.php"; 
    include "./templates/top.php";
    include "./templates/sidebar.php";?>
<?php
if(isset($_POST['edit_id']))
{
    $id=$_POST['edit_id'];

}

$conn=new mysqli('localhost','root','','a+project');
if($conn->connect_error)
{
die('Connection Failed :'.$conn->connect_error);
}
else{

    $sql="SELECT * FROM project where ID =$id";
    $query_run=mysqli_query($conn,$sql);
    foreach($query_run as $row)
    {
        ?>
<form action="update_project.php" method="POST"  enctype="multipart/form-data">

       <input type="hidden" name="edit_id" value="<?php echo $row['id']?>"> 
    <div class="form-group">
        <label for="exampleInputEmail1">Project Name</label>
        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"  name="name" value="<?php echo $row['name'];?>">

    </div>

    <div class="form-group">
        <label for="exampleInputPassword1">Project Description </label>
        <input type="text" class="form-control"  name="description" value="<?php echo $row['description'];?>">
    </div>


    <div class="form-group">
        <label for="exampleInputPassword1">Price </label>
        <input type="text" class="form-control"  name="price" value="<?php echo $row['price'];?>">
    </div>






    <div class="form-group">
        <label for="exampleInputPassword1">Image</label>
        <input type="file" name="project_image" class="form-control">
        <input type="text" class="form-control" name="project_old_image" value="<?php echo $row['project_image'];?>">
        <!-- <?php  
                echo "<img src='image/".$row['project_image']."' width='150' height='100'>"; ?> -->
    </div> 

    <div class="form-group">
        <label for="exampleInputPassword1">Synopsis</label>
        <input type="file" name="synopsis" class="form-control">
        <input type="text" class="form-control" name="synopsis" value="<?php echo $row['synopsis'];?>">
       
    </div>

    <div class="form-group">
        <label for="exampleInputPassword1">Source Code </label>
        <input type="text" class="form-control"  name="code" value="<?php echo $row['Code'];?>">
    </div>



    <div class="modal-footer">
        <a href="index.php" class="btn btn-danger">Cancel</a>
        <button type="submit" class="btn btn-primary" name="update_btn"> Update</button>
    </div>
</form>
  <?php  }
  
}

?>