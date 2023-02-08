<?php session_start(); ?>
<?php
            $msg = '';
            
            if (isset($_POST['submit'])) {
               if ($_POST['login'] == 'Admin' && $_POST['password'] == 'AdminRoot') {
                  header('location: ./Ajout.html');
               }else {
                  $msg = 'Wrong username or password';
                  header('location: ./index.php');
               }
            }
         ?>
<html>
<head>
	<title></title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
	<form method="POST" action="./Ajout.html" class="f1">
        <div>
		<label>Login :</label><input type="text" name="login" required>
		</div>
        <div>
        <label>mot de passe :</label><input type="password" name="password" required>
        </div>
        <div>
		<button name="submit" type="submit">Envoyer</button>
        </div>
	</form>
</body>
</html>
