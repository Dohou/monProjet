<?php include('connexion1.php');
	$msg="";
	if (isset($_POST['btnValider'])){
		$sql= "INSERT INTO articles (prix,stock,image,description) VALUES ('".$_POST['prix']."','".$_POST['stock']."','".$_POST['image']."','".$_POST['description']."','".$_POST['id_cartegories']."')";
		$result=mysqli_query($link	,$sql);
		if ($result) {
			$msg='Insertion reussie';
		}else{
			$msg=mysqli_error($link);
		}
	}
 ?>
 <!DOCTYPE html>
<html lang="">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Admin</title>


		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="css/bootstrap.css" >

		<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
			<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.2/html5shiv.min.js"></script>
			<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
		<![endif]-->
	</head>
	<body>
		<div class="container">

			<div class="row">
				<div class="col-md-2"></div>
				<div class="col-md-8">

					<form action="" method="POST" role="form">
						<legend>Formulaire D'articles</legend>
						<span> <?php echo $msg; ?> </span>
					
						<div class="form-group">
							<label for="">titre</label>
							<input name="titre" type="text" class="form-control" id="" placeholder="Entrer le titre">
						</div>

						<div class="form-group">
							<label for="">prix</label>
							<input name="prix" type="text" class="form-control" id="" placeholder="entrer le prix">
                            </div>                   
                             <div class="form-group">
                              <label for="">stok</label>
						       <input name="stok" type="text" class="form-control" id="" placeholder="entrer le stock">
							   </div> 
                               <div clas="form-group"> 
                                <label for="">image</label>
                                 
							     </div>
                                 <div class="form-group">
							<label for="">description</label>
							<input name="description" type="text" class="form-control" id="" placeholder="description">
                             </div>                  
                            <div class="form-group">
                            <label for="">id_cartegories</label>     
                            <input name="id_cartegories" type="text" class="form-control" id="" placeholder="entrer l'identifiant">
                             </div><






					--	<button name="btnValider" type="submit" class="btn btn-primary btn-lg btn-block">Valider</button>
					</form>
				</div>
				<div class="col-md-2"></div>
			</div>
<br>
			<div class="row">
				<table class="table">
					<thead>
						<tr>
							
							<th>titre</th>
							<th>prix</th>
						     <th>stock</th>
							<th>image</th>
							<th>description</th>
						    <th>id_cartegories</th>


						</tr>
					</thead>
					<tbody>
						<?php 
							$n=1;
							$list=" SELECT * FROM articles";
							$res= mysqli_query($link,$list);
	while ($data = mysqli_fetch_array($res)){
								
							
						 ?>
						<tr>
							<td> <?php echo $n; ?> </td>
							<td><?php echo $data['titre']; ?></td>
							<td><?php echo $data['prix']; ?></td>
							<td><?php echo $data['stock']; ?></td>
							<td><?php echo $data['image']; ?></td>
							<td><?php echo $data['description']; ?></td>
							<td><?php echo $data['id_cartegories'];?></td>



							<td></td>
						</tr>
						<?php $n++;
						 } ?>
					</tbody>
				</table>

			</div>
			

		</div>
		

		<!-- jQuery -->
		<script src=""></script>
		<!-- Bootstrap JavaScript -->
		<script src=""></script>
		<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
 		<script src="Hello World"></script>
	</body>
</html>

    