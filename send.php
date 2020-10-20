<?php
// Telegram data
$token ='994138058:AAFcqV-6avvCh8z1zMkYDafz3rQhcN8zKGs';
$chatid = '-354273811';
$success = 'Message sent';
$text_error = 'Form not completed';

if ($_SERVER['REQUEST_METHOD'] == 'POST'){

// data from forms
$plaсeformes = trim($_POST['Placement']);
$plaсeformestwo = trim($_POST['Form-options']);
$hawcall = trim($_POST['hawcall']);
$advisecheck = trim($_POST['advisecheck']);
$name = trim($_POST['Name']);
$phone = trim($_POST['Phone']);
$timecall = trim($_POST['time-call']);

// message
$tmtext = array(
"Call method" => $plaсeformes,
"Placement of the form" => $plaсeformestwo,
"How to contact" => $hawcall,
"Consent to processing" => $advisecheck,
"Call time" => $timecall,
"Name" => $name,
"Phone" => $phone,
);
//putting everything together
$txt='';
foreach($tmtext as $key => $value) {
     $txt .= "<b>".$key."</b>: ".$value."%0A";
  }
# Sending a message
fopen("https://api.telegram.org/bot{$token}/sendMessage?chat_id={$chatid}&parse_mode=html&text={$txt}","r");
echo $success;
}
else{
echo $text_error;
}
?>
