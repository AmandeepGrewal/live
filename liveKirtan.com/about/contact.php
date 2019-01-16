<!DOCTYPE html>
<html>
<title>Let s talk</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="../css/website.css">
<!--Scripts-->
<!--Scripts-->
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js" ></script>
        <script type="text/javascript" src="https://cdn.firebase.com/js/client/2.2.3/firebase.js" ></script>
 
<script type="text/javascript" src="../scripts/main.js" ></script>
        

<style>
        /* Full height image header */

        body, html {
            height: 100%;
            line-height: 1.8;
        }
         body,h1,h2,h3,h4,h5,h6 {font-family: "Karma", sans-serif}
        .w3-bar-block .w3-bar-item {padding:20px}


</style>
<body>
    <!-- Navbar (sit on top) follows RWD -->
    <!--PHP inlcude for navbar-->
    <?php require("../includes/navbar.php"); ?>

    <!-- !PAGE CONTENT! -->
    <!-- The Contact Section -->
        <div class="w3-container w3-content w3-padding-64" style="max-width:800px" id="contact">
            <h3 class="w3-wide w3-center">CONTACT ME</h3>
            <p class="w3-opacity w3-center"><i>I'd love your feedback&#33;</i></p>
            <div class="w3-row w3-padding-32">
                <div class="w3-col m8 w3-large w3-margin-top">
                    <i class="fa fa-map-marker" style="width:30px"></i> <span itemprop="homeLocation">Edmonton, AB, CA</span><br>
    <i class="fa fa-phone" style="width:30px"></i> Phone&#58; <span itemprop="telephone">
        780&ndash;123&ndash;4567
    </span><br>
    <i class="fa fa-envelope" style="width:30px"> </i> Email&#58; <span itemprop="email">smile&#064;life.learn</span><br>
</div>
                <div class="w3-col m4">
                    <form method="post" name="contactForm">

                        <div class="w3-row w3-margin-bottom">
                            <input class="w3-input w3-border" type="text" placeholder="Name" id="name" required name="Name">
                        </div>
                        <div class="w3-row w3-margin-bottom">
                            <input class="w3-input w3-border" type="email" placeholder="Email" id="email" required name="Email" pattern="^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$">
                        </div>
                        <div class="w3-row ">
                            <input class="w3-input w3-border" type="text" placeholder="Message" id="msg" required name="Message">
                        </div>
                        <button class="w3-button w3-black w3-section w3-right addValue" type="submit"> <i class="fa fa-paper-plane"></i>&nbsp; SEND</button>
                    </form>

                    <div class="w3-row-padding" id="thanks" style="display:none;">
                        <div class="w3-padding w3-pale-green w3-display-container">
                            <span onclick="this.parentElement.style.display='none';" class="w3-button w3-pale-green w3-large w3-display-topright">&times;</span>
                            <h4>Thank you for getting in touch!</h4>
                            <p>I will get back to you shortly. Have a great time!</p>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <!--Ends contact-->
    
    <!--PHP inlcude for footer-->
    <?php
    require("../includes/footer.php");
    ?>

</body>
</html>