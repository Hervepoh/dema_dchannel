<?php $auth=0; ?>
<?php include 'lib/includes.php';?> 
<?php include 'partials/header.php';?>  
<?php
             /**
            * script php pour afficher les utilisateurs connecté sur mon site 
            * pensez a inclure ce script sur chaque page
            
            *$temps_session = 15;
            *$temps_actuel = date("U");
            *$user_ip=$_SERVER['REMOTE_ADDR'];

            *$req_ip_exist = $db->prepare('SELECT * FROM onlines WHERE user_ip=?');
            *$req_ip_exist -> execute(array($user_ip));
            *$ip_existe= $req_ip_exist ->rowCount();

            *if($ip_existe==0){
            *    $add_ip=$db->prepare('INSERT INTO onlines(user_ip,time) VALUES(?,?)');
            *    $add_ip->execute(array($user_ip,$temps_actuel));
            *}else {
            *    $update_ip= $db->prepare('UPDATE  onlines SET time=? WHERE user_ip=?');
            *   $update_ip->execute(array($temps_actuel,$user_ip));
            *}

            *$session_delete_time= $temps_actuel - $temps_session;
            *$del_ip = $bd->query('DELETE  FROM onlines WHERE time<?');
            *$del_ip->execute(array($session_delete_time));

            *$show_user_nbr = $bd->query('SELECT * FROM onlines ');

            *$user_nbr = $show_user_nbr->rowCount();

            *echo $temps_actuel;
            *echo $user_nbr;

            */
        ?>
<?php include 'partials/corps_accueil.php';?> 


<?php /*include 'lib/debug.php';*/?> 
<?php include 'partials/footer.php';?>