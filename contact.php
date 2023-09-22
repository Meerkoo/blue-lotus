<body>
<!DOCTYPE html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="shortcut icon" href="favicon.ico">
    <link
        rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"
    />
    <title>The Blue Lotus Chinees-Indisch Restaurant</title>
  </head>
    <body>
    <?php include "header.php"; include "openingtimes.php"; ?>
    <div class="template" id="contact">
        <section class="fill-out-form">
            <div class="white-container" id="message">
                <div class="title">Neem contact op</div>
                <br>
                <div class="fill-out-details">
                    <form method="post">
                        <div class="fill-out-box">
                            <span class="title-box">Naam</span>
                            <br>
                            <input type="text" name="name" placeholder="Uw naam" required>
                        </div>
                        <br>
                        <div class="fill-out-box">
                            <span class="title-box">E-mail</span>
                            <br>
                            <input type="text" name="email" placeholder="Uw mail">
                        </div>
                        <br>
                        <div class="fill-out-box">
                            <span class="title-box">Telefoon nummer</span>
                            <br>
                            <input type="text" name="phone" placeholder="Uw telefoon nummer" required>
                        </div>
                        <br>
                        <div class="fill-out-box">
                            <span class="title-box">Onderwerp</span>
                            <br>
                            <input type="text" name="subject" placeholder="Onderwerp" required>
                        </div>
                        <br>
                        <div class="fill-out-box">
                            <span class="title-box" id="message">Bericht</span>
                            <br>
                            <textarea type="text" name="message" placeholder="Type hier uw bericht" required></textarea>
                        </div>
                        <br>
                        <div class="fill-out-button">
                            <input type="submit" value="Verstuur bericht">
                            <span>Bericht aan het versturen...</span>
                        </div>
                    </form>
                </div>
            </div>
        </section>
        <section class="fill-out-form">
            <div class="white-container" id="info">
                <div class="title">The Blue Lotus</div>
                <br>
                <div class="fill-out-details">
                    <div class="fill-out-box" id="info">
                        <!-- <span class="title-box">Heeft u vragen? Neem dan contact op via de email of telefoon. <br>
                        Wilt u reserverven? Dit kan via <a href="./reservation_form.php">hier</a> of neem telefonisch contact op.</span> -->
                        <!-- <br>
                        <br> -->
                        <span class="title-box"><b>Adres: </b>Nieuwstraat 71, 1441 CL Purmerend</span>
                        <br>
                        <span class="title-box"><b>Telefoon: </b><a href="tel:0299434999">0299 - 434999</a></span>
                        <br>
                        <span class="title-box"><b>Email: </b><a href="mailto:info@blue-lotus.nl">info@blue-lotus.nl</a></span>
                        <br>
                        <br>
                        <span class="title-box"><b>KvK: </b>36008031</span>
                        <br>
                        <span class="title-box"><b>BTW: </b>005.017.488B01</span>
                        <br>
                        <span class="title-box"><b>Bank Rekening:</b> NL17 RABO 0354132296</span>
                        <br>
                    </div>
                    <div class="fill-out-box" id="map">
                        <div class="mapouter">
                            <iframe width="100%" height="300" id="gmap_canvas" src="https://www.google.com/maps/embed/v1/place?q=Restaurant+The+Blue+Lotus+Purmerend,+Nieuwstraat,+Purmerend,+Nederland&key=AIzaSyBFw0Qbyq9zTFTd-tUY6dZWTgaQzuU17R8" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
                        </div>
                    </div>     
                </div>
            </div>
        </section>
        <section class="fill-out-form" id="contact_times">
            <div class="white-container" id="times">
                <div class="title">Openings tijden</div>
                <span class="title-box" id="times"><b>Maandag: <br></b><?php if ($monday_closed) { echo "Gesloten"; } else { echo $monday_start, " - ", $monday_end; } ?></span>
                <br>
                <span class="title-box" id="times"><b>Dinsdag: <br></b><?php if ($tuesday_closed) { echo "Gesloten"; } else { echo $tuesday_start, " - ", $tuesday_end; } ?></span>
                <br>
                <span class="title-box" id="times"><b>Woensdag: <br></b><?php if ($wednesday_closed) { echo "Gesloten"; } else { echo $wednesday_start, " - ", $wednesday_end; } ?></span>
                <br>
                <span class="title-box" id="times"><b>Donderdag: <br></b><?php if ($thursday_closed) { echo "Gesloten"; } else { echo $thursday_start, " - ", $thursday_end; } ?></span>
                <br>
                <span class="title-box" id="times"><b>Vrijdag: <br></b><?php if ($friday_closed) { echo "Gesloten"; } else { echo $friday_start, " - ", $friday_end; } ?></span>
                <br>
                <span class="title-box" id="times"><b>Zaterdag: <br></b><?php if ($saturday_closed) { echo "Gesloten"; } else { echo $saturday_start, " - ", $saturday_end; } ?></span>
                <br>
                <span class="title-box" id="times"><b>Zondag: <br></b><?php if ($sunday_closed) { echo "Gesloten"; } else { echo $sunday_start, " - ", $sunday_end; } ?></span>
                <br>
            </div>
        </section>
    </div>
    <script src="js/contact.js"></script>
    <?php include "footer.php" ?>
</body>