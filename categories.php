<?php include('connection.php');
  
 $msg="";
   if (isset($_POST['btnValider'])) {
     $sql="INSERT INTO categorie (libelle)
     VALUES ('".$_POST['libelle']."')";
     $result=mysqli_query($link,$sql);
     if($result) {
        $msg='Insertion reussie';
        }else{
        $msg=mysqli_error($link);
      }
   
 }
  ?>
<!DOCTYPE html>
<html lang="">
<head>
<title>categorie</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="css/styles.css">
</head>
<body>
  <div class="container">
      <div class="col-md-6">
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
      <div class="col-md-8">
        <form action="" method="POST" role="form">
          <h1>Formulaire de categorie</h1>
          <br>
          <span> <?php echo $msg; ?> </span>

          <div class="form-group">
            <label for="">Libelle</label>
            <br>
            <input type="text" name="libelle" class="form-control" id="" placeholder="Entrer le libelle">
            <br>
           </div>
          <button name="btnEnregistrer" type="submit" class="btn btn-primary btn-lg btn-block">Enregistrer</button>
          <br>
        </form>
        
      </div>
      <div class="col-md-2"></div>
      
    </div>
    <br>
    <div class="row">
      <table class="table">
        <thead>
          <tr>
            <th>libelle</th>
            <th>action</th>
          </tr>
        </thead>
        <tbody>
         <?php 
          $n=1;
          $list= "SELECT * FROM categorie";
          $res= mysqli_query($link,$list);
   while ($data = mysqli_fetch_array($res)){


            ?>
           <tr>
              <td><?php echo $n; ?> </td>
              <td><?php echo $data['libelle']; ?></td>
              <td>
                <a href="?modif_id=<?php echo $data['id']; ?>">Modifier</a>
                <a href="?sup=<?php echo $data['id']; ?>">Supprimer</a>
              </td>
            </tr>
            <?php 
            $n++;
          }
          ?>

        </tbody>
      </table>
      
    </div>
  </div>
  <a href="users.php">voir user</a>
        

      
      
      <script type="text/javascript" src="js/jquery-3.2.1.min.js"></script>
  
      
    
    
</body>
</html>