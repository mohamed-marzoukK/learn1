<?php 
require_once('Controles.php');
$us1=new Controles();


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bootstrap Styled Form</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>

<div class="container mt-5">
    <form name="form1" method="post" action="insertion.php">

        <div class="mb-3">
            <label for="nom" class="form-label">Nom</label>
            <input type="text" class="form-control" name="nom"oninput="Verifnum(this.value)" required/>
        </div>

        <div class="mb-3">
            <label for="matiere" class="form-label">Matiere</label>
            <input type="text" class="form-control" name="matiere" required/>
        </div>

        <div class="mb-3">
            <label for="prix" class="form-label">Prix</label>
            <input type="number" class="form-control" name="prix"  required/>
        </div>

        <div class="mb-3">
            <label for="couleur" class="form-label">Couleur</label>
            <input type="text" class="form-control" name="couleur" required/>
        </div>

        <div class="mb-3">
            <label for="dateFabrication" class="form-label">Date de Fabrication</label>
            <input type="date" class="form-control" name="dateFabrication" required/>
        </div>
 
        <button type="submit" class="btn btn-primary" name="submit">Ajouter</button>
    </form>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>
