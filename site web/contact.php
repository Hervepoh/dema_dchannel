<?php $auth=0; ?>
<?php include 'lib/includes.php';?> 
<?php include 'partials/header.php';?>  

<?php

?>
<br><br><br><br><br>
<div class="container">

	<?php if (array_key_exists('errors',$_SESSION)):?>
		<div class="alert alert-danger">
			<?= implode('<br>',$_SESSION['errors']);?>
		</div>
	<?php unset($_SESSION['errors']); endif; ?>

	<div class="row">
		<h2 class="text-center">Nous Contactez</h2>
		<br>
	</div>
	
	<form method="POST" action="post_contact.php" role="form">
		<div class="row">
		 	<div class="col-xs-6">
				<div class="form-group">
					<label for="inputname">Votre Nom</label>
					<input type="text" class="form-control" name="name" id="inputname" placeholder="firstname_lastname" value="<?=(isset($_SESSION['input']['name']))? $_SESSION['input']['name'] :''; ?>">
				</div>
			</div>
			<div class="col-xs-6">
				<div class="form-group">
					<label for="inputemail">Votre Email </label>
					<input type="email" name="email" class="form-control" id="inputemail" aria-describedby="emailHelp" placeholder="name@example.com" value="<?= (isset($_SESSION['input']['email'])) ? $_SESSION['input']['email'] :''; ?>">
					<small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
				</div>			
			</div>
			<div class="col-xs-12">
				<div class="form-group">
					<label for="inputmessage">Commentaire </label>
					<textarea name="message" placeholder="Nous laissez un messsage" id="inputmessage" class="form-control" rows="5">
						<?= (isset($_SESSION['input']['message'])) ? $_SESSION['input']['message'] :''; ?>	
					</textarea>
				</div>
			</div>
		</div>
		<button  type="submit" name="mailform" class="btn btn-primary center"> envoyer <i class="fas fa-paper-plane"></i></button>
	</form>
	<h2>debug</h2>
	<?=var_dump($_SESSION['errors']);?>
	<br><br>
	
</div>

<?php //include 'lib/debug.php';?> 
<?php include 'partials/footer.php';?>