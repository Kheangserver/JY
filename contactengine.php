<?php

$EmailFrom = "admin@yoursite.com";
$EmailTo = "Kheangky168@gmail.com";  // Update this line with your desired email address
$Subject = "Message from your site";
$Name = Trim(stripslashes($_POST['Name'])); 
$Email = Trim(stripslashes($_POST['Email'])); 
$Message = Trim(stripslashes($_POST['Message'])); 

// validation
$validationOK = true;
// You can add your own validation logic here

if (!$validationOK) {
    print "<meta http-equiv=\"refresh\" content=\"0;URL=error.htm\">";
    exit;
}

// prepare email body text
$Body = "";
$Body .= "Name: ";
$Body .= $Name;
$Body .= "\n";
$Body .= "Email: ";
$Body .= $Email;
$Body .= "\n";
$Body .= "Message: ";
$Body .= $Message;
$Body .= "\n";

// send email 
$success = mail($EmailTo, $Subject, $Body, "From: <$EmailFrom>");

// redirect to success page 
if ($success){
    print "<meta http-equiv=\"refresh\" content=\"0;URL=contactthanks.php\">";
} else {
    print "<meta http-equiv=\"refresh\" content=\"0;URL=error.htm\">";
}

?>
