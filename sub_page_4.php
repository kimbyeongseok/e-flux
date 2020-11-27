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
    <link rel="stylesheet" href="css/media.css?v=<?php echo time(); ?>" />
    <title>e-flux Architecture</title>
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
                <p>architecture</p>
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
            <div class="main_logo clear">
                <a class="main_logo_content" href="index.php">e-flux</a>
                <p>architecture</p>
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
                                Architecture
                            </h2>
                        </div>
                    </div>
                    <div class="panel_scrolling_area">
                        <div class="panel_content_area">
                            <div class="panel_content">
                                <div class="panel_content_text mainDesc">
                                    <em>e-flux Architecture is a sister publishing platform of e-flux, archive, and
                                        editorial project founded in 2016. The news, events, exhibitions, programs,
                                        journals, books, and architecture projects produced and/or disseminated by
                                        e-flux Architecture describe strains of critical discourse surrounding
                                        contemporary architecture, culture, and theory internationally.
                                        <br>
                                        <br>
                                        Since its inception, e-flux Architecture has maintained a dynamic international
                                        program of projects and events in collaboration with leading institutions and
                                        practitioners. Editorial content commissioned and published by e-flux
                                        Architecture consistently showcases rigorous, critical, sincere, and engaged
                                        work being produced today in and around the fields of architecture, urbanism,
                                        and design.
                                        <br>
                                        <br>
                                        <strong>Editors</strong>
                                        <br>
                                        Nikolaus Hirsch
                                        <br>
                                        Anton Vidokle
                                        <br>
                                        <br>
                                        <strong>Deputy Editor</strong>
                                        <br>
                                        Nick Axel
                                        <br>
                                        <br>
                                        <strong>Managing Editor</strong><br>
                                        Tamar Shafrir
                                        <br>
                                        <br>
                                        <strong>Editorial Assistant</strong><br>
                                        Sara Silva
                                        <br>
                                        <br>
                                        <strong>Design</strong><br>
                                        Alan Woo
                                        <br>
                                        <br>
                                        <strong>Technical Realization</strong><br>
                                        Systemantics
                                        <br>
                                        <br>
                                        <strong>What are e-flux Architecture announcements?</strong>
                                        <br>
                                        e-flux Architecture announcements are a direct e-mailing of text and image press
                                        releases to our growing database of art, architecture, urban and design
                                        professionals.
                                        <br>
                                        <br>
                                        <strong>Who uses e-flux Architecture?</strong>
                                        <br>
                                        Leading architecture museums, offices, biennials, cultural centers, schools,
                                        publishers, and independent architectural practitioners worldwide.
                                        <br>
                                        <br>
                                        <strong>Who reads e-flux Architecture?</strong>
                                        <br>
                                        e-flux is read by 70,000+ art, architecture, critical, curatorial, design, and
                                        spatial practitioners. In addition to its own, the e-flux Architecture mailing
                                        list is comprised of those from e-flux, Art & Education, and art-agenda.
                                        <br>
                                        <br>
                                        <strong>What are e-flux Architecture's rates?</strong>
                                        <br>
                                        For current rates please contact us.</em>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="panel_container container_3">
                    <div class="panel_label">
                        <div class="panel_label_text">
                            <h2>
                                Announcements

                            </h2>
                        </div>
                    </div>
                    <div class="panel_scrolling_area">
                        <div class="panel_content_area">
                            <?php
                                    $con=mysqli_connect("localhost", "tmxlraos","","tmxlraos");
                                    $sql="select * from eflux_table_4 where category =  'Announcements' order by num desc";
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
                        </div>
                    </div>
                </div>
                <div class="panel_container container_4">
                    <div class="panel_label">
                        <div class="panel_label_text">
                            <h2>
                                Editorial
                            </h2>
                        </div>
                    </div>
                    <div class="panel_scrolling_area">
                        <div class="panel_content_area">
                            <?php
                                    $con=mysqli_connect("localhost", "tmxlraos","","tmxlraos");
                                    $sql="select * from eflux_table_4 where category =  'Editorials' order by num desc";
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
                        </div>
                    </div>
                </div>
                <div class="panel_container">
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
                                    $sql="select * from eflux_table_4 where category =  'Projects' order by num desc";
                                    $result=mysqli_query($con, $sql);
                                    while($row=mysqli_fetch_array($result)){
                                        $num=$row["num"];
                                        $num_img=$row["num_img"];
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
