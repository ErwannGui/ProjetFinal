<?php
    ob_start();
    session_start();
    include_once 'dbconnect.php';

// on rapelle les variables du formulaire
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

/* --- Utilisé pour l'envoi par mail des données --- */
$account="chezfifi.resto@gmail.com";
$password="P@ssw0rd!";
$to="chezfifi.resto@gmail.com";

$from=$mail;
$from_name=$nom.' '.$prenom; // réutilisé pour l'insertion en bdd
$subject=$objet;  
$msg=$message.'<br/>'.$tel;
/* --- */

$query = "INSERT INTO message(messageNomEnvoyeur,messageMail,messageTel,messageObjet,messageContenu) VALUES('$from_name','$mail','$tel','$subject','$message')";
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

/* --- mise en forme du mail via phpmailer --- */
include("phpmailer/class.phpmailer.php");
$mail = new PHPMailer();
$mail->IsSMTP(); // pour un envoi sur un serveur online style gmail
$mail->CharSet = 'UTF-8'; // encodage du message
$mail->SMTPDebug = 1; // quels retours de phpmailer (erreurs/erreurs-messages)
$mail->Host = "smtp.gmail.com"; // serveur en question
$mail->SMTPAuth= true; // gmail exige une sécurisation de l'envoi vi authentification
$mail->Port = 465; // Or 587
$mail->Username= $account; // identifiants definis plus haut
$mail->Password= $password;
$mail->SMTPSecure = 'ssl';
$mail->AddReplyTo($from); 
$mail->From = $from; // envoyeur
$mail->FromName= $from_name; // nom de l'envoyeur 
$mail->isHTML(true); // possibilité d'ecrire un message en html (<h1>Bonjour</h1></br>...) qui sera bien récupéré par mail
$mail->Subject = $subject; // objet du mail
$mail->Body = $msg; // corps du mail
$mail->addAddress($to); // destinataire du message
if(!$mail->send()){ // si l'envoi n'est pas confirmé
    echo "Erreur lors de l'envoi du mail. " . $mail->ErrorInfo;
    echo '</br><a href="javascript:history.go(-1)">Retour</a>'; // retour à la page précedente
}else{
    echo "Le message à bien été envoyé.";
    echo '</br><a href="javascript:history.go(-1)">Retour</a>'; // retour à la page précedente
    // destruction des variables
    unset($nom);
    unset($prenom);
    unset($mail);
    unset($tel);
    unset($objet);
    unset($message);
}

ob_end_flush();
?>;