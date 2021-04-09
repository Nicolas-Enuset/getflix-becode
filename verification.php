<?php
//on inclue le fichier qui contient nom_de_serveur, nom_bdd, pseudo et password d'accès à la bdd mysql
include ("connect.php");
//on vérifie que le visiteur a correctement envoyé le formulaire
if (isset($_POST['inscription']) && $_POST['inscription'] == 'Inscription') {
//on teste l'existence des variables et on vérifie qu'elle ne sont pas vides
if ((isset($_POST['pseudo']) && !empty($_POST['pseudo'])) && (isset($_POST['mdp']) && !empty($_POST['mdp'])) 
   && (isset($_POST['mdpconf']) && !empty($_POST['mdpconf']))) {
//si les variables existent, on vérifie que les deux mots de passe sont différents
if ($_POST['mdp'] != $_POST['mdpconf']) {
$erreur = 'Les 2 password sont differents.';echo $erreur; 
echo"<br/><a href=\"accueil.php\">Accueil</a>";exit();}
else {	
//si les deux mots de passe sont identiques, on se connecte à la bdd
$connexion = mysql_connect (localhost, root, root);    
if (!$connexion) {echo "LA CONNEXION AU SERVEUR MYSQL A ECHOUE\n"; exit();}
mysql_select_db (BDD); print "Connexion BDD reussie puis";echo "<br/>"; 
// on parcourt la bdd et on range les éventuels pseudo identiques existants dans un tableau
$sql = 'SELECT count(*) FROM membres WHERE id="'.mysql_escape_string($_POST['pseudo']).'"';
$req = mysql_query($sql) or die('Erreur SQL !<br/>'.$sql.'<br/>'.mysql_error());
$data = mysql_fetch_array($req);
//si aucun autre pseudo identique existe, on inscrit ce nouveau pseudo
if ($data[0] == 0) {
$sql = 'INSERT INTO membres VALUES("","'.mysql_escape_string($_POST['pseudo']).'", 
"'.mysql_escape_string(md5($_POST['mdp'])).'")';
mysql_query($sql) or die('Erreur SQL !'.$sql.'<br />'.mysql_error());
$erreur = 'inscription reussie !';
echo $erreur;
echo"<br/><a href=\"login.php\">Accueil</a>";exit();}
//sinon on n'inscrit pas ce pseudo
else {
$erreur = 'Echec de l\'inscription !<br/>Un membre possede deja ce pseudo !';
echo $erreur; 
echo"<br/><a href=\"login.php\">Accueil</a>";exit();
}}}
//Si au moins un des champs est vide
else {
$erreur = 'Echec de l\'inscription !<br/>Au moins un des champs est vide !';
echo $erreur; 
echo"<br/><a href=\"login.php\">Accueil</a>";exit();
}}
if(mysql_query($connexion, $sql)){ 
      echo "<h3>Data sent! Thanks</h3>";
      header("location:mainPage.php");
  } else{ 
      echo "ERROR: Hush! Sorry $sql. " 
          . mysql_error($conn); 
  }
  ?>

