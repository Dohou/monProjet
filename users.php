<?php include('connection.php');
	
  $msg="";
  if (isset($_POST['btnValider'])){
    if (move_uploaded_file($_FILES['image']['tmp_name'], 'upload/'.$_FILES['image']['name'])) { 
      $sql= "INSERT INTO articles
       (titre,description, image, resumé, id_categories, id_users)
       VALUES ('".$_POST['titre']."',
            '".$_POST['description']."',
            '".$_POST['image']['name']."',
            '".$_FILES['resumé']."',
            '".$_POST['id_categories']."',
            '".$_POST['id_users']."')";
      $result=mysqli_query($link,$sql);
      if ($result) {
        $msg='Insertion reussie';
      }else{
        $msg=mysqli_error($link);
      }
    }
  }


 ?>
<!DOCTYPE html>
<html>
<head>
	<title>User</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="css/styles.css">
</head>
<body>
	<div class="container">
    <div class="md-6">
      <a href="acceuil.php" alt="page d'accueil"><img src="img/pagne7.png" height="50px" width="50px"></a>
    </div>
   <div class="row">
    <nav class="navbar navbar-header navbar-default navbar-right" role="navigation">
     <div class="container-fluid">
      <ul class="nav navbar-nav">
       <li>
        <a href="articles.php">article</a>
       </li>
       <li>
        <a href="categories.php">categories</a>
       </li>
       <li>
        <a href="users.php">users</a>
       </li>  
      </ul>
     </div> 
    </nav>
    <br>
    <div class="row">
      
      <br>
    <form action="" method="POST" role="form">
          <h1 style="font-size: 30px">Enregistrez-vous</h1>
          <br>
         <div class="form-group">
            <label for="">Email</label>
            <input type="text" name="libelle" class="form-control" id="" placeholder="">
         </div>

          <div class="form-group">
            <label for="">Mot de Passe</label>
            <input type="text" name="description" class="form-control" id="" placeholder="">
        </div>
           <div class="form-group">
            <label for="">Nom</label>
            <input type="text" name="libelle" class="form-control" id="" placeholder="">
         </div>

          <div class="form-group">
            <label for="">Prenoms</label>
            <input type="text" name="description" class="form-control" id="" placeholder="">
        </div>

          <button name="btnEnregistrer" type="submit" class="btn btn-primary btn-lg btn-block">Enregistrer</button>
        </form>
        <br>
        <div class="row">
				<table class="table">
					<thead>
						<tr>
							
							<th>Email</th>
							<th>Mot de Passe</th>
							<th>Nom</th>
							<th>Prenoms</th>
              <th>Action</th>



						</tr>
					</thead>
					<tbody>
		<?php 
          $n=1;
          $list= "SELECT * FROM user";
          $res= mysqli_query($link,$list);
          while ($data = mysqli_fetch_array($res)) {
         ?>
				<tr>
              <td> <?php echo $n; ?> </td>
              <td><?php echo $data['email']; ?></td>
              <td><?php echo $data['mot de passe']; ?></td>
              <td><?php echo $data['nom']; ?></td>
              <td><?php echo $data['prenoms']; ?></td>
              <td>
             <a href="?id= <?php echo $data['id']; ?>">Modifier</a>
             <a href="?id= <?php echo $data['id']; ?>">Supprimer</a>
           </td>
         </tr>
				 
				 
		<?php 
            $n++;
          }
          ?>
	</tbody>
				</table>
			</div>
        
</body>
</html>