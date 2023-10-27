
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Login</title>
    <link rel="stylesheet" type="text/css" href="./index-CSS.css">
    <script type="text/javascript" src=""></script>
    <meta charset="UTF-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</head>

<body>

    <div class="container-fluid">
        <div id="formu">
            <h2>LOGINN</h2>
            <h6><i>Se connecter</i></h6>
            <form method="POST" action='auth.php'>
                <div><label for="email">email "Gmail.com":</label></br>
                    <input type="email" placeholder="Email" name="email" pattern=".+@gmail\.com" required>
                </div>
                <div><label for="password">Password:</label></br>
                    <input type="password" placeholder="Password" required name="password" minlength="8">
                </div>
                <div><button type="submit" value="submit">envoyer</button></div>
            </form>
        </div> 
</body>
</html>
