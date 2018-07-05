<?php 
    $auth=0;
    include 'lib/includes.php';
    
    /**
     * Traitement du formulaire
     */
    if(isset($_POST['username']) && isset($_POST['password'])){
        $username =$db->quote($_POST['username']);
        $password= sha1($_POST['password']);
        $select =$db->query("SELECT * FROM users WHERE username=$username AND password='$password'");
       if($select->rowCount()>0){
            $_SESSION['auth']=$select->fetch();
            setFlash('Vous etes maintenant Connecté , Ravi de vous revoir');
            header('Location:'.WEBROOT.'admin/index.php');
            die();
        } 
    } 

    /**
     * inclusion du header
     */

?>
<?php include 'partials/signinhead.php';?>
    <form action="" method="post" role="form" class="formstyle">
            <div class="form-group">
                <label for="username">Login de l'administrateur</label>
                <?php echo input('username');?>       
            </div>
            <div class="form-group">
                <label for="password">Mot de passe</label>
                <input type="password" name="password" id="password" class="form-control">         
            </div>
            <button type="submit" class="btn btn-default">Se Connecter</button>
            <br><br><a href="">Lost your password?</a><span>&nbsp;&nbsp;&nbsp;</span><a href="">Dont'have an account?</a>
        </form>
<?php include 'partials/signinfoot.php';?>
<?php //include 'lib/debug.php';?>
