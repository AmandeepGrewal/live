<!-- Navbar-->
    <div class="w3-top">
        <div class="w3-bar w3-white w3-card" id="myNavbar">
            <a href="http://localhost/live/livekirtan.com/index.php" class="w3-bar-item w3-button w3-wide"><img src="http://localhost/live/livekirtan.com/logo.png"/></a>
            <!-- Right-sided navbar links -->
            <div class="w3-right w3-hide-small">
                <a href="http://localhost/live/livekirtan.com/index.php#about" class="w3-bar-item w3-button"> ABOUT</a>
                <a href="http://localhost/live/livekirtan.com/downloads/downloads.php" class="w3-bar-item w3-button"><i class="fa fa-play"></i> RECORDS</a>
                <a href="http://localhost/live/livekirtan.com/tour/tour.php" class="w3-bar-item w3-button"><i class="fa fa-cogs"></i> TOUR</a>
                <a href="http://localhost/live/livekirtan.com/about/contact.php" class="w3-bar-item w3-button"><i class="fa fa-envelope"></i> CONTACT</a>
            </div>
            <!-- Hide right-floated links on small screens and replace them with a menu icon -->
            <a href="javascript:void(0)" class="w3-bar-item w3-button w3-right w3-hide-large w3-hide-medium" onclick="w3_open()">
                <i class="fa fa-bars"></i>
            </a>
        </div>
    </div>
    <!-- Sidebar on small screens when clicking the menu icon -->
    <nav class="w3-sidebar w3-bar-block w3-black w3-card w3-animate-left w3-hide-medium w3-hide-large" style="display:none" id="mySidebar">
        <a href="javascript:void(0)" onclick="w3_close()" class="w3-bar-item w3-button w3-large w3-padding-16">Close &times;</a>
        <a href="http://localhost/live/livekirtan.com/index.php#about" onclick="w3_close()" class="w3-bar-item w3-button">ABOUT</a>
        <a href="http://localhost/live/livekirtan.com/downloads/downloads.php" onclick="w3_close()" class="w3-bar-item w3-button">DOWNLOADS</a>
        <a href="http://localhost/live/livekirtan.com/tour/tour.php" onclick="w3_close()" class="w3-bar-item w3-button">TOUR</a>
        <a href="http://localhost/live/livekirtan.com/about/contact.php" onclick="w3_close()" class="w3-bar-item w3-button">CONTACT</a>
    </nav>