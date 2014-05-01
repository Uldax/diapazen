<?php 
//Scipt de création d'un fichier ICS
//Il est appelé lors du clic sur le bouton "telecharger le .ics"

//true si on inclue l'h avec la date, false si pas d'h
function getIcalDate($time, $incl_time = true){
	$time = strtotime($time);
    return $incl_time ? date('Ymd\THis', $time) : date('Ymd', $time);
}

$dtStart=$_POST['startDate'];
$dtEnd=$_POST['endDate'];
$eventName=$_POST['event'];
$organiser="contact.diapazen@gmail.com";
//Location is optional
//$location=$_POST['location'];

// max line length is 75 chars. New line is \\n
$ical = "BEGIN:VCALENDAR
VERSION:2.0\n"
//The PRODID are your app / company details in the format Business Name//Product Name//Language.
."PRODID:-//Diapazen//Diapazen//EN\n"
//METHOD:REQUEST 
// Begining
."BEGIN:VEVENT\n"
//A unique ID for the event. This is important and required, and allows you to push changes to event details after they have been created.
."UID:" . md5(uniqid(mt_rand(), true)) . "@yourhost.test\n"
//."DTSTAMP:" . date("2014/10/2").'T'. date("2014/10/5") . "Z"
//Organisateur (optional) we can take the mail of the munber who send the document
."ORGANIZER:".$organiser."\n"
//The event start timestamp. 
."DTSTART:".getIcalDate($dtStart,false)."\n"
//The event end timestamp. 
."DTEND:".getIcalDate($dtEnd,false)."\n"
//name of the event
."SUMMARY:".$eventName."\n"
//Status of the event ( CONFIRMED /TENTATIVE/CANCELLED ) (optional)
//."STATUS:CONFIRMED
."END:VEVENT
END:VCALENDAR";

//set correct content-type-header
header('Content-type: text/calendar; charset=utf-8');
header('Content-Disposition: inline; filename=calendar.ics');
echo $ical;
exit;
 ?>