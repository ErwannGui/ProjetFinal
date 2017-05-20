<?php
    ob_start();
    session_start();
    include_once 'dbconnect.php';

if (isset($_POST['Nom'])) {
    $nom = $_POST['Nom'];
}
if (isset($_POST['Prenom'])) {
    $prenom = $_POST['Prenom'];
}
if (isset($_POST['Mail'])) {
    $mail = $_POST['Mail'];
}
if (isset($_POST['Tel'])) {
    $tel = $_POST['Tel'];
}
if (isset($_POST['Objet'])) {
    $objet = $_POST['Objet'];
}
if (isset($_POST['Message'])) {
    $message = $_POST['Message'];
}

$account="chezfifi.resto@gmail.com";
$password="P@ssw0rd!";
$to="chezfifi.resto@gmail.com";

$from=$mail;
$from_name=$nom.' '.$prenom;
$subject=$objet;
$msg=$message.'<br/>'.$tel;

$query = "INSERT INTO message(messageNomEnvoyeur,messageMail,messageTel,messageObjet,messageContenu) VALUES('$nom_envoyeur','$mail','$tel','$subject','$message')";
$res = mysql_query($query) or die('Erreur SQL !<br>'.$query.'<br>'.mysql_error()); 

if ($res) {
    $errTyp = "success";
    $errMSG = "Le message à bien été sauvegardé en base de données";
    echo $errMSG.'</br>';
} else {
    $errTyp = "danger";
    $errMSG = "Quelque chose a mal fonctionné, réessayez plus tard ...";
    echo $errMSG.'</br>';
}

include("phpmailer/class.phpmailer.php");
$mail = new PHPMailer();
$mail->IsSMTP();
$mail->CharSet = 'UTF-8';
$mail->SMTPDebug = 1;
$mail->Host = "smtp.gmail.com";
$mail->SMTPAuth= true;
$mail->Port = 465; // Or 587
$mail->Username= $account;
$mail->Password= $password;
$mail->SMTPSecure = 'ssl';
$mail->AddReplyTo($from);
$mail->From = $from;
$mail->FromName= $from_name;
$mail->isHTML(true);
$mail->Subject = $subject;
$mail->Body = $msg;
$mail->addAddress($to);
if(!$mail->send()){
    echo "Erreur lors de l'envoi du mail. " . $mail->ErrorInfo;
    echo '</br><a href="javascript:history.go(-1)">Retour</a>';
}else{
    echo "Le message à bien été envoyé.";
    echo '</br><a href="javascript:history.go(-1)">Retour</a>';
    unset($nom);
    unset($prenom);
    unset($mail);
    unset($tel);
    unset($objet);
    unset($message);
}

ob_end_flush();
?>;