<?php include "navbar.php"; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="css/sell.css">
    <link rel="stylesheet" href="css/stylesheet.css" type="text/css">
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>



<!-- Font Awesome Fonts-->
<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>

<!-- Google Fonts-->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>A+ Project| Sell Page</title>
</head>

<body>



    <div class="mainbx" style="margin-top: 50px;margin-left: 135px; padding-top:50px;padding-left:100px;padding-bottom:50px;border-radius:4px;">


        <form action="sellupload.php" method="POST" enctype="multipart/form-data">

            <div class="row">



                <div class="column1">

                    <div class="inputbx">
                        <span>Project Name:</span><br>
                        <input type="text" name="project_name"  required>
                    </div>


                    <div class="inputbx">
                        <span>Project Description:</span><br>
                        <input type="textarea" name="project_description"  required>
                    </div>



                    <div class="inputbx">
                        <span>Mobile Number:</span><br>
                        <input type="degit" name="number"  required>
                    </div>



                    <div class="inputbx">
                        <span>Email ID:</span><br>
                        <input type="email" name="email"  required>
                    </div>



                </div>


                <div class="ccolumn2">

                    <div class="inputbx">
                        <span>Language Used in Project:</span><br>
                        <input type="text" name="language"  required>
                    </div>


                    <div class="inputbx">
                        <span>UPI ID:</span><br>

                        <input type="text" name="upi"  required>
                    </div>


                    <div class="inputbx">
                        <span>Project synopsis:</span><br>
                        <input type="file" name="synopsis" accept=".zip,.rar,.7zip"  required>


                    </div>



                    <div class="inputbx">
                        <span>Project Source Code:</span>
                        <input type="file" name="source_code" accept=".zip,.rar,.7zip"  required>
                    </div>

                    <div>
                        <!-- <input value="Submit" type="submit" name="upload" class="btn"> -->
                        <button name="upload" type="submit" class="btn" >Submit</button>
                    </div>





                </div>
            </div>
    </div>
    </form>

    </div>


</body>

</html>








<?php include "footer.php"; ?>