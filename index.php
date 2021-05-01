<?PHP
/*
Name: LTI placement for Jitsi video rooms
Date: 5/1/2021
Desc: This program captures the LTI launch data from an LMS course and creates a short, unique URL to a Jitsi room. 
The setup in the LTI configuration can provide encryption salt, daily reset indicator, or a custom Jitsi URL.
*/

// the default free video rooms are hosted by jit.si.  However, alternative hosts can be used such as meet.systemli.org.  If the organization runs their own jitsi rooms on Debian, Ubuntu, or Docker, they can provide their own URL in the LMS LTI custom configuration
$meetURL = "meet.jit.si";
if (!empty($_POST['custom_meeturl']))
{ $meetURL = $_POST['custom_meeturl']; }

//the custom_saltEnc is set in LTI custom configuration. It make the study room URLs unique to the organization and allows for complete reset of all URLs in case they were shared outside of the LMS
$saltEnc = "";
if (!empty($_POST['custom_saltenc']))
{ $saltEnc = $_POST['custom_saltenc']; }

//the custom_dailyReset parameter is in LTI custom configuration for the placement in the LMS.  If it is set the hash salt will be appended with a number that corresponds to the day of year.  This makes the salt different each day, and therefore the URL for each class study room is different each day.
$dailyReset = "";
if (!empty($_POST['custom_dailyreset']))
{ $saltEnc = $saltEnc.date("z"); }

// the $room variable will contain "Room" appended by a unique sha512 hash ensuring all users from a specific course 
end up in the same room
$room = "Room".substr(hash("sha512", $saltEnc.$_POST['context_title'].$_POST['context_label']),0,9);

// forward users to the room and add the user full name to the entry prompt
header('location: https://'.$meetURL.'/'.$room.'#userInfo.displayName='.'"'.$_POST["lis_person_name_full"].'"');

?>
