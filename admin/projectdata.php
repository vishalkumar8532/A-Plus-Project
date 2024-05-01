
<?php
  // If upload button is clicked ...
  if (isset($_POST['upload'])) {
  
    $filename = $_FILES["project_image"]["name"];
    $tempname = $_FILES["project_image"]["tmp_name"];

    $synopsis = $_FILES["synopsis"]["name"];
    $synopsis_tmp = $_FILES["synopsis"]["tmp_name"];

  
  
    $code=$_POST['code'];
    $name=$_POST['name'];
    $description=$_POST['description'];
    $price=$_POST['price'];

   $folder = "image";
          
    $db = mysqli_connect("localhost", "root", "","a+project");
  
        // Get all the submitted data from the form
        $sql = "INSERT INTO project (name,description,price,project_image,synopsis,Code) VALUES ('$name','$description','$price','$filename','$synopsis','$code')";
  
        // Execute query
        mysqli_query($db, $sql);
          
        // Now let's move the uploaded image into the folder: image
        if (move_uploaded_file($tempname,"$folder/$filename") and move_uploaded_file($synopsis_tmp,"$folder/$synopsis") )
        {
          echo '<script>alert("Upload Successfully")
         window.location.href = "index.php";</script>';                                                                                                                                                                                                                                  
        }
        else
        {
            echo '<script>alert("Failed to upload data")
            window.location.href = "index.php";</script>';
        }
   }
  $result = mysqli_query($db, "SELECT * FROM image");
?>