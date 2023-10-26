<!DOCTYPE html>
<html lang=en>

<head>
    <title>Login</title>
    <link rel="stylesheet" type="text/css" href="../index-CSS.css">
    <meta charset="UTF-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

    <?php

require('config.php');
error_reporting(0);
 

 
// If upload button is clicked ...
if (isset($_POST['upload'])) {
 
    $photo = $_FILES["uploadfile"]["name"];
    $tempname = $_FILES["uploadfile"]["tmp_name"];
    $folder = "./assets/img/" . $photo;
if (move_uploaded_file($tempname, $folder)) {
    echo "<h3>Image uploaded successfully!</h3>";
} else {
    echo "<h3>Failed to upload image!</h3>";
}
 
    // Get all the submitted data from the form
    $sql = "INSERT INTO personn (`name`,`firstname`,`numero`,`email`,`adresse`,`niveau`,`fonction`,`mdp`,`photo`) VALUES 
    ('$name','$firstname','$numero','$email','$adresse','$niveau','$fonction','$mdp','$photo')";
 
    // Execute query
    mysqli_query($db, $sql);
 
    // Now let's move the uploaded image into the folder: image
    if (move_uploaded_file($tempname, $folder)) {
        echo "<h3>  Image uploaded successfully!</h3>";
    } else {
        echo "<h3>  Failed to upload image!</h3>";
    }
}
?>
</head>

<body>
    <div class="container-fluid">        
        <div id="formu">
<!--Appel de la fonction fermeture fenetre-->
            <button onclick="closeinscription()" type="file" class="btn-close" aria-label="Close"></button>
            <h2>INSCRIPTION</h2>
            <h6><i>Inscrire l'élève</i></h6>
<!--Input-->
            <form method="POST" action="../inscriptioneleve.php" enctype="multipart/form-data">
            
                <div><label for="photo" type="file" name="uploadfile" value="">Photo:</label></br>
                    <input type="file" placeholder="photo">
                <div><label for="name">Nom:</label></br>
                    <div id="display-image">
                       
                        </div>
                    <input type="text" placeholder="name" required name="name">
                </div>
                <div><label for="firstname">Prénom:</label></br>
                    <input type="text" placeholder="firstname" required name="firstname">
                </div>
                <div><label for="numero">TEL:</label></br>
                    <input type="text" placeholder="numero" required name="numero">
                </div>
                <div><label for="text">Adresse:</label></br>
                    <input type="text" placeholder="adresse" required name="adresse">
                </div>
                <div><label for="email">email "ecole.com":</label></br>
                    <input type="email" placeholder="Email"  name="email" pattern=".+@ecole\.com" required>
                </div></br>
                <div><label for="niveau">Choisissez un niveau :</label>
                    <select name="niveau" id="niveau">
                      <option value="cm1">CM1</option>
                      <option value="cm2">CM2</option>
                    </select></div></br>   
<!--Input automatique-->
                    <input name="fonction" type="hidden" value="eleve">  
                    <input name="mdp" type="hidden" value="00000000"> 
            <div>                      
                <button type="submit" value="submit" class="btn btn-secondary">envoyer</button>
            </div></br>
            </form>
        </div>
<!--Fonction fermeture fenetre-->
        <script>
			function closeinscription() {
				var url = '../inscription.html';
				var windowFeatures = 'height=532px,width=250px,toolbar=no,location=no,status=no,menubar=no,scrollbars=no,resizable=no';
				window.close(url, '_blank', windowFeatures);
			}
		</script>
    </body>
</html>