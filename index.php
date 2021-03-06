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
    <link rel="stylesheet" href="css/media.css?v=<?php echo time(); ?>" />
    <title>e-flux</title>
</head>

<body id="body">
    <div class="loader-wrapper">
        <div class="loader"></div>
    </div>
    <div class="main_nav_background"></div>
    <div class="subscribe">
        <?php include "include/subscribe.php" ?>
    </div>
    <div class="contact">
        <?php include "include/contact.php" ?>
    </div>
    <div class="wrap">
        <!-- header & navigation section -->
        <section class="main_nav">
            <div class="main_nav_list clear">
                <a class="main_logo_content" href="index.php">e-flux</a>
                <div class="main_nav_list_content">
                    <a href="sub_page_1.php">Announcements</a>
                    <a href="sub_page_2.php">Journal</a>
                    <a href="sub_page_3.php">Reviews</a>
                    <a href="sub_page_4.php">Architecture</a>
                    <a href="sub_page_5.php">Projects</a>
                </div>
                <div class="side_nav_bars">
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
                <div class="search_icon" id="search_icon" onclick="openNav()">
                    <img id="search_icon_img" class="bottom_img" src="img/search_white.svg" alt="search_icon" />
                    <img id="search_icon_img" class="top_img" src="img/search.svg" alt="search_icon" />
                </div>
                <div id="pointer"></div>
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
                    <a class="main_logo_content" href="index.html">e-flux</a>
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
                        <!-- <?php include "include/subscribe.php" ?> -->
                        <a class="contact_pop">Contact</a>
                        <!-- <?php include "include/contact.php" ?> -->
                        <a class="side_nav_footer_right_bottom">311 East Broadway Seoul,<br />
                            NY 10002, Korea</a>
                    </div>
                </div>
            </div>
            <div class="main_logo">
                <a class="main_logo_content" href="index.php">e-flux</a>
                <!-- <img src="img/logo_animation.gif" alt=""> -->

            </div>
        </section>


        <!-- main content & container section -->
        <section class="container">
            <div class="panels clear">
                <div class="panel_container container_1">
                    <div class="panel_background"></div>
                    <div class="panel_label">
                        <div class="panel_label_text">
                            <h2>
                                Announcement
                            </h2>
                        </div>
                    </div>
                    <div class="panel_scrolling_area">
                        <div class="panel_content_area">
                            <?php
                                    $con=mysqli_connect("localhost", "tmxlraos","","tmxlraos");
                                    $sql="select * from eflux_table_1 order by num desc limit 3";
                                    $result=mysqli_query($con, $sql);
                                    while($row=mysqli_fetch_array($result)){
                                        $num=$row["num"];
                                        $image=$row["image"];
                                        $sub_txt=$row["sub_txt"];
                                        $title=$row["title"];
                                        $main_txt=$row["main_txt"];
                                        $regist_day=$row["regist_day"]
                                
                                ?>
                            <a href="page_1_detail_page.php?num=<?=$num?>">
                                <div class="panel_content">
                                    <div class="panel_content_img">
                                        <img class="lozad" data-src="img/table1_img/<?=$image?>" alt="" />
                                    </div>
                                    <div class="panel_content_text">
                                        <h4><?=$sub_txt?></h4>
                                        <h3><?=$title?></h3>
                                        <p><?=$main_txt?></p>
                                    </div>
                                </div>
                            </a>
                            <?php
                                }
                                ?>

                            <a href="sub_page_1.php">
                                <p>show more</p>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="panel_container container_2">
                    <div class="panel_label">
                        <div class="panel_label_text">
                            <h2>
                                Journal
                            </h2>
                        </div>
                    </div>
                    <div class="panel_scrolling_area table_2">
                        <div class="panel_content_area">
                            <?php
                                    $con=mysqli_connect("localhost", "tmxlraos","","tmxlraos");
                                    $sql="select * from eflux_table_2 order by num desc limit 3";
                                    $result=mysqli_query($con, $sql);
                                    while($row=mysqli_fetch_array($result)){
                                        $num=$row["num"];
                                        $image=$row["image"];
                                        $sub_txt=$row["sub_txt"];
                                        $title=$row["title"];
                                        $main_txt=$row["main_txt"];
                                        $regist_day=$row["regist_day"]
                                
                                ?>
                            <a href="page_2_detail_page.php?num=<?=$num?>">
                                <div class="panel_content">
                                    <div class="panel_content_img smallSize">
                                        <img class="lozad" data-src="img/table2_img/<?=$image?>" alt="" />
                                    </div>
                                    <div class="panel_content_text smallSize">
                                        <h4><?=$sub_txt?></h4>
                                        <h3><?=$title?></h3>
                                        <p><?=$main_txt?></p>
                                    </div>
                                </div>
                            </a>
                            <?php
                                }
                                ?>

                            <a href="sub_page_2.php">
                                <p>show more</p>
                            </a>

                        </div>
                    </div>
                </div>
                <div class="panel_container container_3">
                    <div class="panel_label">
                        <div class="panel_label_text">
                            <h2>
                                Reviews
                            </h2>
                        </div>
                    </div>
                    <div class="panel_scrolling_area">
                        <div class="panel_content_area">
                            <?php
                                    $con=mysqli_connect("localhost", "tmxlraos","","tmxlraos");
                                    $sql="select * from eflux_table_3 order by num desc limit 3";
                                    $result=mysqli_query($con, $sql);
                                    while($row=mysqli_fetch_array($result)){
                                        $num=$row["num"];
                                        $image=$row["image"];
                                        $sub_txt=$row["sub_txt"];
                                        $title=$row["title"];
                                        $main_txt=$row["main_txt"];
                                        $regist_day=$row["regist_day"]
                                
                                ?>
                            <a href="page_3_detail_page.php?num=<?=$num?>">
                                <div class="panel_content">
                                    <div class="panel_content_img">
                                        <img class="lozad" data-src="img/table3_img/<?=$image?>" alt="" />
                                    </div>
                                    <div class="panel_content_text">
                                        <h4><?=$sub_txt?></h4>
                                        <h3><?=$title?></h3>
                                        <p><?=$main_txt?></p>
                                    </div>
                                </div>
                            </a>
                            <?php
                                }
                                ?>

                            <a href="sub_page_3.php">
                                <p>show more</p>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="panel_container container_4">
                    <div class="panel_label">
                        <div class="panel_label_text">
                            <h2>
                                Architecture
                            </h2>
                        </div>
                    </div>
                    <div class="panel_scrolling_area">
                        <div class="panel_content_area">
                            <?php
                                    $con=mysqli_connect("localhost", "tmxlraos","","tmxlraos");
                                    $sql="select * from eflux_table_4 order by num desc limit 3";
                                    $result=mysqli_query($con, $sql);
                                    while($row=mysqli_fetch_array($result)){
                                        $num=$row["num"];
                                        $image=$row["image_1"];
                                        $sub_txt=$row["sub_txt"];
                                        $title=$row["title"];
                                        $main_txt=$row["main_txt"];
                                        $regist_day=$row["regist_day"]
                                
                                ?>
                            <a href="page_4_detail_page.php?num=<?=$num?>">
                                <div class="panel_content">
                                    <div class="panel_content_img">
                                        <img class="lozad" data-src="img/table4_img/<?=$image?>" alt="" />
                                    </div>
                                    <div class="panel_content_text">
                                        <h4><?=$sub_txt?></h4>
                                        <h3><?=$title?></h3>
                                        <p><?=$main_txt?></p>
                                    </div>
                                </div>
                            </a>
                            <?php
                                }
                                ?>

                            <a href="sub_page_4.php">
                                <p>show more</p>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="panel_container container_5">
                    <div class="panel_label">
                        <div class="panel_label_text">
                            <h2>
                                Projects
                            </h2>
                        </div>
                    </div>
                    <div class="panel_scrolling_area">
                        <div class="panel_content_area">
                            <?php
                                    $con=mysqli_connect("localhost", "tmxlraos","","tmxlraos");
                                    $sql="select * from eflux_table_5 order by num desc limit 3";
                                    $result=mysqli_query($con, $sql);
                                    while($row=mysqli_fetch_array($result)){
                                        $num=$row["num"];
                                        $image=$row["image"];
                                        $sub_txt=$row["sub_txt"];
                                        $title=$row["title"];
                                        $main_txt=$row["main_txt"];
                                        $regist_day=$row["regist_day"]
                                
                                ?>
                            <a href="page_5_detail_page.php?num=<?=$num?>">
                                <div class="panel_content">
                                    <div class="panel_content_img">
                                        <img class="lozad" data-src="img/table5_img/<?=$image?>" alt="" />
                                    </div>
                                    <div class="panel_content_text">
                                        <h4><?=$sub_txt?></h4>
                                        <h3><?=$title?></h3>
                                        <p><?=$main_txt?></p>
                                    </div>
                                </div>
                            </a>
                            <?php
                                }
                                ?>

                            <a href="sub_page_5.php">
                                <p>show more</p>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="scrollBar"></div>

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
