
<?php

if(isset($_POST['name']) && isset($_POST['emailid']) && isset($_POST['contactno'])){
    $name=$_POST['name'];
    $emailid=$_POST['emailid'];
    $contactno=$_POST['contactno'];
    $message=$_POST['message'];


  }



$conn=new mysqli('localhost','root','','a+project');
if($conn->connect_error)
{
die('Connection Failed :'.$conn->connect_error);
}
else{

   
    
    
      $stmt=$conn->prepare("insert into query(name,emailid,contactno,message)
      values(?,?,?,?)");
      $stmt->bind_param("ssss",$name,$emailid,$contactno,$message);
      $stmt->execute();
      echo '<script>alert("Query submited Successfully")
      window.location.href = "index.php";</script>';
      $stmt->close();
      $conn->close();
     
    
    
}

?>