<?php 
include_once "./connexion.php";
?>
<?php
	// $nom=$_POST['nom'];
    // $prenom=$_POST['prenom'];
	// $Adresse=$_POST['adresse'];
	// $code=$_POST['code'];
    // $tele=$_POST['tele'];
?>
<?php
        $res = $db->query("select * from carnet");
        $res->execute();
            // while($data = $res->fetch()):
        
        
?> 
   <html>
  <head>
    <link rel="stylesheet" href="./style.css">
    </head>
    <body>
    <form class="f6">
 
        <p>la liste des contact </p> 
        <?php 
        while($data = $res->fetch()):
        ?>
        <hr>
        <div><label>Nom : </label><?= $data['0'] ?></div><br>
        <div><label>Prenom : </label><?= $data[1] ?></div><br>
        <div><label>Adresse : </label><?= $data[2] ?></div><br>
        <div><label>Code Postal : </label><?= $data[3] ?></div><br>
        <div><label>Tél : </label><?= $data[4] ?></div><br><br>
        <hr>
        <?php endwhile;  ?>
    </form>

    </body>
    </html>
