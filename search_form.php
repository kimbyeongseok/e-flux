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
    <link rel="stylesheet" href="css/search_form.css?v=<?php echo time(); ?>" />
    <link rel="stylesheet" href="css/media.css?v=<?php echo time(); ?>" />
    <link rel="stylesheet" href="css/media_detail_page.css?v=<?php echo time(); ?>" />
    <title>e-flux Search</title>
</head>

<body id="body">
    <div class="bg_animation"></div>
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
                <p>search</p>
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
                        Search<b></b>
                    </div>
                    <div class="subHeader_title">
                        e-flux <b></b>
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
            <div class="result_container clear">
                <?php
                            $search_bar_select = $_REQUEST['search_bar_select'];
                            $search_bar_input = $_REQUEST['search_bar_input'];


                            $con=mysqli_connect("localhost", "tmxlraos","","tmxlraos");
                            
                            if($search_bar_select == '*'){
                                $sql="select * from eflux_table_1 where title LIKE '%$search_bar_input%' union select * from eflux_table_2 where title LIKE '%$search_bar_input%' union select * from eflux_table_3 where title LIKE '%$search_bar_input%' union select * from eflux_table_4 where title LIKE '%$search_bar_input%' union select * from eflux_table_5 where title LIKE '%$search_bar_input%' order by tag asc";
                                } else if($search_bar_select == 'Announcements'){
                                    $sql="select * from eflux_table_1 where title LIKE '%$search_bar_input%' order by num desc";
                                }else if($search_bar_select == 'Journal'){
                                    $sql="select * from eflux_table_2 where title LIKE '%$search_bar_input%' order by num desc";
                                }else if($search_bar_select == 'Reviews'){
                                    $sql="select * from eflux_table_3 where title LIKE '%$search_bar_input%' order by num desc";
                                }else if($search_bar_select == 'Architecture'){
                                    $sql="select * from eflux_table_4 where title LIKE '%$search_bar_input%' order by num desc";
                                }else if($search_bar_select == 'Projects'){
                                    $sql="select * from eflux_table_5 where title LIKE '%$search_bar_input%' order by num desc";
                                }
                            $result=mysqli_query($con, $sql);
                            $num_row=mysqli_num_rows($result);
                            if(!$num_row){
                                echo "<div class='search_fail'>No matches found.
                                Try another search term.</div>";
                               
                            }else{
                                while($row=mysqli_fetch_array($result)){
                                        $num=$row["num"];
                                        $tag=$row["tag"];
                                        $image=$row["image"];
                                        $image_1=$row["image_1"];
                                        $sub_txt=$row["sub_txt"];
                                        $title=$row["title"];
                                        $main_txt=$row["main_txt"];
                                        $regist_day=$row["regist_day"];  
                                if($tag == "Announcements"){
                                    $location = 1;
                                    
                                }else if($tag == "Journal"){
                                    $location = 2;
                                    
                                }
                                else if($tag == "Reviews"){
                                    $location = 3;
                                    
                                }
                                else if($tag == "Architecture"){
                                    $location = 4;
                                   
                                }
                                else if($tag == "Projects"){
                                    $location = 5;
                                    
                                }
                        ?>
                <a href="page_<?=$location?>_detail_page.php?num=<?=$num?>">
                    <div class="result_content">
                        <img class="lozad" data-src="img/table<?=$location?>_img/<?=$image?>" alt="" />
                        <img class="lozad" data-src="img/table<?=$location?>_img/<?=$image_1?>" alt="" />
                        <div class="content_title">
                            <h4><?=$tag?></h4>
                            <p><?=$title?></p>
                        </div>
                    </div>
                </a>
                <?php
                            }
                        }
                        ?>
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
