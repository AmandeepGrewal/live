
<!DOCTYPE html>
<html>
<title>Listen to LIVE</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="css/website.css">
<script src="scripts/main.js"></script>
<style>
    /* Full height image header */

    body, html {
        height: 100%;
        line-height: 1.8;
    }

    .bgimg-1 {
        background-position: center;
        background-size: cover;
        background-image: url("images/cover.jpg");
        min-height: 100%;
    }
</style>
<body>
    <!-- Navbar (sit on top) follows RWD -->
    <!--PHP inlcude for navbar-->
    <?php require("includes/navbar.php"); ?>

    <!-- Header with full-height image -->
    <header class="bgimg-1 w3-display-container" id="home">
        <div class="w3-display-bottomright w3-text-white" style="padding:48px">
            <span class="w3-jumbo w3-hide-small">Let's listen to live</span><br>
            <h6 class="w3-button w3-white w3-padding-large w3-large w3-opacity w3-hover-opacity-off">
                Go LIVE <!-- BEGINS: AUTO-GENERATED MUSES RADIO PLAYER CODE -->
                <script type="text/javascript" src="https://hosted.muses.org/mrp.js"></script>
                <!--EXecute on click of the play button-->
                <script>
                 MRP.insert({
                'url':'http://sgpc.net:8070/live32',
                'lang':'en',
                'codec':'mp3',
                'volume':100,
                'autoplay':false,
                'jsevents':true,
                'buffering':0,
                'title':'Listen to live',
                'welcome':'Welcome',
                'wmode':'transparent',
                'skin':'banita',
                'width':110,
                'height':25
                });
                </script>
                <!-- ENDS: AUTO-GENERATED MUSES RADIO PLAYER CODE -->
            </h6>
        </div>
    </header>
    <!-- About Section -->
    <div class="w3-container" style="padding:128px 16px" id="about">
        <h3 class="w3-center">ABOUT KIRTAN</h3>
        <p class="w3-center w3-large">... in Sikhism</p>
        <div class="w3-row-padding w3-content w3-center" style="margin-top:64px">
            <p class="w3-justify">
                Kirtan or Kirtana (Sanskrit: कीर्तन; IAST: Kīrtana) is a Sanskrit word that means "narrating, reciting, telling, describing" of an idea or story. It also refers to a genre of religious performance arts, connoting a musical form of narration or shared recitation, particularly of spiritual or religious ideas.

                With roots in the Vedic anukirtana tradition, a kirtan is a call-and-response style song or chant, set to music, wherein multiple singers recite or describe a legend, or express loving devotion to a deity, or discuss spiritual ideas. It may include dancing or direct expression of bhavas (emotive states) by the singer. Many kirtan performances are structured to engage the audience where they either repeat the chant, or reply to the call of the singer.

                A person performing kirtan is known as a kirtankara (or kirtankar). A Kirtan performance includes an accompaniment of regionally popular musical instruments, such as the harmonium, the veena or ektara (forms of string instruments), the tabla (one-sided drums), the mrdanga or pakhawaj (two-sided drum), flute (forms of woodwind instruments), and karatalas or talas (cymbals). It is a major practice in Hinduism, Vaisnava devotionalism, Sikhism, the Sant traditions and some forms of Buddhism, as well as other religious groups. Kirtan is sometimes accompanied by story-telling and acting. Texts typically cover religious, mythological or social subjects.
            </p>
            <p class="w3-justify">
                Kirtan refers to devotional singing in Sikhism. It is typically performed at Gurdwaras (Sikh temples). Sikh scriptures and legends are usually recited in a song, to a certain raga and accompanied with musical instruments. The Gurus themselves created numourous musical instruments including the Dilruba, the Sarangi, the Esraj and a modification of the Pakhawaj creating an early form of the Tabla. A Shabad Kirtan refers to the musical recitation of the Guru Granth Sahib, the primary scripture in the Sikhism tradition which is arranged according to raga. The Shabad Kirtan can be listened to silently or sung along with the gathered congregation.
                Kirtan in Sikh history has been the musical analog of Kathas recitation, both preferably performed by ragi jatha, or professional trained performers. A Sikh Kirtan is a religious, aesthetic and social event, usually held in a congregational setting on Sundays or over certain festivals to honor the historical Gurus, but major temples in the Sikh tradition recite Kirtan everyday as a mark of daily bhakti (devotional remembrance) of God's name. The congregational setting is called a Sangat or Satsang, a word that in ancient Indian texts means "like minded individuals, or fellow travelers on a spiritual journey".
            </p>
        </div>
    </div>
    <!--PHP inlcude for footer-->
    <?php
    require("includes/footer.php");
    ?>

</body>
</html>