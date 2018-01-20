
<?php 
  $host="localhost";
  $user="root";
  $mdp="";
  $db="db_blog";
  $link=mysqli_connect($host,$user,$mdp);
  mysqli_select_db($link,$db);
	$msg="";
	if (isset($_POST['btnValider'])){
		if (move_uploaded_file($_FILES['image']['tmp_name'], 'upload/'.$_FILES['image']['name'])) {
			$sql= "INSERT INTO articles
			 (titre,description, image, resume, id_categories, id_users)
			 VALUES ('".$_POST['titre']."',
			 		  '".$_POST['description']."',
			 		  '".$_FILES['image']['name']."',
			 		  '".$_POST['resume']."',
			 		  '".$_POST['categories']."',
			 		  '".$_POST['users']."')";
			$result=mysqli_query($link, $sql);
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
		<title>Articles</title>

		<link rel="stylesheet" href="css/bootstrap.css" >
</head>
<body>
		<div class="container">

			<div class="row">
				<div class="col-md-2"></div>
				<div class="col-md-8">

					<form action="" method="POST" role="form" enctype="multipart/form-data">
						<legend>Formulaire Des Articles </legend>
						<span> <?php echo $msg; ?> </span>
					
						<div class="form-group">
							<label for="">Titre</label>
							<input name="titre" type="text" class="form-control" id="" placeholder="Entrer le titre">
						</div>

						<div class="form-group">
							<label for="">Description</label>
							<input name="description" type="text" class="form-control" id="" placeholder="Description">
						</div>
						<div class="form-group">
							<label for="">Image</label>
							<input name="image" type="file" class="form-control" id="" placeholder="Image">
						</div>
						<div class="form-group">
							<label for="">Resume</label>
							<input name="resume" type="text" class="form-control" id="" placeholder="Resume">
						</div>
						<div class="form-group">
							<label for="">Categories</label>
							<select name="categories" class="form-control">
					<?php
					$sqlcategorie="SELECT * FROM categories";
					$repcategorie=mysqli_query($link,$sqlcategorie);
					while ($datacat=mysqli_fetch_array($repcategorie)) {
						?>
						<option value="<?php echo $datacat['id'];?>">
						<?php echo $datacat['id'].'-'.$datacat['libelle'];?>
							
						</option>

						<?php
					}
					?>
								
							</select>
						</div>
						<button name="btnValider" type="submit" class="btn btn-primary btn-lg btn-block">Valider</button>
					</form>
				</div>
				<div class="col-md-2"></div>
			</div>
<br>
			<div class="row">
				<table class="table">
					<thead>
						<tr>
							<th>Titre</th>
							<th>Description</th>
							<th>Image</th>
							<th>Resume</th>
							<th>Categories</th>
							<th>Users</th>
							<th>Action</th>
						</tr>
					</thead>
					<tbody>
						<?php 
							$n=1;
							$list=" SELECT 
										titre,
										articles.description,
										image,
										resume,
										libelle
									FROM articles
									INNER JOIN categories
									ON categories.id = articles.id_categories";
							$res= mysqli_query($link,$list);
	while ($data = mysqli_fetch_array($res)){
								
							
						 ?>
						<tr>
							<td> <?php echo $n; ?> </td>
							<td><?php echo $data['titre']; ?></td>
							<td><?php echo $data['description']; ?></td>
							<td><img src="upload/<?php echo $data['image'];  ?>" width="30px" height="30px" alt=""></td>
							<td><?php echo $data['resume']; ?></td>
							<td><?php echo $data['libelle']; ?></td>
							<td></td>
						</tr>
						<?php $n++;
						 } ?>
					</tbody>
				</table>

			</div>
		</div>
		<script src=""></script>
		<script src=""></script>
 		<script src="Hello World"></script>
</body>
</html>