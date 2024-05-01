<?php include "navbar.php"; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>A+ Project| Buy Page</title>

    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
    
    <link rel="stylesheet" href="css/project.css">

</head>
<body>

<div class="albums" >

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
                    <div class="album">
                        <?php
                        
                        echo "<img src='admin/image/".$data['project_image']."' width='250' height='200'>"; ?>
                            <div class="album__details" >
                                <h2><?php echo $data['name'] ?></h2>
                                <!-- <p class="album__artist">Artist Name</p> -->
                                <p class="album__desc"><?php echo $data['description']?></p>
                                <span style="color: black;background-color: #ffffcc;border-left: 6px solid #ffeb3b;border-right: 6px solid #ffeb3b;padding:0px 40px 0px 15px;margin:0px 5px 0px 8px;font-size:20px;border-radius:8px"> ₹  <?php echo $data['price']?>    </span> 
                                <?php echo "<a href='admin/image/".$data['synopsis']."' download>"?>
                            <button  style="color: black;background-color: #ffffcc;border-left: 6px solid #ffeb3b;border-right: 6px solid #ffeb3b;padding:0px 10px 0px 15px;margin:0px 5px 0px 8px;font-size:20px;border-radius:8px" >Download Synopsis <i class='fas fa-arrow-circle-down'></i></button>
                                </a>

                            <button style="color: black;background-color: #ffffcc;border-left: 6px solid #ffeb3b;border-right: 6px solid #ffeb3b;padding:0px 10px 0px 15px;margin:0px 5px 0px 8px;font-size:20px;border-radius:8px"><a href="<?php echo $data['Code']?>" target="_blank">Download Source code <i class='fas fa-arrow-circle-down'></i></button></a>
                                
                                
                                
                        </div>
                        
                        
                    </div>

                    <?php }
                    }
                    ?>

   
    

</div>




  
      
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>


</body>
</html>

<?php include "footer.php"; ?>

