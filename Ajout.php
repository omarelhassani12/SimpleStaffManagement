<?php 
include_once "./connexion.php";
?>
<?php
	$nom=$_POST['nom'];
	$prenom=$_POST['prenom'];
	$Adresse=$_POST['adresse'];
	$code=$_POST['code'];
        $tele=$_POST['tele'];
?>
<?php
if( !empty($_POST['nom']) && !empty($_POST['prenom']) && !empty($_POST['tele'])   ){
        $req = $db->prepare("insert into carnet values('$nom','$prenom','$Adresse','$code','$tele')");
        $req->execute();
?>
  <html>
  <head>
    <link rel="stylesheet" href="style.css">
    </head>
    <body>
    <form class="f3">
    <div><label>Nom : </label><?= $nom ;?></div><br>
    <div><label>Prenom : </label><?= $prenom ;?></div><br>
    <div><label>Adresse : </label><?= $Adresse ;?></div><br>
    <div><label>Code Postal : </label><?= $code ;?></div><br>
    <div><label>Tél : </label><?= $tele ;?></div><br>
    <?php 
       }else{
        echo 'Entrez tous les champs obligatoires ';
       }
        ?>
        <p style="color: green;">A été ajouter dans le carent d'adresse</p> 
        <br>
        <a href="./Ajout.html">Retour</a>
        </form>
    </body>
    </html>