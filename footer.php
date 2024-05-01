<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
<div class="vfx-counter-block">
        <div class="vfx-item-container-slope vfx-item-bottom-slope vfx-item-left-slope"></div>
        <div class="container">
            <div class="vfx-item-counter-up">
                <div class="row">
                    <div class="col-md-3 col-sm-6 col-xs-12">
                        <div class="vfx-item-countup">
                            <div class="vfx-item-black-top-arrow"><i class="fa fa-file"></i></div>
                            <div id="count-1" class="vfx-coutter-item count_number vfx-item-count-up">
                                                <?php
                                                $conn = new mysqli('localhost', 'root', '', 'a+project');
                                                $sql = "SELECT * FROM project";
                                                if ($result=mysqli_query($conn,$sql)) {
                                                    $rowcount=mysqli_num_rows($result);
                                                    echo $rowcount; 
                                                }
                                                ?></div>

                            <div class="counter_text">Project</div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 col-xs-12">
                        <div class="vfx-item-countup">
                            <div class="vfx-item-black-top-arrow"><i class="fa fa-users"></i></div>
                            <div id="count-2" class="vfx-coutter-item count_number vfx-item-count-up"><?php
                                                $conn = new mysqli('localhost', 'root', '', 'a+project');
                                                $sql = "SELECT * FROM user_info";
                                                if ($result=mysqli_query($conn,$sql)) {
                                                    $rowcount=mysqli_num_rows($result);
                                                    echo $rowcount; 
                                                }
                                                ?></div>
                            <div class="counter_text">Users</div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 col-xs-12">
                        <div class="vfx-item-countup">
                            <div class="vfx-item-black-top-arrow"><i class="fa fa-th"></i></div>
                            <div id="count-3" class="vfx-coutter-item count_number vfx-item-count-up">2</div>
                            <div class="counter_text">Categories</div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 col-xs-12">
                        <div class="vfx-item-countup last-countup">
                            <div class="vfx-item-black-top-arrow"><i class="fa fa-th-list"></i></div>
                            <div id="count-4" class="vfx-coutter-item count_number vfx-item-count-up">1</div>
                            <div class="counter_text">Sub Category</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<footer class="site-footer footer-map">
        <div class="footer-top">
            <div class="container">
                <div class="row">
                    <div class="col-md-4 col-sm-6 col-xs-12">

                        <h2>Follow Us</h2>
                        <hr>
                        <ul class="social-icons">
                            <li><a href="" rel=""><i class="fa fa-facebook"></i></a></li>
                            <li><a href="" rel=""><i class="fa fa-twitter"></i></a></li>
                            <li><a href="" rel="nofollow"><i class="fa fa-google-plus"></i></a></li>
                            <li><a href="" rel="nofollow"><i class="fa fa-linkedin"></i></a></li>
                            <li><a href="" rel="nofollow"><i class="fa fa-youtube-play"></i></a></li>

                        </ul>
                    </div>


                    <div class="col-md-4 col-sm-6 col-xs-12">
                        
                        
                
                    </div>
                    <div class="col-md-4 col-sm-6 col-xs-12">
                        <h2>Submit Your Request</h2>
                        <hr>
                        <form class="form-alt" id="newsletter" method="post" action="query.php">

                            <span id="Subscribeform"></span>
                            <div class="form-group">
                                <input type="text" placeholder="Name :-" name="name" id="name" required="" class="form-control">
                            </div>
                            <div class="form-group">
                                <input type="text" placeholder="Email :-" id="emailids" name="emailid" class="form-control">
                            </div>
                            <div class="form-group">
                                <input type="text" placeholder="Contact Number :-" id="emailids" name="contactno" class="form-control">
                            </div>
                            <div class="form-group">
                                <textarea placeholder="Message :-" id="message" name="message" class="form-control"></textarea>
                            </div>
                            <div class="form-group">
                                <button type="submit" onClick="subfeedback();" id="btnSubmit" class="btn-quote">Send Now</button>


                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-bottom">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-sm-12">
                        <p class="text-xs-center">Copyright © 2022 All Rights Reserved.</p>
                    </div>
                    <div><a href="#" class="scrollup">Scroll</a></div>
                </div>
            </div>
        </div>
    </footer>
</body>
</html>