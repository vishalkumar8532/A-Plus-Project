<?php
if(isset($_POST['update_btn'])){
    $id=$_POST['edit_id'];
    $name=$_POST['name'];
    $description=$_POST['description'];
    $price=$_POST['price'];
    $code=$_POST['code'];

    $new_image= $_FILES["project_image"]["name"];
    $old_image = $_POST["project_old_image"];


    if($new_image = ' ')
    {
          
          
          $conn=new mysqli('localhost','root','','a+project');
          if($conn->connect_error)
          {
          die('Connection Failed :'.$conn->connect_error);
          }
          else
          {

              $query="UPDATE project SET name='$name', description='$description',price='$price',project_image='$old_image',Code='$code' WHERE ID='$id'";
              $query_run=mysqli_query($conn,$query);
              
              if($query_run)
              {
                echo '<script>alert("s")
                window.location.href = "index.php";</script>';

              }
            
             
           }
     }       
    else
    {

      $update_filename=$old_image;


      if(file_exists("image/" . $_FILES['project_image']['name']))
      {

      $filename=$_FILES["project_image"]["name"];
      echo '<script>alert("a")
          window.location.href = "index.php";</script>';
      }
      else
      {
                  
            
            $conn=new mysqli('localhost','root','','a+project');
            if($conn->connect_error)
            {
            die('Connection Failed :'.$conn->connect_error);
            }
            else
            {

              $query="UPDATE project SET name='$name', description='$description',price='$price',project_image='$update_filename',Code='$code' WHERE ID='$id'";
              $query_run=mysqli_query($conn,$query);
              
              if($query_run)

              {

                if($_FILES['project_image']['name'] !="")
                {
                  move_uploaded_file($_FILES["project_image"]["tmp_name"], "image/".$_FILES["project_image"]["name"]); 
                  unlink("image/".$old_image);
                  echo '<script>alert("s")
                window.location.href = "index.php";</script>';
                }
                
              }
              else
              {
              
                echo '<script>alert("Data not update")
                window.location.href = "index.php";</script>';
                
              
              }
         
            }  
    
      }
    }

              
    
  }
?>