<?php include('connection.php');
 
  $msg="";
  if (isset($_POST['btnValider'])){
    if (move_uploaded_file($_FILES['image']['tmp_name'], 'upload/'.$_FILES['image']['name'])) { 
      $sql= "INSERT INTO articles
       (titre,description, image, resumé, id_categories, id_users)
       VALUES ('".mysquli_real_escape_string($link,$_POST['titre'])."',
            '".mysquli_real_escape_string($link,$_POST['description'])."',
            '".musqli_real_escape_string($link,$_FILES['image']['name'])."',
            '".mysquli_real_escape_string($link,$_POST['resume'])."',
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
<html lang="">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>article</title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="css/styles.css">
  </head>
  <body>
    <div class="container">
      <div class="md-6">

        <a href="acceuil.php" alt="page d'accueil"><img src="img/pagne7.png" width="50px" height="50px"></a>

      </div>

      <div class="row">

        <nav class="navbar navbar-header navbar-default navbar-right" role="navigation">
     <div class="container-fluid">
      <ul class="nav navbar-nav">
       <li>
        <a href="article.php">article</a>
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

      </div>
      <br>
      <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-8">

          <form action="" method="POST" role="form" enctype="multipart/form-data">
            <h1>Formulaire d'articles</h1>
            <br>
            
          
            <div class="form-group">
              <label for="">Titre</label>
              <input name="titre" type="text" class="form-control" id="" placeholder="Entrer le titre">
            </div>

            <div class="form-group">
              <label for="">description</label>
              <input name="description" type="text" class="form-control" id="" placeholder="description">
            </div>
            <div class="form-group">
              <label for="">image</label>
              <input name="image" type="file" class="form-control" id="" placeholder="image">
            </div>
            <div class="form-group">
              <label for="">resumé</label>
              <input name="resumé" type="text" class="form-control" id="" placeholder="">
            </div>
            
              
          <?php
          $sqlcategorie="SELECT * FROM categorie";
          $repcategorie=mysqli_query($link,$sqlcategorie);
          while ($datacategorie=mysqli_fetch_array($repcategorie)) {
            ?>
            <option value="<?php echo $datacat['id'];?>">
            <?php echo $datacat['id'].'-'.$datacat['libelle']; ?>
              
            </option>

          <?php
          }
          ?>
                
              
            </div>
            <button name="Commenter" type="submit" class="btn btn-primary btn-lg btn-block">Ajouter</button>
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
            </tr>
          </thead>
          <tbody>
            <?php 
              $n=1;
              $list=" SELECT 
                    titre,
                    description,
                    image,
                    resumé,
                    article.description,
                    libelle,
                  FROM article
                  INNER JOIN categorie
                  ON categorie.id = article.id_categorie";
              $result= mysqli_query($link,$list);
    while ($data = mysqli_fetch_array($result)) {

            ?>
            <tr>
              <td> <?php echo $n; ?> </td>
              <td><?php echo $data['titre']; ?></td>
              <td><?php echo $data['description']; ?></td>
              <td><?php echo $data['image']; ?></td>
              <td><?php echo $data['resumé']; ?></td>
              <td><img src="upload/<?php echo $data['image'];  ?>" width="30px" height="30px" alt=""></td>
              <td><?php echo $data['libelle']; ?></td>
              <td></td>
            </tr>
            <?php $n++;
            } ?>
          </tbody>
        </table>

      </div>
      

    </div>
    
<script type="text/javascript" src="js/jquery-3.2.1.min.js"></script>
  </body>
</html>


    


    
