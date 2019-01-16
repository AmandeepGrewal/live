
<!DOCTYPE html>
<html>
<title>Tour to relax</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="../css/website.css">
<script src="../scripts/main.js"></script>


<style>
    .resp-container 
    {
        position: relative;
        overflow: hidden;
        padding-top: 56.25%;
    }
    .resp-iframe 
    {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        border: 0;
    }
</style>
<body>
    <!-- Navbar (sit on top) follows RWD -->
    <!--PHP inlcude for navbar-->
    <?php require("../includes/navbar.php"); ?>
   
    <!--Responsive div for iframe that's containing map-->
    <div class="resp-container">
        <iframe class="resp-iframe" src="https://www.google.com/maps/embed?pb=!4v1543180179743!6m8!1m7!1sCAoSLEFGMVFpcE1vcEI0WlhTMF9jMVNSaGVScGlXZ0ZPZHJRWFNmak84ZDBVcGVu!2m2!1d31.6204403534814!2d74.87599757483122!3f146.7!4f-9.620000000000005!5f0.7820865974627469" frameborder="0" style="border:0" allowfullscreen></iframe>
    </div>


    <!--PHP inlcude for footer-->
    <?php
    require("../includes/footer.php");
    ?>

</body>
</html>



