<?php
  // If upload button is clicked ...
  if (isset($_POST['upload'])) {
  
    $filename = $_FILES["source_code"]["name"];
    $tempname = $_FILES["source_code"]["tmp_name"];

    $synopsis = $_FILES["synopsis"]["name"];
    $synopsis_tmp = $_FILES["synopsis"]["tmp_name"];

  
  
    $project_name=$_POST['project_name'];
    $project_description=$_POST['project_description'];
    $number=$_POST['number'];
    $email=$_POST['email'];
    $language=$_POST['language'];
    $upi=$_POST['upi'];





   $folder = "admin/data";
          
    $db = mysqli_connect("localhost", "root", "","a+project");
  
        // Get all the submitted data from the form
        $sql = "INSERT INTO sell (project_name,project_description,email,number,language,upi,synopsis,source_code) VALUES ('$project_name','$project_description','$email','$number','$language','$upi','$synopsis','$filename')";
  
        // Execute query
        mysqli_query($db, $sql);
          
        // Now let's move the uploaded image into the folder: image
        if (move_uploaded_file($tempname,"$folder/$filename") and move_uploaded_file($synopsis_tmp,"$folder/$synopsis") )
        {
          echo '<script>alert("Your Project Sumited Successfully After Verify Your Project We Will Contact with you")
         window.location.href = "sell.php";</script>';                                                                                                                                                                                                                                  
        }
        else
        {
            echo '<script>alert("Failed to upload data")
            window.location.href = "index.php";</script>';
        }
   }
  $result = mysqli_query($db, "SELECT * FROM image");
?>