<?php
 
 // Als je een dag op gesloten wil zetten, zet dan $[dag]_closed op True. Verander niet de tijd in gelosten!!!
 // Als je het op geopent wil verander het in False. LET OP Hoofdletter!!!
 
 $monday_start = date("H:i", strtotime("16:00"));
 $monday_end = date("H:i", strtotime("22:00"));
 $monday_closed = False;
 
 $tuesday_start = date("H:i", strtotime("16:00"));
 $tuesday_end = date("H:i", strtotime("22:00"));
 $tuesday_closed = False;
 
 $wednesday_start = date("H:i", strtotime("16:00"));
 $wednesday_end = date("H:i", strtotime("22:00"));
 $wednesday_closed = False;
 
 $thursday_start = date("H:i", strtotime("16:00"));
 $thursday_end = date("H:i", strtotime("22:00"));
 $thursday_closed = False;
 
 $friday_start = date("H:i", strtotime("16:00"));
 $friday_end = date("H:i", strtotime("22:00"));
 $friday_closed = False;
 
 $saturday_start = date("H:i", strtotime("16:00"));
 $saturday_end = date("H:i", strtotime("22:00"));
 $saturday_closed = False;

 $sunday_start = date("H:i", strtotime("16:00"));
 $sunday_end = date("H:i", strtotime("22:00"));
 $sunday_closed = False;
?>