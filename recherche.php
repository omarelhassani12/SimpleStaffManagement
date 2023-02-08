<?php 
include_once "./connexion.php";
?>
<?php
	$nom=$_POST['nom'];
?>
<?php
        $res = $db->query("select * from carnet where nom = '$nom'");
        $res->execute();
        if(isset($res) != 0){
        
        
        
?> 
   <html>
  <head>
    <link rel="stylesheet" href="./style.css">
    </head>
    <body>
        
        <?php while($data = $res->fetch()): ?>
            <form class="f5">
                
        <hr>        
        <p style="color: green;">le contact a été retrouvé</p> 
        <div><label>Nom : </label><?= $data['nom'] ?></div><br>
        <div><label>Prenom : </label><?= $data[1] ?></div><br>
        <div><label>Adresse : </label><?= $data[2] ?></div><br>
        <div><label>Code Postal : </label><?= $data[3] ?></div><br>
        <div><label>Tél : </label><?= $data[4] ?></div><br><br>
        <?php endwhile; }else  ?>
        <div style="color:red ;"><?= "Aucun contact ne correspond a ce nom"; ?></div>
    <a href="./recherche.html">Retour</a>
    </form>

    </body>
    </html>
