<!DOCTYPE html>
<html>
<title>Records</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="../css/website.css">
<script src="../scripts/main.js"></script>


<style>
    /* Full height image header */

    body, html {
        height: 100%;
        line-height: 1.8;
    }
     body,h1,h2,h3,h4,h5,h6 {font-family: "Karma", sans-serif}
    .w3-bar-block .w3-bar-item {padding:20px}

.w3-quarter:hover{
 cursor: pointer;
}
</style>
<body>
    <!-- Navbar (sit on top) follows RWD -->
    <!--PHP inlcude for navbar-->
    <?php require("../includes/navbar.php"); ?>

     <!-- !PAGE CONTENT! -->
    <div class="w3-main w3-content w3-padding" style="max-width:1200px;margin-top:100px">
        <!-- First Photo Grid-->
        <div class="w3-row-padding w3-padding-16 w3-center" id="food" >
            <div class="w3-quarter" id="0" onclick="updateId(this.id)">
                <img src="images/Bhai_Onkar_Singh.jpg" alt="Sandwich" style="width:100%">
                <h3>Bhai Onkar Singh</h3>

            </div>
            <div class="w3-quarter" id="1" onclick="updateId(this.id)">
                <img src="images/dalbir-singh-hazoori-ragi-2_0.jpg" alt="Steak" style="width:100%">
                <h3>Bhai Dalbir Singh</h3>

            </div>
            <div class="w3-quarter" id="2" onclick="updateId(this.id)">
                <img src="images/Gurdev-Singh-Ji.jpg" alt="Cherries" style="width:100%">
                <h3>Bhai Gurdev Singh</h3>

            </div>
            <div class="w3-quarter" id="3" onclick="updateId(this.id)">
                <img src="images/Jabartor-Singh-Ji.jpg" alt="Pasta and Wine" style="width:100%">
                <h3>Bhai Jabartor Singh</h3>

            </div>
        </div>

        <!-- Second Photo Grid-->
        <div class="w3-row-padding w3-padding-16 w3-center">
            <div class="w3-quarter" id="4" onclick="updateId(this.id)">
                <img src="images/jagtarsinghr.jpeg" alt="Popsicle" style="width:100%" >
                <h3>Bhai Jagtar Singh</h3>

            </div>
            <div class="w3-quarter" id="5" onclick="updateId(this.id)">
                <img src="images/rai-singh-ji-2.jpg" alt="Salmon" style="width:100%">
                <h3>Bhai Rai Singh</h3>

            </div>
            <div class="w3-quarter" id="6" onclick="updateId(this.id)">
                <img src="images/satnam-singh.jpg" alt="Sandwich" style="width:100%">
                <h3>Bhai Satnam Singh</h3>

            </div>
            <div class="w3-quarter" id="7" onclick="updateId(this.id)">
                <img src="images/sukhjitSingh.png" alt="Croissant" style="width:100%">
                <h3>Bhai Sukhjit Singh</h3>

            </div>
        </div>

        <!-- Footer -->
        <!-- End page content -->
    </div>
    <script>
    function updateId(idFromHTML)
    {
        id=parseInt(idFromHTML);
        window.open("http://localhost/live/livekirtan.com/downloads/caleandar/calendarView.php");

        localStorage.setItem("id", id);

    }
    </script>
    <!--PHP inlcude for footer-->
    <?php
    require("../includes/footer.php");
    ?>

</body>
</html>