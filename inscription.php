<?php include('connection.php')
?>
<!DOCTYPE html>
<html>
<head>
	<title>INSCRIPTION</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
</head>
<body>
  <div class="container">
  	<div class="row">

  		<div></div>

  		<div class="col-md-3">

  			<form action="" method="POST" role="form">

  				<div class="form-group">
  					<label for="">Email*</label>
  					<input type="email" name="email" class="form-control" id="" placeholder="Exemple@email.com" required>
  					
  				</div>
  				<br>
  				<div class="form-group">
  					<label for="">Mot de passe</label>
  					<input type="password" name="mdp" class="form-control" id="" placeholder="saisissez votre mot de passe">
  					
  				</div>
  				<br>
  				<div class="form-group">
  					<label for="">Nom</label>
  					<input type="text" name="nom" class="form-control" id="" placeholder="entrer votre nom">
  					
  				</div>
  				<br>
  				<div class="form-group">
  					<label for="">Prenoms</label>
  					<input type="text" name="mot de passe" class="form-control" id="" placeholder="entrer votre prenom">
  					
  				</div>
  				<br>
  				<button type="submit" class="btn btn-primary" name="btnValider">
  				   Valider
  				</button>

  				<?php 
                 if (isset($_POST['btnValider'])) {

                 	$sql="SELECT * FROM user WHERE email='".mysqli_real_escape_string($link,$_POST['email'])."'";
                 	$req= mysqli_query($link,$sql);
                 	if (mysqli_num_rows($req)>0) {
                 		echo "email existe";
                 	}else{

                 	}


                  $sql= "INSERT INTO user ( email, mot de passe, nom, prenoms) 

                	VALUES ('".mysqli_real_escape_string($link,$_POST['email'])."',
                         '".mysqli_real_escape_string($link, md5($_POST['mdp']))."',
                         '".mysqli_real_escape_string($link,$_POST['nom'])."',
                         '".mysqli_real_escape_string($link, $_POST['prenoms'])."')";
            $res=mysqli_query($link,$sql);
            if ($res) {
            	echo "insertion reussie";
            }else{
            	$msg=mysqli_error($link);
            }
             }

  				 ?>
  			</form>
  		</div>

  		<div></div>
  		
  	</div>
  	
  </div>
</body>
</html>