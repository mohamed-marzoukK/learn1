<?php require_once('classes/Jouet.php');
require_once('classes/Controles.php');
$us=new Jouet();
$row=$us-> listuser_id($_GET['id']);
$us1=new Controles();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <title>Document</title>
</head>
<body >
  <div class="container mt-5">
        <form name="f1" method="post" action="modification.php">
            <input type="hidden" name="id" value="<?php echo $_GET['id']; ?>" />
            
            <div class="mb-3">
                <label for="nom" class="form-label">Nom</label>
                <input type="text" class="form-control" name="nom" value="<?php echo $row[1]; ?>" oninput="$us1-> Verifalph(this.value)"  />
            </div>
            
            <div class="mb-3">
                <label for="matiere" class="form-label">Matiere</label>
                <input type="text" class="form-control" name="matiere" value="<?php echo $row[2]; ?>" />
            </div>
            
            <div class="mb-3">
                <label for="prix" class="form-label">Prix</label>
                <input type="text" class="form-control" name="prix" value="<?php echo $row[3]; ?>" />
            </div>
            
            <div class="mb-3">
                <label for="couleur" class="form-label">Couleur</label>
                <input type="text" class="form-control" name="couleur" value="<?php echo $row[4]; ?>" />
            </div>
            
            <div class="mb-3">
                <label for="dateFabrication" class="form-label">Date de Fabrication</label>
                <input type="text" class="form-control" name="dateFabrication" value="<?php echo $row[5]; ?>" />
            </div>

            <button type="submit" class="btn btn-primary" name="submit">Modifier</button>
        </form>
    </div></body>
</html>

