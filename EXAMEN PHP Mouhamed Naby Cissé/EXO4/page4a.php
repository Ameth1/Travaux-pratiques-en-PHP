<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>
<body style="font-size: 50px:;">
    <?php if (isset($_GET["Valider"])){ ?>
    <p>Les données saisies sont:</p>
    <div>
        Votre matricule est <?php echo $_GET["matricule"];?>
    </div>
    <div>
        Vous vous nommez <?php echo $_GET["Nom"]," ",$_GET["Prenom"];?>
    </div>
    <div>
        Votre sexe est de genre <?php if( $_GET["Sexe"]=="M"){ echo "masculin";}else{ echo "Feminin";} ?>
    </div>
    <div>
        Votre adresse est <?php echo $_GET["Adresse"];?>
    </div>
    <div>
        Votre service <?php echo $_GET["Service"];?>
    </div>
    <div> 
        Vous occupez la fonction de <?php echo $_GET["Fonction"];?>
    </div>
    <?php }else{ ?>
        <div>Veuillez saisir vos <a href="page4.php">coordonnées</a></div>
    <?php } ?>
</body>
</html>