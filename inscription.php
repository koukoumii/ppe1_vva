<!DOCTYPE HTML> 
<html> 
	<head> 
		<meta charset="utf-8">
	    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	    <meta name="description" content="">
	    <meta name="author" content="">
	    <title>Inscription Villageois</title>

		<?php include('header_site.php'); ?>
	</head> 
	<body> 
		<div class="container"> 
		<div class="form"> 
			<div class="row"> 
				<div class="col-md-4"> 
					<label><b>Nom:</b></label> 
				</div>  
				<div class="col-md-8">  
					<input  class="form-control" type="text" name="nom"/>
				</div>
			</div> 
			<div class="row"> 
				<div class="col-md-4"> 
					<label><b>Prénom:</b></label>  
				</div> 
				<div class="col-md-8"> 
					<input  class="form-control" type="text" name="prenom"/>
				</div> 
			</div> 

			<div class="row"> 
				<div class="col-md-4"> 
					<label><b>Adresse mail:</b></label> 
				</div> 
				<div class="col-md-8"> 
					<input  class="form-control" type="mail" name="mail"/> 
				</div>
			</div> 
				
			<div class="row"> 
				<div class="col-md-4"> 
					<label><b>Mot de passe:</b></label>
				</div> 
				<div class="col-md-8"> 
					<input class="form-control"  type="password" name="mdp"/> 
				</div> 
			</div> 
				 
			<div class="row"> 
				<div class="col-md-4"> 
					<label><b>Confirmation du mot de password:</b></label>
				</div> 
				<div class="col-md-8"> 
					<input class="form-control"  type="password" name="mdp2"/>
				</div>
			</div> 
			<div class="row">  
				<div class="col-md-4">
					<label><b>Date de naissance:</b></label>   
				</div>
				<div class="col-md-8"> 
					<input class="form-control" id="datepicker">  
				</div> 
			</div> 
		</div> 
		</div>
	</body>
</html> 