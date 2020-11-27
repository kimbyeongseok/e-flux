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
    <div class="main_logo clear">
        <a class="main_logo_content" href="index.php">e-flux</a>
        <p>architecture</p>
    </div>
</section>