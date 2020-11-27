<div class="subscribe_close_back"></div>
<div class="subscribe_close"></div>
<div class="subscribe_box">
    <div class="subscribe_content">
        <div class="subscribe_content_box clear">
            <form action="" name="con">
                <li>
                    <input type="text" name="name" placeholder="Name">
                </li>
                <li>
                    <input type="text" name="email" placeholder="Email Address">
                </li>
                <li>
                    <textarea type="text" name="message" placeholder="Message"></textarea>
                </li>

                <li>
                    <input onclick="con_input()" type="submit" value="Send"></input>
                </li>
            </form>
            <script>
            function con_input() {
                document.con.submit();
                alert("Thank you for your message. We will be in touch with you shortly.");
            }
            </script>
        </div>
    </div>
</div>