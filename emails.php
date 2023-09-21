<?php 
$confirmation_mail = '<!doctype html>
<html ⚡4email data-css-strict>

<head>
  <meta charset="utf-8">
  <meta name="x-apple-disable-message-reformatting">
  <style amp4email-boilerplate>
    body {
      visibility: hidden
    }
  </style>

  <script async src="https://cdn.ampproject.org/v0.js"></script>


  <style amp-custom>
    .u-row {
      display: flex;
      flex-wrap: nowrap;
      margin-left: 0;
      margin-right: 0;
    }
    
    .u-row .u-col {
      position: relative;
      width: 100%;
      padding-right: 0;
      padding-left: 0;
    }
    
    .u-row .u-col.u-col-100 {
      flex: 0 0 100%;
      max-width: 100%;
    }
    
    @media (max-width: 767px) {
      .u-row:not(.no-stack) {
        flex-wrap: wrap;
      }
      .u-row:not(.no-stack) .u-col {
        flex: 0 0 100%;
        max-width: 100%;
      }
    }
    
    body {
      margin: 0;
      padding: 0;
    }
    
    table,
    tr,
    td {
      vertical-align: top;
      border-collapse: collapse;
    }
    
    p {
      margin: 0;
    }
    
    .ie-container table,
    .mso-container table {
      table-layout: fixed;
    }
    
    * {
      line-height: inherit;
    }
    
    table,
    td {
      color: #000000;
    }
  </style>


</head>

<body class="clean-body u_body" style="margin: 0;padding: 0;background-color: #f9f9f9;color: #000000">
  <!--[if IE]><div class="ie-container"><![endif]-->
  <!--[if mso]><div class="mso-container"><![endif]-->
  <table style="border-collapse: collapse;table-layout: fixed;border-spacing: 0;vertical-align: top;min-width: 320px;Margin: 0 auto;background-color: #f9f9f9;width:100%" cellpadding="0" cellspacing="0">
    <tbody>
      <tr style="vertical-align: top">
        <td style="word-break: break-word;border-collapse: collapse;vertical-align: top">
          <!--[if (mso)|(IE)]><table width="100%" cellpadding="0" cellspacing="0" border="0"><tr><td align="center" style="background-color: #f9f9f9;"><![endif]-->

          <div style="padding: 0px;">
            <div style="max-width: 600px;margin: 0 auto;">
              <div class="u-row">

                <div class="u-col u-col-100" style="display:flex;border-top: 0px solid transparent;border-left: 0px solid transparent;border-right: 0px solid transparent;border-bottom: 0px solid transparent;">
                  <div style="width: 100%;padding:0px;">

                    <table style="font-family:"Cabin",sans-serif;" role="presentation" cellpadding="0" cellspacing="0" width="100%" border="0">
                      <tbody>
                        <tr>
                          <td style="overflow-wrap:break-word;word-break:break-word;padding:12px 10px 10px;font-family:"Cabin",sans-serif;" align="left">

                            <h1 style="margin: 0px; line-height: 140%; text-align: center; word-wrap: break-word; font-size: 22px; font-weight: 400;">Bedankt voor uw reservering bij The Blue Lotus!</h1>

                          </td>
                        </tr>
                      </tbody>
                    </table>

                  </div>
                </div>

              </div>
            </div>
          </div>

          <div style="padding: 0px;">
            <div style="max-width: 600px;margin: 0 auto;">
              <div class="u-row">

                <div class="u-col u-col-100" style="display:flex;border-top: 0px solid transparent;border-left: 0px solid transparent;border-right: 0px solid transparent;border-bottom: 0px solid transparent;">
                  <div style="width: 100%;padding:0px;">

                    <table style="font-family:"Cabin",sans-serif;" role="presentation" cellpadding="0" cellspacing="0" width="100%" border="0">
                      <tbody>
                        <tr>
                          <td style="overflow-wrap:break-word;word-break:break-word;padding:16px;font-family:"Cabin",sans-serif;" align="left">
                            <div style="text-align:center;line-height:0">
                              <div style="border-top-width:1px;border-top-style:solid;border-top-color:#dbbb6b;width:100%;display:inline-block;line-height:1px;height:0px;vertical-align:middle"> </div>
                            </div>
                          </td>
                        </tr>
                      </tbody>
                    </table>

                    <table style="font-family:"Cabin",sans-serif;" role="presentation" cellpadding="0" cellspacing="0" width="100%" border="0">
                      <tbody>
                        <tr>
                          <td style="overflow-wrap:break-word;word-break:break-word;padding:10px;font-family:"Cabin",sans-serif;" align="left">

                            <div style="font-size: 14px; line-height: 140%; text-align: center; word-wrap: break-word;">
                              <p style="line-height: 140%;">Hartelijk dank voor uw reservering bij restaurant The Blue Lotus! We zijn verheugd u te mogen verwelkomen op de door u gekozen datum en tijd. Uw tafel is gereserveerd en we kijken ernaar uit om u een onvergetelijke culinaire
                                ervaring te bezorgen.</p>
                              <p style="line-height: 140%;">&nbsp;</p>
                              <p style="line-height: 140%;">Reserveringsdetails:</p>
                              <p style="line-height: 140%;">Naam: '. $name .'</p>
                              <p style="line-height: 140%;">Datum: '. $date .'</p>
                              <p style="line-height: 140%;">Tijd: '. $time .'</p>
                              <p style="line-height: 140%;">Aantal personen: '. $guest_count .'</p>
                              <p style="line-height: 140%;">&nbsp;</p>
                              <p style="line-height: 140%;">Mocht u om welke reden dan ook uw reservering willen wijzigen of annuleren, dan verzoeken we u vriendelijk om dit zo snel mogelijk te laten weten, zodat we de beschikbaarheid kunnen aanpassen.</p>
                              <p style="line-height: 140%;">Als u nog vragen heeft of verdere assistentie nodig heeft, aarzel dan niet om contact met ons op te nemen.</p>
                              <p style="line-height: 140%;">&nbsp;</p>
                              <p style="line-height: 140%;">Nogmaals bedankt voor uw reservering bij The Blue Lotus.</p>
                              <p style="line-height: 140%;">&nbsp;</p>
                              <p style="line-height: 140%;">Met vriendelijke groet,</p>
                              <p style="line-height: 140%;">Restaurant The Blue Lotus</p>
                              <p style="line-height: 140%;"><strong>&nbsp;</strong>0299 - 434999</p>
                              <p style="line-height: 140%;">info@blue-lotus.nl</p>
                            </div>

                          </td>
                        </tr>
                      </tbody>
                    </table>

                  </div>
                </div>

              </div>
            </div>
          </div>

          <!--[if (mso)|(IE)]></td></tr></table><![endif]-->
        </td>
      </tr>
    </tbody>
  </table>
  <!--[if mso]></div><![endif]-->
  <!--[if IE]></div><![endif]-->
</body>

</html>';

$linkaccept = "http://localhost/bluelotus/confirmation.php?name=$name&mail=$email&date=$date&time=$time&status=accept";
$linkcancel = "http://localhost/bluelotus/confirmation.php?name=$name&mail=$email&date=$date&time=$time&status=cancel";

//begin of HTML message 
$acceptmail ='<!doctype html>
<html ⚡4email data-css-strict>
<head>
  <meta charset="utf-8">
  <meta name="x-apple-disable-message-reformatting">
  <style amp4email-boilerplate>body{visibility:hidden}</style>

    <script async src="https://cdn.ampproject.org/v0.js"></script>


    <style amp-custom>
      .u-row {
  display: flex;
  flex-wrap: nowrap;
  margin-left: 0;
  margin-right: 0;
}

.u-row .u-col {
  position: relative;
  width: 100%;
  padding-right: 0;
  padding-left: 0;
}


.u-row .u-col.u-col-50 {
  flex: 0 0 50%;
  max-width: 50%;
}

.u-row .u-col.u-col-100 {
  flex: 0 0 100%;
  max-width: 100%;
}


@media (max-width: 767px) {
  .u-row:not(.no-stack) {
    flex-wrap: wrap;
  }

  .u-row:not(.no-stack) .u-col {
    flex: 0 0 100%;
    max-width: 100%;
  }
}

body {
  margin: 0;
  padding: 0;
}

table,
tr,
td {
  vertical-align: top;
  border-collapse: collapse;
}

p {
  margin: 0;
}

.ie-container table,
.mso-container table {
  table-layout: fixed;
}

* {
  line-height: inherit;
}

table, td { color: #000000; } #u_body a { color: #0000ee; text-decoration: underline; }
    </style>


</head>

<body class="clean-body u_body" style="margin: 0;padding: 0;background-color: #f9f9f9;color: #000000">
  <!--[if IE]><div class="ie-container"><![endif]-->
  <!--[if mso]><div class="mso-container"><![endif]-->
  <table id="u_body" style="border-collapse: collapse;table-layout: fixed;border-spacing: 0;vertical-align: top;min-width: 320px;Margin: 0 auto;background-color: #f9f9f9;width:100%" cellpadding="0" cellspacing="0">
  <tbody>
  <tr style="vertical-align: top">
    <td style="word-break: break-word;border-collapse: collapse;vertical-align: top">
    <!--[if (mso)|(IE)]><table width="100%" cellpadding="0" cellspacing="0" border="0"><tr><td align="center" style="background-color: #f9f9f9;"><![endif]-->

  <div style="padding: 0px;">
    <div style="max-width: 600px;margin: 0 auto;background-color: #ffffff;">
      <div class="u-row">

<div class="u-col u-col-100" style="display:flex;border-top: 0px solid transparent;border-left: 0px solid transparent;border-right: 0px solid transparent;border-bottom: 0px solid transparent;">
  <div style="width: 100%;padding:0px;">

<table style="font-family:"Cabin",sans-serif;" role="presentation" cellpadding="0" cellspacing="0" width="100%" border="0">
  <tbody>
    <tr>
      <td style="overflow-wrap:break-word;word-break:break-word;padding:10px;font-family:"Cabin",sans-serif;" align="left">

  <h1 style="margin: 0px; line-height: 140%; text-align: center; word-wrap: break-word; font-size: 22px; font-weight: 400;">Nieuwe Reservering</h1>

      </td>
    </tr>
  </tbody>
</table>

  </div>
</div>

      </div>
    </div>
  </div>

  <div style="padding: 0px;">
    <div style="max-width: 600px;margin: 0 auto;background-color: #ffffff;">
      <div class="u-row">

<div class="u-col u-col-100" style="display:flex;border-top: 0px solid transparent;border-left: 0px solid transparent;border-right: 0px solid transparent;border-bottom: 0px solid transparent;">
  <div style="width: 100%;padding:0px;">

<table style="font-family:"Cabin",sans-serif;" role="presentation" cellpadding="0" cellspacing="0" width="100%" border="0">
  <tbody>
    <tr>
      <td style="overflow-wrap:break-word;word-break:break-word;padding:33px 55px 2px;font-family:"Cabin",sans-serif;" align="left">

  <div style="font-size: 14px; line-height: 160%; text-align: left; word-wrap: break-word;">
    <p style="line-height: 160%;">Naam: ' . $name . '</p>
<p style="line-height: 160%;">Aantal: ' . $guest_count . '</p>
<p style="line-height: 160%;">Datum: ' . $date . '</p>
<p style="line-height: 160%;">Tijd: ' . $time . '</p>
<p style="line-height: 160%;">Telefoon: ' . $phone . '</p>
<p style="line-height: 160%;">Mail: ' . $email . '</p>
<p style="line-height: 160%;">&nbsp;</p>
  </div>

      </td>
    </tr>
  </tbody>
</table>

  </div>
</div>

      </div>
    </div>
  </div>
</body>

</html>';

?>



