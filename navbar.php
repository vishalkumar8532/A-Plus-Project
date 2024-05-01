<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="css/animate.css" type="text/css">
    <link rel="stylesheet" href="css/stylesheet.css" type="text/css">
    <link rel="stylesheet" href="css/responsive_style.css" type="text/css">
    <link rel="stylesheet" href="css/superlist.css" type="text/css">
    <link rel="stylesheet" href="css/owl.carousel.css" type="text/css">
    <link rel="stylesheet" href="css/colorbox.css" type="text/css">
    <script type="text/javascript" src="js/chat.js"></script>


    <script type="text/javascript" src="js/password.js"></script>

</head>
<body>


   <div id="logo-header" data-spy="affix" data-offset-top="700" class="affix-top">
        <div class="container">
            <div class="row">
                <div class="col-sm-3 col-xs-9">
                    <div id="logo"> 
                          <img src="images/logo4.png" alt="logo"> 
                    </div>
                </div>
                <div class="col-sm-9 text-right">
                    <nav class="navbar navbar-default">
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#thrift-1" aria-expanded="false"> <span class="sr-only">Toggle Navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
                        </div>
                        <div class="collapse navbar-collapse" id="thrift-1"> <a href="" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"></a>
                            <div id="nav_menu_list">
                                <ul>
                                    <li class=""><a href="index.php">Home</a></li>

                                    <li class=""><a href="about.php">About</a></li>

                                    <li class=""><a href="project.php">Project</a> </li>

                                    <li class=""><a href="sell.php">Sell</a> </li>

                                   
                                


                                    <li class="btn_item">
                                        <ul>
                                            <!-- <li>
                                                <button class="btn_login" data-toggle="modal" data-target="#login">Login</button>
                                            </li> -->
						
                                            <li class=" ">

                                                <button class="bst" data-toggle="modal" data-target="#registersss">Query</button>
                                            </li>
                                        </ul>

                                    </li>



                                </ul>
                            </div>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </div>

<div class="modal fade" id="registersss"   role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="listing-modal-1 modal-dialog" style="width: 315px;">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
        <h4 class="modal-title" id="myModalLabel23">Query Form</h4>
      </div>
      <div class="modal-body">
        <div class="listing-registers-form">
		
          <form class="form-float form-alt" method="post" action="query.php">
		  <p>  </p>
            <div class="row">
              <div class="form-group col-xs-12"> <span class="from-input-ic"></span>
                <input class="form-control" required="" placeholder="Frist Name" name="name" type="text">
              </div>
             
              <div class="form-group col-xs-12" > <span class="from-input-ic"></span>
                <input class="form-control" required="" placeholder="Email" name="emailid" type="email">
              </div>
              <div class="form-group col-xs-12"> <span class="from-input-ic"></span>
                <input class="form-control" required="" pattern="[6-9]{1}[0-9]{9}" placeholder="Contact Number" name="contactno" type="text">
              </div>
              <div class="form-group col-xs-12"> <span class="from-input-ic"></span>
                <textarea class="form-control" required="" placeholder="Your Message" name="message"></textarea>
              </div>
             
              <div class="form-group col-xs-12">
                <button class="btn pull-right" type="submit" name="submit">Submit</button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
    



     <!-- login form 
     <div class="modal fade" id="login" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="listing-modal-1 modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true" onclick="getclose()">x</button>
                    <h4 class="modal-title" id="myModalLabel"> Login</h4>

                </div>


                <div class="modal-body">
                    <div class="listing-login-form">
                        <p id="messagefeedback2"></p>
                        <form action="#" id="myForm_forgotl">
                            <div class="listing-form-field"> <i class="fa fa-user blue-1"></i>
                                <input class="form-field bgwhite" type="text" id="emailid" name="user_name" placeholder="Email">
                            </div>
                            <div class="listing-form-field"> <i class="fa fa-lock blue-1"></i>
                                <input class="form-field bgwhite" id="password" type="password" name="user_pass" placeholder="Password">
                            </div>
                            <div class="listing-form-field clearfix margin-top-20 margin-bottom-20">
                                <input type="checkbox" id="checkbox-1-1" class="regular-checkbox">
              <label for="checkbox-1-1"></label>
              <label class="checkbox-lable">Remember Me</label>
                                <a href="#" data-toggle="modal" data-target="#forgot" onclick="getshow()">Forgot Password?</a> </div>
                            <div class="listing-form-field">
                                <button class="submitb" type="button" value="" onClick="loginuser();"> login</button>
                            </div>
                        </form>
                        <div class="bottom-links">
                            <p>Not a Member?<a href="#" data-toggle="modal" data-target="#register">Create Account</a></p>
                        </div>
                    </div>
                </div>



            </div>
        </div>
    </div>


     
     <div class="modal fade" id="register" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="listing-modal-1 modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true" onclick="getclose()">x</button>
                    <h4 class="modal-title" id="myModalLabel2">Registration</h4>
                </div>
                <div class="modal-body">
                    <div class="listing-register-form">

                        <form  action="registration.php" method="post">

                            <div class="listing-form-field"> <i class="fa fa-user blue-1"></i>
                                <input class="form-field bgwhite" type="text" id="fullname" name="user_name" placeholder="Name" required>
                            </div>
                            <div class="listing-form-field"> <i class="fa fa-envelope blue-1"></i>
                                <input class="form-field bgwhite" id="emailid_reg" type="email" name="user_email" placeholder="Email" required>
                            </div>
                            <div class="listing-form-field"> <i class="fa fa-lock blue-1"></i>
                                <input class="form-field bgwhite" type="password" id="password" name="user_password" placeholder="Password" onchange="validatePassword()" required>
                            </div>
                            <div class="listing-form-field"> <i class="fa fa-lock blue-1"></i>
                                <input class="form-field bgwhite" type="password" id="confirm_password"  placeholder="Confirm Password" onkeyup="validatePassword()" required>
                            </div>
                            <div class="listing-form-field clearfix margin-top-20 margin-bottom-20 login_form_text_center">
                               
                                
                                 <label class="checkbox-lable"><input type="checkbox" id="checkbox-1-2" checked value="1" class="" required> i agree with Terms  Conditions 
                                    Privacy Policy</div></label>
                            <div class="listing-form-field">
                                <button type="submit" class="submitb"  value="">create account </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
-->
   
  
    <script src="js/jquery-2.2.4.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/waypoints.js"></script>
    <script src="js/jquery_counterup.js"></script>
    <script src="js/jquery_custom.js"></script>

    
</body>
</html>