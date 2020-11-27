<div class="subscribe_close_back"></div>
<div class="subscribe_close"></div>
<div class="subscribe_box">
    <div class="subscribe_txt">
        <h1>Subscribe to e-flux</h1>
        <p>Be the first to receive the latest news on international exhibitions and all e-flux related
            announcements.</p>
    </div>
    <div class="subscribe_content">
        <div class="subscribe_content_box clear">
            <form action="" name="sub">
                <li>
                    <input type="text" name="email" placeholder="Email Address">
                </li>
                <li>
                    <input type="text" name="first_name" placeholder="First Name">
                </li>
                <li>
                    <input type="text" name="last_name" placeholder="Last Name">
                </li>
                <li>
                    <input type="text" name="city_country" placeholder="City, Country">
                </li>
                <li>
                    <input type="checkbox" name="agree">
                    <label for="">
                        <span class="appear"></span>
                    </label>
                    <p> have read e-flux’s privacy policy and agree that e-flux may send me announcements to the
                        email address entered above and that my data will be processed for this purpose in
                        accordance with e-flux’s privacy policy*</p>
                </li>
                <li>
                    <input onclick="sub_input()" type="submit" value="Subscribe"></input>
                </li>
            </form>
            <script>
            function sub_input() {
                document.sub.submit();
                alert("Thank you for subscribing to e-flux");
            }
            </script>
        </div>
    </div>
</div>