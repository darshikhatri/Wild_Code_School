<!-- 
Développeuse: Darshi Khatri
Date: 11/08/2020
Description:
Extraire la connexion à la base de données et enregistrer le nom après avoir cliqué sur Envoyer-->
<?php
include('connection.php');
extract($_REQUEST);
if(isset($save))
{
	
	
	mysqli_query($conn,"insert into argonautes_nom_details 
		values('','$name')");
		
		
	
	
}
?>
<!-- Header section -->
<header>
	<head>
<link rel="stylesheet" href="assets/css/style.css">
	</head>
	<h1>
    <img src="assets/images/wcslogo.png" alt="Wild Code School logo" />
    Les Argonautes
	</h1>
</header>

<!-- Main section -->
<main>
  
  <!-- New member form -->
  <h2>Ajouter un(e) Argonaute</h2>
  <form class="new-member-form" method="post">
    <label for="name">Nom de l&apos;Argonaute</label>
    <input id="name" name="name" type="text" placeholder="Charalampos" />
    <button type="submit" name="save" value="savedata">Envoyer</button>
  </form>
  
  <!-- Member list -->
  <h2>Membres de l'équipage</h2>
  <section class="member-list">
 <!-- 
Développeuse: Darshi Khatri
Date: 11/08/2020
Description: 
Sélectionnez les détails de la table argonautes_nom_details et affichez la liste des membres au format défini
disposant les noms des argonautes sur trois colonnes au lieu d'une seule -->
  <?php
  
	
	$query="SELECT * FROM argonautes_nom_details";
	
	$nom_list=mysqli_query($conn,$query);
	$dyn_table="<table border='1' cellpadding='10' align='center'>";
	$i=0;
	while($res=mysqli_fetch_array($nom_list))
		
	{
		$arg_nom =$res['arg_nom'];
		if($i%3==0){
			$dyn_table.="<tr><td>".$arg_nom."</td>";
		}
		else{
		$dyn_table.="<td>".$arg_nom."</td>";
		}
		$i++;
		
	}
	$dyn_table.="</tr></table>";
	echo $dyn_table;
  ?>
  
 
  
    <!--<div class="member-item">Eleftheria</div>
    <div class="member-item">Gennadios</div>
    <div class="member-item">Lysimachos</div>-->
  </section>
</main>

<footer>
  <p>Réalisé par Jason en Anthestérion de l'an 515 avant JC</p>
</footer>