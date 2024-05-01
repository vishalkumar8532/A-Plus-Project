<?php

if(isset($_POST['user_name']) && isset($_POST['user_email']) && isset($_POST['user_password'])){
    $name=$_POST['user_name'];
    $email=$_POST['user_email'];
    $password=$_POST['user_password'];
  }



$conn=new mysqli('localhost','root','','a+project');
if($conn->connect_error)
{
die('Connection Failed :'.$conn->connect_error);
}
else{

    $stmt=$conn->prepare("select * from user_info where email =?");
    $stmt->bind_param("s",$email);
    $stmt->execute();
    $result=$stmt->get_result();
    
    if($result->num_rows>0)
    {
      echo '<script>alert("Email id Already Exists")
      window.location.href = "index.php";
      </script>';
    }
    
    else
    {
      $stmt=$conn->prepare("insert into user_info(name,email,password)
      values(?,?,?)");
      $stmt->bind_param("sss",$name,$email,$password);
      $stmt->execute();
      echo '<script>alert("REgistration succcessfully") 
        window.location.href = "index.php";
        </script>';
     
      $stmt->close();
      $conn->close();
    }
    
}

?>