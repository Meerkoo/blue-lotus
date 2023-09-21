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
    <?php include "header.php"; ?>
    <div class="foto">
      <img src="images/sd.jpg" alt="Interieur restaurant The Blue Lotus">
    </div>

    <div class="template" id="specialiteiten">
      <section class="fill-out-form">
          <div class="white-container" id="info">
            <div class="title">Authentieke chinees-indische <b>specialiteiten</b></div>
              <br>
              <div class="fill-out-details">
                <div class="fill-out-box" id="info">
                  <span class="title-box">
                  <br>
                  Sinds 1979 bieden wij al authentieke Chinees Indische eten in Purmerend en omgeving. 
                  Kortom, een begrip in de omgeving! Met onze rijke ervaring zorgen wij voor lekker, grote variatie en goed verzorgde eten. 
                  Sinds Augustus 2015 hebben wij ons assortiment uitgebreid met Sushi & Grill.
                  Dit kan via bezorgen, catering op locatie of gezellig dineren bij ons.
                  Reserveer snel een tafel en kom genieten van de echte uitgebreide Aziatische keuken.
                  </span>
                </div>
              </div>
            </div>  
          </div>
      </section>
    </div>

    <div class="template" id="action">
      <section class="fill-out-form">
          <div class="fill-out-button">
            <input type="button" onclick="location.href='https://bluelotus.foodticket.nl/foodticket/cgi/bestel.cgi';" value="Bestellen">
          </div>
          <div class="fill-out-button" id="reserveren">
            <input type="button" onclick="location.href='./reserveren.php';" value="Reserveren">
          </div> 
      </section>
    </div>

    <div class="template" id="menu">
      <section class="fill-out-form">
          <div class="white-container" id="menu">
            <div class="title">Ons <b>Menu</b></div>  
          </div>
      </section>
      <section class="fill-out-form" id=keuze>
        <div class="white-container" id="keuze-chinees">
            <span class="title-box"><img src="images/chinees2.png" alt="Foto van chinees eten"></span>
            <div class="title">Chinees-<b>Indisch</b></div>
            <div class="fill-out-button">
                <input type="button" onclick="location.href='./menu.php';" value="Bekijk menu">
            </div>
          </div>  
        <div class="white-container" id="keuze-sushi">
            <span class="title-box"><img src="images/sushi4.png" alt="Foto van sushi"></span>
            <div class="title"><b>Sushi</b> & Grill</div>
            <div class="fill-out-button">
              <input type="button" onclick="location.href='./menu.php';" value="Bekijk menu">
            </div>
          </div>  
       </div>
      </section>
    </div>


    <div class="banner-1">
      <img src="images/banner1.jpg" alt="Interieur restaurant The Blue Lotus">

      <div class="template" id="lotus">
      <section class="fill-out-form">
          <div class="white-container" id="info">
            <div class="title">Lotus</div>
              <br>
              <div class="fill-out-details">
                <div class="fill-out-box" id="info">
                  <span class="title-box">
                  <br>
                  "Een lotus is een oosterse waterlelie, zoals die in het historische China te vinden waren in de brede vijver van de verboden stad. 
                  Een unicum was het kweken van een blauwe lotus en wie zijn Chinees-Indisch restaurant noemt naar zo'n unicum moet wel iets speciaals te bieden hebben."
                  <br>

                  "In Purmerend, aan de Nieuwstraat naast de parkeergarage van het Willem Eggert Centrum is zo'n restaurant gevestigd waarvan de eigenaren Raymond en 
                  zoon Vincent Koh het aangedurfd hebben de naam The Blue Lotus te kiezen. Een fijn restaurant, een restaurant met allure waar het bijzonder goed toeven is." 
                  - aldus Het Gezinsblad, 1992
                  </span>
                </div>
              </div>
            </div>  
          </div>
      </section>
      </div>
    </div>

    <div class="template" id="geschiedenis">
      <section class="fill-out-form">
        <div class="white-container" id="info">
          <div class="title">Al ruim 30 jaar een begrip in Purmerend</div>
            <br>
              <div class="fill-out-details">
                <div class="fill-out-box" id="info">
                  <span class="title-box">
                  <br>
                  De familie Koh is het gezicht van de zaak en samen met hun team verzorgen zij voor een vriendelijke en gastvrije avond. 
                  Met ruimte voor ruim 100 mensen zijn al vele feestjes, trouwerijen, recepties en familieavonden gehouden in het restaurant.

                  Neem <a href="./contact.php">contact</a> met ons op en wij vertellen u meer over de mogelijkheden.
                  </span>
                </div>
              </div>
            </div>  
            <div class="banner-2">
              <img src="images/banner3.jpg" alt="Interieur restaurant The Blue Lotus">
            </div>
      </section>
    </div>

      


    

    

    
    <?php include "footer.php"?>
  </body>
</html>