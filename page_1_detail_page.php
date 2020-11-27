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
    <link rel="stylesheet" href="css/sub_page_1.css?v=<?php echo time(); ?>" />
    <link rel="stylesheet" href="css/detail_page.css?v=<?php echo time(); ?>" />
    <link rel="stylesheet" href="css/media.css?v=<?php echo time(); ?>" />
    <link rel="stylesheet" href="css/media_detail_page.css?v=<?php echo time(); ?>" />
    <title>e-flux Announcements</title>
</head>

<body id="body">
    <div class="main_wrapper">
        <?php
        $num=$_GET["num"];
        $con=mysqli_connect("localhost", "tmxlraos","","tmxlraos");
        $sql="select * from eflux_table_1 where num = $num  order by num desc";
        $result=mysqli_query($con, $sql);
         while($row=mysqli_fetch_array($result)){
            $tag=$row["tag"];
            $image=$row["image"];
            $sub_txt=$row["sub_txt"];
            $title=$row["title"];
            $main_txt=$row["main_txt"];
            $main_desc=$row["main_desc"];
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
                    <p></p>
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
                    <form action="search_form.php" name="search_contents" method="post">
                        <div class="search_bar_content">
                            <select name="search_bar_select" id="">
                                <option value="*">Show all</option>
                                <option value="Announcements">Announcements</option>
                                <option value="Journal">Journal</option>
                                <option value="Reviews">Reviews</option>
                                <option value="Architecture">Architecture</option>
                                <option value="Projects">Projects</option>
                            </select>
                            <input type="text" name="search_bar_input" placeholder="search for ..." />
                            <div class="search_bar_close" onclick="closeNav()">
                                <span></span>
                                <span></span>
                            </div>
                            <button type="button" onclick="check_input()">Search</button>
                            <script>
                            function check_input() {
                                if (!document.search_contents.search_bar_input.value) {
                                    alert("Sorry, U need to write something!!");
                                    return;
                                }
                                document.search_contents.submit();
                            }
                            </script>
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

                <div class="image_box_oneImg">
                    <img src="img/table1_img/<?=$image?>" alt="">
                </div>
                <div class="content_image clear">
                    <div class="image_boxs clear">
                    </div>
                </div>
                <div class="content_text">
                    <p><?=nl2br($main_txt);?><br><br><br></p>
                    <p><?=nl2br($main_desc);?></p>
                </div>
                <?php
         }
         ?>
            </section>
        </div>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js?v=<?php echo time(); ?>"></script>
        <script src="https://cdn.jsdelivr.net/npm/lozad?v=<?php echo time(); ?>"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.lazyload/1.9.1/jquery.lazyload.min.js
    ?v=<?php echo time(); ?>"></script>
        <script src="js/custom.js?v=<?php echo time(); ?>"></script>


    </div>
</body>

</html>
