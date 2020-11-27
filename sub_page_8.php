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
    <title>e-flux Privacy Policy</title>
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
                                Privacy Policy
                            </h2>
                        </div>
                    </div>
                    <div class="panel_scrolling_area">
                        <div class="panel_content_area">
                            <div class="panel_content">
                                <div class="panel_content_img">

                                </div>
                                <div class="panel_content_text">
                                    <em>e-flux takes the protection of your personal data very seriously and
                                        strictly<br>
                                        adheres to the applicable data protection laws, in particular to the provisions
                                        of Regulation (EU) 2016/679 (General Data Protection Regulation) (hereinafter
                                        referred to as “GDPR”).
                                        <br><br>
                                        Our digital services may contain links to other websites of third party service
                                        providers to which this data protection declaration does not apply.
                                        <br><br>
                                        1. Responsible authority
                                        Responsible for the processing of your personal data is
                                        <br><br>
                                        e-flux
                                        311 East Broadway
                                        New York, NY 10002, USA
                                        <br><br>
                                        If you have any questions regarding data protection, please contact us at the
                                        above-mentioned postal address, with the addition “data protection” or at the
                                        e-mail address dataprivacy [​at​] e-flux.com.
                                        <br><br>
                                        2. Purposes of the processing of personal data
                                        The use of our website is usually possible without providing personal data.
                                        Personal data, such as names, addresses or e-mail addresses are always provided
                                        on a voluntary basis if possible. These data will not be passed on to third
                                        parties without your express consent, with the exception of the service
                                        providers named below, who support us in providing our services.
                                        <br><br>
                                        2.1. Communication data
                                        <br><br>
                                        We process your communication data (name, e-mail address) in order to be able to
                                        contact you. Personal data that you provide to us by e-mail and/or via the
                                        contact form on this website will only be processed for correspondence with you
                                        or only for the purpose for which you have made the data available to us.
                                        <br><br>
                                        The basis for this data processing is Art. 6 para. 1 lit. b GDPR, which permits
                                        the processing of data for the fulfilment of a contract or pre-contractual
                                        measures.
                                        <br><br>
                                        2.2. Newsletter/ e-flux announcements
                                        <br><br>
                                        e-flux operates newsletters on arts and architecture (hereinafter referred to as
                                        “e-flux announcements”), which are direct e-mailings of text and image press
                                        releases, sent several times a day. With your consent you can subscribe to
                                        e-flux announcements. The main topics of the respective e-flux announcement are
                                        specified in the declaration of consent. If you would like to subscribe to
                                        e-flux announcements, we require an e-mail address from you as well as
                                        information that allows us to verify that you are the owner of the e-mail
                                        address provided and that you agree to receive the respective e-flux
                                        announcement. For this purpose, we will send you an e-mail to the specified
                                        e-mail address with a confirmation link (double-opt-in). If you do not confirm
                                        your registration within [72 hours], your information will be automatically
                                        deleted after one month.
                                        <br><br>
                                        The only mandatory information for subscribing to e-flux announcements is your
                                        e-mail address. The indication of further, separately marked data is voluntary
                                        and is used to be able to address you personally. In addition, we store your IP
                                        addresses and the time of registration and confirmation. The purpose of this
                                        procedure is to be able to prove your registration and, if necessary, to clarify
                                        a possible misuse of your personal data. We do not collect any further data in
                                        this context. We use this data exclusively for sending the requested e-flux
                                        announcement. If we use a processor to send the e-flux announcements, we will of
                                        course comply with the applicable data protection laws.
                                        <br><br>
                                        You can revoke your consent to receive e-flux announcements and unsubscribe at
                                        any time. You can cancel the subscription by clicking on the link provided in
                                        every e-flux announcement, by e-mail to[Newsletter@e-flux.com] or by sending a
                                        message to the contact data specified under section 1 (e.g. e-mail, fax,
                                        letter).
                                        <br><br>
                                        The data will be processed on the basis of your consent pursuant to Art. 6 para.
                                        1 lit. a GDPR. You can revoke your consent at any time. The lawfulness of the
                                        data processing processes already carried out remains unaffected by the
                                        revocation.
                                        <br><br>
                                        2.3. Google Analytics
                                        <br><br>
                                        Our website uses Google Analytics, a website analysis service by Google Inc.,
                                        1600 Amphitheatre Parkway Mountain View, CA 94043, USA. Google Analytics uses
                                        so-called "cookies", text files that are stored on your computer to analyse your
                                        use of the website. The information generated by the cookie about your use of
                                        this website is usually sent to and stored at a Google server in the U.S.A.
                                        <br><br>
                                        You find more information concerning the treatment of user data by Google
                                        Analytics in Google's Privacy Policy.
                                        <br><br>
                                        You may prevent the installation of cookies by adjusting the settings of your
                                        browser; however, if you do so, you may be unable to use all features of this
                                        website. Further, you may prevent the collection of data generated by cookies
                                        (including your IP address) and related to the use of this websites as well as
                                        the processing of such data by Google by downloading and installing the plug-in
                                        under the following link: http://tools.google.com/dlpage/gaoptout.
                                        <br><br>
                                        You can also prevent collection by Google Analytics by clicking this link. An
                                        opt-out cookie is set to prevent future collection of your data when you click
                                        the link.
                                        <br><br>
                                        For more information on terms of use and data protection, please visit
                                        http://www.google.com/analytics/terms/ or https://policies.google.com/. Please
                                        note that the code "anonymizeIp" has been added to Google Analytics on this
                                        website to ensure anonymous collection of IP addresses (so-called IP masking).
                                        <br><br>
                                        Google Analytics is used and Google cookies are stored and evaluated for
                                        statistical purposes on the basis of Art. 6 para. 1 lit. f GDPR. We have a
                                        legitimate interest in analyzing user behavior in order to optimize our
                                        services.
                                        <br><br>
                                        2.4. Pingdom
                                        <br><br>
                                        Our website uses Pingdom, a service of Pingdom AB, Kopparbergsvägen 8, 72213
                                        Västeras, Sweden. Pingdom uses, among other things, cookies which are stored on
                                        your computer and which enable an analysis of the use of the website. During
                                        use, data, in particular the shortened IP address and activities of users, may
                                        be transmitted to a server of Pingdom AB and stored there.
                                        <br><br>
                                        You may prevent the installation of cookies by adjusting the settings of your
                                        browser; however, if you do so, you may be unable to use all features of this
                                        website.
                                        <br><br>
                                        You can prevent the collection and forwarding of personal data (in particular
                                        your shortened IP address) and the processing of this data by deactivating the
                                        execution of Java-Script in your browser or by installing a tool such as
                                        "NoScript".
                                        <br><br>
                                        Further information on data protection when using Pingdom can be found under the
                                        following link: https://www.pingdom.com/legal/privacy-policy.
                                        <br><br>
                                        We use Pingdom for statistical purposes on the basis of Art. 6 para. 1 lit. f
                                        GDPR. We have a legitimate interest in analyzing user behavior in order to
                                        optimize our services.
                                        <br><br>
                                        2.5. Data processing for the fulfilment of legal obligations
                                        <br><br>
                                        In addition, we may process your data to fulfil legal obligations (e.g.
                                        regulatory requirements, commercial and tax storage and proof obligations).
                                        <br><br>
                                        The basis for data processing is Art. 6 para. 1 lit. c GDPR, which permits
                                        processing for the fulfilment of a legal obligation.
                                        <br><br>
                                        2.6. Log files
                                        <br><br>
                                        Whenever our websites are accessed, usage data is transmitted through the
                                        respective Internet browser and stored in log files, the so-called server log
                                        files. The data records stored in this way contain the following data: Date and
                                        time of access, name of the page accessed, shortened IP address, referrer URL
                                        (originating URL from which you accessed the website), the amount of data
                                        transferred, as well as product and version information of the browser used. The
                                        shortened IP addresses of the visitors are deleted or made anonymous after the
                                        end of use.
                                        <br><br>
                                        The basis for data processing is Art. 6 para. 1 lit. f GDPR, which permits the
                                        processing of data to protect the legitimate interests of the data controller,
                                        provided that the interests or fundamental rights and freedoms of the data
                                        subject do not prevail.
                                        <br><br>
                                        3. Data security
                                        Your personal data is transmitted encrypted. This applies to your communication
                                        data if you use our contact form and when registering for e-flux announcements.
                                        We use the SSL (Secure Socket Layer) coding system. Furthermore, we protect our
                                        websites and other systems through technical and organizational measures against
                                        loss, destruction, access, modification or distribution of your data by
                                        unauthorized persons.
                                        <br><br>
                                        4. Categories of receipt of personal data
                                        Insofar as we make use of the services of third parties to carry out our
                                        services, we process personal data according to the provisions of the GDPR.
                                        Service providers who support us in providing our services to you are the
                                        it-service providers, hosting providers and e-mail service providers.
                                        <br><br>
                                        5. Duration of data storage
                                        In principle, we delete your data as soon as it is no longer required for the
                                        above-mentioned purposes, unless temporary storage is still necessary. Thus we
                                        store your data on the basis of legal proof and storage obligations. In
                                        addition, we keep your data for the period during which claims can be asserted
                                        against our company (statutory limitation period of three or up to thirty
                                        years).
                                        <br><br>
                                        6. Rights of the persons concerned
                                        You can request information about your personal data stored by us and under
                                        certain conditions request the correction or deletion of your data by contacting
                                        us via our contact data given under section 1. You may also have the right to
                                        restrict the processing of your data and to have the data you provide disclosed
                                        in a structured, common and machine-readable format. If you have given us your
                                        consent to process personal data for specific purposes, you can revoke your
                                        consent at any time with effect for the future. You may object to the processing
                                        of your data for direct marketing purposes. If we process your data to protect
                                        legitimate interests, you may object to such processing for reasons arising from
                                        your particular situation. You can also contact a data protection supervisory
                                        authority. If you have any questions regarding data protection, please contact
                                        us at dataprivacy [​at​] e-flux.com.

                                    </em>
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