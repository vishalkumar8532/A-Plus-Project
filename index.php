<?php include "navbar.php"; ?>
<!DOCTYPE html>
<html>

<head>
    <title>A+ Projects|Home Page</title>
    <!-- Style Sheets -->

    <link rel="stylesheet" href="css/stylesheet.css" type="text/css">
    <link rel="stylesheet" href="css/project.css" type="text/css">
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>



    <!-- Font Awesome Fonts-->
    <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>

    <!-- Google Fonts-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


    <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>

</head>

<body>




    <div id="preloader" style="position: fixed;left: 45%; top:30%; z-index:999999; display:none;"><img alt="loader"
            src="https://projecttunnel.com/images/loader.gif"></div>
    <div id="preloadoverlay"
        style=" background-color:rgba(0, 0, 0, 0.48); position:fixed; display:none; width:100%; height:100%; z-index:9999">
    </div>

    <div id="location-map-block" style="display: none;">
        <div id="location-homemap-block"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12 col-lg-12">
                    <div id="location-link-item">
                        <button id="map_list"><i class="fa fa-angle-double-up"></i></button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="slider-banner-section">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 text-center">
                    <div id="home-slider-item">
                        <p>Search By Project Title</p>

                        <h1>Amazing Classified Projects</h1>
                    </div>
                    <div id="search-categorie-item-block">
                        <form id="categorie-search-form" method="get" action="search.php">
                            <h1>Search any Business Listing</h1>
                            <div class="col-sm-9 col-md-10 nopadding">
                                <div id="search-input">
                                    <div class="col-sm-3 nopadding">
                                        <select name="category" class="form-control">
                                            <option value="">All Technology</option>
                                            <!-- <option value="17">BCA</option>
                                            <option value="16">Btech</option> -->

                                        </select>
                                    </div>
                                    <div class="col-sm-9 nopadding">
                                        <div class="form-group">
                                            <input type="text" value="" class="form-control btn tts ts" required
                                                id="keyword" tabindex="0" name="s" placeholder="Enter Keyword"
                                                style="margin-left: -8px;">
                                            <div id="ajax_response" class="box-s"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-3 col-md-2 text-right nopadding-right" id="new">
                                <div id="location-search-btn">
                                    <button type="button" id="search-btn"><i class="fa fa-search"></i>Search</button>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div id="location_slider_item_block"> </div>
                </div>
            </div>
        </div>
    </div>
    <!-- <div id="search-categorie-item">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 text-center">
                    <div class="row">
                        <div class="col-md-12 categories-heading bt_heading_3">
                            <h1>Project <span>Categories</span></h1>
                            <div class="blind line_1"></div>
                            <div class="flipInX-1 blind icon"><span class="icon"><i class="fa fa-stop"></i>&nbsp;&nbsp;<i class="fa fa-stop"></i></span></div>
                            <div class="blind line_2"></div>
                        </div>
                       
                        <div class="col-md-3 col-sm-6 col-xs-12">
                            <div class="categorie_item">
                                <a href="">
                                    <div class="cate_item_block hi-icon-effect-8">
                                        <div class="cate_item_social hi-icon"><i class="fa fa-desktop" aria-hidden="true"></i></div>
                                        <h1><a href="">BCA</a></h1>
                                    </div>
                                </a>
                            </div>
                        </div>
                      
                    
                       
                     
                   
                        <div class="col-md-3 col-sm-6 col-xs-12">
                            <div class="categorie_item">
                                <a href="">
                                    <div class="cate_item_block hi-icon-effect-8">
                                        <div class="cate_item_social hi-icon"><i class="fa fa-desktop" aria-hidden="true"></i></div>
                                        <h1><a href="">Btech</a></h1>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> -->


    <div class="col-sm-12 text-center">
        <div class="col-md-12 recent-item-listing-heading bt_heading_3">
            <h1 style="margin-top:40px;">Recent <span>Listing</span></h1>
            <div class="blind line_1"></div>
            <div class="flipInX-1 blind icon"><span class="icon"><i class="fa fa-stop"></i>&nbsp;&nbsp;<i
                        class="fa fa-stop"></i></span></div>
            <div class="blind line_2"></div>
        </div>

    </div>



    <div class="albums">

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
            <div class="album__details">
                <h2><?php echo $data['name'] ?></h2>
                <!-- <p class="album__artist">Artist Name</p> -->
                <p class="album__desc"><?php echo $data['description']?></p>
                <span
                    style="color: black;background-color: #ffffcc;border-left: 6px solid #ffeb3b;border-right: 6px solid #ffeb3b;padding:0px 40px 0px 15px;margin:0px 5px 0px 8px;font-size:20px;border-radius:8px">
                    ₹ <?php echo $data['price']?> </span>
                <?php echo "<a href='admin/image/".$data['synopsis']."' download>"?>
                <button
                    style="color: black;background-color: #ffffcc;border-left: 6px solid #ffeb3b;border-right: 6px solid #ffeb3b;padding:0px 10px 0px 15px;margin:0px 5px 0px 8px;font-size:20px;border-radius:8px">Download
                    Synopsis <i class='fas fa-arrow-circle-down'></i></button>
                </a>

                <button
                    style="color: black;background-color: #ffffcc;border-left: 6px solid #ffeb3b;border-right: 6px solid #ffeb3b;padding:0px 10px 0px 15px;margin:0px 5px 0px 8px;font-size:20px;border-radius:8px"><a
                        href="<?php echo $data['Code']?>" target="_blank">Download Source code <i
                            class='fas fa-arrow-circle-down'></i></button></a>



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