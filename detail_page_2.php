<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="shortcut icon" href="img/Asset.ico" />
    <link rel="icon" href="img/Asset.ico" />
    <link rel="apple-touch-icon" sizes="16x16" href="img/Asset.ico" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" />
    <link rel="stylesheet" href="css/style.css?v=<?php echo time(); ?>" />
    <link rel="stylesheet" href="css/sub_page_4.css?v=<?php echo time(); ?>" />
    <link rel="stylesheet" href="css/detail_page.css?v=<?php echo time(); ?>" />
    <link rel="stylesheet" href="css/media.css?v=<?php echo time(); ?>" />
    <link rel="stylesheet" href="css/media_detail_page.css?v=<?php echo time(); ?>" />
    <title>e-flux</title>
</head>

<body id="body">
    <?php
        $num=$_GET["num"];
        $con=mysqli_connect("localhost", "tmxlraos","","tmxlraos");
        $sql="select * from eflux_table_4 where num = $num order by num desc";
        $result=mysqli_query($con, $sql);
         while($row=mysqli_fetch_array($result)){
        $tag =$row["tag"];
        // $image_1=$row["image"];
        // $image_2=$row["image_2"];
        // $image_3=$row["image_3"];
        // $image_4=$row["image_4"];
        $sub_txt=$row["sub_txt"];
        $title=$row["title"];
        $main_txt=$row["main_txt"];
        $regist_day=$row["regist_day"]
        ?>
    <div class="bg_animation"></div>
    <!-- <div class="loader-wrapper">
        <div class="loader"></div>
    </div> -->
    <!-- <div class="main_nav_background"></div> -->
    <div class="subscribe">
        <?php include "include/subscribe.php" ?>
    </div>
    <div class="contact">
        <?php include "include/contact.php" ?>
    </div>
    <div class="wrap">
        <!-- header & navigation section -->
        <section class="main_nav" id="navbar">
            <div class="main_nav_list clear">
                <a class="main_logo_content" href="index.php">e-flux</a>
                <p>architecture</p>
                <em><?=$regist_day?> - <?=$title?></em>

                <div class="side_nav_bars">
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
                <div class="search_icon" id="search_icon" onclick="openNav()">
                    <img id="search_icon_img" class="bottom_img" src="img/search_white.svg" alt="search_icon" />
                    <img id="search_icon_img" class="top_img" src="img/search.svg" alt="search_icon" />
                </div>
                <div class="close_icon">
                    <img src="https://www.e-flux.com/elements/close.svg" alt="">
                </div>
                <div id="pointer"></div>
                <div class="subHeader">
                    <div class="subHeader_date">
                        <b><?=$regist_day?></b>
                    </div>
                    <div class="subHeader_title">
                        e-flux <b> <?=$tag?></b>
                    </div>
                </div>
            </div>
            <div class="search_bar clear" id="search_bar">
                <form action="">
                    <div class="search_bar_content">
                        <select name="search_bar_select" id="">
                            <option value="">Show all</option>
                            <option value="">Announcements</option>
                            <option value="">Journal</option>
                            <option value="">Reviews</option>
                            <option value="">Architecture</option>
                            <option value="">Projects</option>
                        </select>
                        <input type="text" name="search_bar_input" placeholder="search for ..." />
                        <div class="search_bar_close" onclick="closeNav()">
                            <span></span>
                            <span></span>
                        </div>
                        <button>Search</button>
                    </div>
                </form>
            </div>
            <div class="side_nav">
                <div class="side_nav_main">
                    <a class="main_logo_content" href="index.php">e-flux</a>
                    <a class="side_nav_main_content" href="sub_page_1.php">Announcements</a>
                    <a class="side_nav_main_content" href="sub_page_2.php">Journal</a>
                    <a class="side_nav_main_content" href="sub_page_3.php">Reviews</a>
                    <a class="side_nav_main_content" href="sub_page_4.php">Architecture</a>
                    <a class="side_nav_main_content" href="sub_page_5.php">Projects</a>
                    <a class="side_nav_sub" href="sub_page_6.php">About</a>
                    <a class="side_nav_sub" href="sub_page_7.php">Get the e-flux App</a>
                </div>
                <div class="side_nav_footer">
                    <div class="side_nav_footer_left">
                        <a href="https://www.facebook.com/efluxeflux/" target="_blank">Facebook</a>
                        <a href="https://www.instagram.com/e_flux/" target="_blank">Instagram</a>
                        <a href="https://twitter.com/e_flux" target="_blank">Twitter</a>
                        <a href="sub_page_8.php" class="side_nav_footer_left_bottom">Privacy Policy</a>
                    </div>
                    <div class="side_nav_footer_right">
                        <a class="subscribe_pop">Subscribe</a>

                        <a class="contact_pop">Contact</a>

                        <a class="side_nav_footer_right_bottom">311 East Broadway Seoul,<br />
                            NY 10002, Korea</a>
                    </div>
                </div>
            </div>
        </section>

        <!-- main content & container section -->
        <section class="main_contents">
            <div class="content_title">
                <h4><?=$regist_day?></h4>
                <h3><?=$title?></h3>
            </div>
            <div class="content_image clear">
                <div class="image_boxs clear">
                    <?php
        $num=$_GET["num"];
        $con=mysqli_connect("localhost", "tmxlraos","","tmxlraos");
        $sql="select * from eflux_table_4 where num = $num order by num desc";
        $result=mysqli_query($con, $sql);
         while($row=mysqli_fetch_array($result)){
        $image_1=$row["image_1"];
        $image_2=$row["image_2"];
        $image_3=$row["image_3"];
        $image_4=$row["image_4"];
             for ($i = 1; $i <= 4; $i++) {
             $image = $row["image_".$i];
        ?>
                    <div class="image_box">
                        <img src="img/table4_img/<?=$image?>" alt="">
                    </div>
                    <?php
            }
         }
         ?>
                </div>
            </div>
            <div class="dots">
            </div>
            <div class="content_text">
                <p><?=$main_txt?></p>
            </div>
            <?php
         }
         ?>
            <div class="content_map">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d25325.27420083234!2d127.02929780000001!3d37.4923661!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2skr!4v1598506541204!5m2!1sen!2skr"
                    width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false"
                    tabindex="0"></iframe>
            </div>
        </section>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js?v=<?php echo time(); ?>"></script>
    <script src="https://cdn.jsdelivr.net/npm/lozad?v=<?php echo time(); ?>"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.lazyload/1.9.1/jquery.lazyload.min.js
    ?v=<?php echo time(); ?>"></script>
    <script src="js/custom.js?v=<?php echo time(); ?>"></script>


</body>

</html>
