<?php
    $errors=[];
    if(!array_key_exists('name',$_POST) || $_POST['name']==''){
        $errors['name']="Vous n'avez pas renseigné votre nom";
    }
    if(!array_key_exists('email',$_POST) || $_POST['email']=='' ||filter_var($_POST['email'],FILTER_VALIDATE_EMAIL)){
        $errors['email']="Vous n'avez pas renseigné un email valide ";
    }
    if(!array_key_exists('message',$_POST) || $_POST['message']==''){
        $errors['message']="Vous n'avez pas renseigné votre message";
    }
    if (!empty($errors)) {
        session_start();
        $_SESSION['errors']=$errors;
        $_SESSION['input']=$_POST;
        header('Location: contact.php');
    }else {
        $message=$_POST['message'];
        $headers='FROM: mailexpéditeur@ligne.dev';
        mail('Contactdemagroup@gmail.com','Formulaire de contact',$message ,$headers);
    }
   
?>