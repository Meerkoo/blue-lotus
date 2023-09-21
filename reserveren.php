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
    <div class="template" id="reservation">
        <section class="fill-out-form">
            <div class="white-container" id="reservation">
                <div class="title">Reserveer uw tafel</div>
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
                            <span class="title-box">Telefoon</span>
                            <br>
                            <input type="text" name="phone" placeholder="Uw telefoon nummer" required>
                        </div>
                        <br>
                        <div class="fill-out-box">
                            <span class="title-box">E-mail</span>
                            <br>
                            <input type="text" name="email" placeholder="Uw mail adres" required>
                        </div>
                        <br>
                        <div class="fill-out-box">
                            <span class="title-box">Aantal mensen</span>
                            <br>
                            <div class="no-cursor">
                                <input type="number" name="guest_count" placeholder="Selecteer een aantal" min="1" required>
                            </div>
                        </div>
                        <br>
                        <div class="fill-out-box">
                            <div class="input-color">
                                <span class="title-box">Datum</span>
                                <input type="date" name="date" required>
                                <script> var today = new Date().toISOString().split('T')[0];
                                document.getElementsByName("date")[0].setAttribute('min', today); </script>
                            </div>
                        </div>
                        <br>
                        <div class="fill-out-box">
                            <div class="input-color">
                                <span class="title-box">Tijd</span>
                                <input type="time" name="time" required>
                            </div>
                        </div>
                        <br>
                        <div class="fill-out-button">
                            <input type="submit" value="Reserveer">
                            <span>Reservering aanvragen...</span>
                        </div>
                    </form>
                </div>
            </div>
        </section>
        <section class="fill-out-form">
            <div class="white-container" id="times">
                <div class="title">Openings-tijden</div>
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
        <script src="js/reservation.js"></script>
    </div>
    <?php include "footer.php"?>
</body>
