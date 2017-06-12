<html>
    <head>
        <meta charset="UTF-8">
        <title>Logovanje</title>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
        <!-- Optional theme -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
    </head>
    
    <body>
        <?php
    session_start();
    include("functions.php");

    if(isset($_POST['submit'])){
        $username = $conn->real_escape_string($_POST['username']);
        $password = $_POST['password'];
        
        if(!empty($username) && !empty($password)) {
            if(proveriKorisnika($username,$password)) {
                $_SESSION['username'] = $username;
            } else {
                echo "Pogresan username ili password";
            }
        } else {
            echo "Niste uneli sve podatke";
        }
    }
    if(isset($_SESSION['username'])){
        $_SESSION['loggedin']=true;
        echo "Logovan si kao: ".$_SESSION['username'];
        header("Location: ../index.php");
    }
?>
    <div class="container">
        <h2>Logovanje</h2>
        <br>
        <form action="login.php" method="POST">
        <div class="form-group">
             <label for="username">Username: </label>
             <input type="text" name="username" class="form-control"/><br/>
        </div>

        <div class="form-group">
             <label for="password">Password: </label>
             <input type="password" name="password" class="form-control"/><br/>
        </div>
        <button type="submit" class="btn btn-default" name="submit">Login</button>
        <br>
        <br>
        <span>Nemate nalog? </span> <a href="register.php">Registrujte se</a>
        </form>
        <p><a href="../index.php">Nazad na početni meni</a></p>

    </div>
    
    </body>
</html>


