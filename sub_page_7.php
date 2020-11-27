<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" />
    <link rel="shortcut icon" href="img/Asset.ico" />
    <link rel="icon" href="img/Asset.ico" />
    <link rel="apple-touch-icon" sizes="16x16" href="img/Asset.ico" />
    <link rel="stylesheet" href="css/style.css?v=<?php echo time(); ?>" />
    <link rel="stylesheet" href="css/sub_page_4.css?v=<?php echo time(); ?>" />
    <link rel="stylesheet" href="css/sub_page_7.css?v=<?php echo time(); ?>" />
    <link rel="stylesheet" href="css/detail_page.css?v=<?php echo time(); ?>" />
    <link rel="stylesheet" href="css/media.css?v=<?php echo time(); ?>" />
    <link rel="stylesheet" href="css/media_detail_page.css?v=<?php echo time(); ?>" />
    <title>e-flux Get the e-flux app</title>
</head>

<body id="body">
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
                <em>Get the e-flux app</em>

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
                        Download Now!<b></b>
                    </div>
                    <div class="subHeader_title">
                        e-flux app<b></b>
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
                <h4>April 10, 2020</h4>
                <h3>e-flux</h3>
            </div>
            <div class="image_box_oneImg">
                <img src="img/e_flux_android_v1.gif" alt="">
            </div>
            <div class="content_image clear">
                <div class="image_boxs clear">

                    <div class="image_box">
                        <img src="" alt="">
                    </div>

                </div>
            </div>
            <div class="dots">
            </div>
            <div class="content_text">
                <p>
                    <strong> e-flux app now available for Android and iOS</strong>
                    <br><br>
                    www.e-flux.com/app
                    <br><br>
                    Dear readers,
                    <br><br>
                    In response to numerous requests, we are happy to report that the e-flux app is now available for
                    both Android and iOS phones. The app enables your phone to access the entirety of the content of
                    e-flux journal’s current and back issues, essays on architecture, reviews of exhibitions, our
                    podcasts, and more. The mapping tool of the app makes it easy to navigate to exhibition locations
                    featured in e-flux announcements, and the favorites tool enables you to make your personal
                    collections of content for offline reading. The e-flux app is free and is available to download now.
                    <br><br>

                    Stay connected to the e-flux publishing network with features that include:<br>
                    – Up-to-date, carefully-selected international announcements for events at museums, biennials,
                    galleries, and art schools<br>
                    – Complete access to issues of e-flux journal, e-flux Architecture Editorials, art-agenda reviews,
                    and podcasts<br>
                    – Save announcements, reviews, essays, and articles, so you can easily return to your
                    personalized<br>
                    list for offline reading<br>
                    – Search, navigate, and save current and upcoming events by location, both nearby and worldwide
                    <br><br>

                    Download the app for <a href="https://apps.apple.com/us/app/e-flux/id528983893" class="app"
                        target="_blank">iOS</a>
                    or <a href="https://play.google.com/store/apps/details?id=com.eflux&hl=en_US" class="app"
                        target="_blank">Android</a>.
                    <br><br>
                    For questions, comments, and feedback, please contact <a
                        href="https://mail.google.com/mail/u/0/?view=cm&fs=1&tf=1&source=mailto&to=app@e-flux.com"
                        target="_blank">app
                        [​at​] e-flux.com.</a>
                </p>
            </div>
            <div class="download_btn">
                <a href="https://apps.apple.com/us/app/e-flux/id528983893" target="_blank">Download for iOS</a>
                <a href="https://play.google.com/store/apps/details?id=com.eflux&hl=en_US" target="_blank">Download for
                    Android</a>
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