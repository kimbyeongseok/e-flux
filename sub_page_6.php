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
    <link rel="stylesheet" href="css/sub_page_6.css?v=<?php echo time(); ?>" />
    <link rel="stylesheet" href="css/media.css?v=<?php echo time(); ?>" />
    <title>e-flux About</title>
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
                        <a href="sub_page_8.php" class="side_nav_footer_left_bottom" href="">Privacy Policy</a>
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
                                About e-flux
                            </h2>
                        </div>
                    </div>
                    <div class="panel_scrolling_area">
                        <div class="panel_content_area">
                            <div class="panel_content">
                                <div class="panel_content_img">

                                </div>
                                <div class="panel_content_text">
                                    <em>e-flux is a publishing platform and archive, artist project, curatorial
                                        platform, and enterprise which was founded in 1998. Its news digest, events,
                                        exhibitions, schools, journal, books, and the art projects produced and/or
                                        disseminated by e-flux describe strains of critical discourse surrounding
                                        contemporary art, culture, and theory internationally. Its monthly publication
                                        e-flux journal has produced essays commissioned since 2008 about cultural,
                                        political, and structural paradigms that inform contemporary artistic
                                        production.
                                        <br><br>
                                        In November 1998, the exhibition The Best Surprise is No Surprise at the Holiday
                                        Inn in Chinatown used a new communication technology—e-mail— to disseminate the
                                        press release. One month later, Vidokle started e-flux whose mailing list is
                                        made free for it’s 90,000+ readers by a set fee paid by museums and other
                                        institutions of art to publish their press releases and other communiqués via
                                        e-flux. All information disseminated is permanently archived for reference and
                                        research. While its network is limited to public art centers and museums, e-flux
                                        offers similar platforms to commercial galleries through its art-agenda
                                        subsidiary, and to art schools and art academies through art&education, which
                                        e-flux jointly administers together with Artforum International.
                                        <br><br>
                                        Since its inception e-flux has maintained a dynamic international program of
                                        exhibitions and events including: unitednationsplaza, Utopia Station, Martha
                                        Rosler Library and AUP. In 2003, the artist Julieta Aranda began collaborating
                                        with Vidokle on e-flux and in 2004, Aranda and Vidokle opened e-flux’s first
                                        public space, a tiny storefront on Ludlow Street for experimental and ephemeral
                                        programs in New York City’s Lower East Side.
                                        <br><br>
                                        e-flux Wikipedia
                                        <br><br>
                                        Hans Ulrich Obrist interviews Anton Vidokle and Julieta Aranda about the history
                                        of e-flux
                                        <br><br>
                                        Daniel Birnbaum's essay "Temporal Spasms"
                                        Design: Alan Woo
                                        <br><br>
                                        Technical realization: Systemantics

                                    </em>
                                </div>
                            </div>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="panel_container container_2">
                    <div class="panel_background"></div>
                    <div class="panel_label">
                        <div class="panel_label_text">
                            <h2>
                                FAQ
                            </h2>
                        </div>
                    </div>
                    <div class="panel_scrolling_area">
                        <div class="panel_content_area">
                            <div class="panel_content">
                                <div class="panel_content_img">

                                </div>
                                <div class="panel_content_text">
                                    <h3>What are e-flux's announcements?</h3>
                                    <em>e-flux announcements are a direct e-mailing of text and image press releases to
                                        our growing database of art professionals in North America and Europe (see
                                        demographics below). The e-mail announcement includes an active URL which links
                                        directly to each client's site.</em>
                                    <h3>Who uses e-flux?</h3>
                                    <em>Nearly all the leading art museums, biennials, cultural centers, magazines,
                                        publishers, art fairs, and independent curators worldwide, including:

                                        Museums such as:

                                        The Museum of Modern Art, New York; The Guggenheim, New York; Whitney Museum,
                                        New York; Museum Ludwig, Cologne; Tate Modern, Great Britain; Moderna Museet,
                                        Sweden; Castello di Rivoli Museo d'Arte Contemporanea, Italy; Generali
                                        Foundation, Austria; and others.

                                        Biennials such as:

                                        Sao Paulo Biennial; Istanbul Biennial; Whitney Biennial; Venice Biennial; Berlin
                                        Biennial; Athens Biennial; Lyon Biennial; Dakar Biennial; Valencia Biennial;
                                        Manifesta; Moscow Biennial; and others.

                                        Art fairs such as:

                                        Art Basel, Frieze Art Fair, Art Hong Kong, Artissima and others.

                                        Magazines, including:

                                        Artforum, Parkett, Frieze, Flash Art, Bookforum, Cabinet, Afterall, Aprior, Text
                                        zur Kunst and others.

                                        Art book publishers and distributors such as:

                                        Phaidon, Great Britain; D.A.P., USA; JRP|Ringier, Zurich; Revolver, Frankfurt;
                                        and others.</em>
                                    <h3>Who reads e-flux?</h3>
                                    <em>e-flux is read by 90,000+ visual arts professionals: 47% in Europe, 42% in North
                                        America, and 11% Other (South America, Australia, Japan, etc.) 18%
                                        writers/critics, 16% galleries, 16% curators, 15% museum affiliated, 12%
                                        artists, 10% consultants, 8% collectors, 5% general.</em>
                                    <h3>What are e-flux's rates?</h3>
                                    <em>For current rates please contact us.</em>
                                </div>
                            </div>
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