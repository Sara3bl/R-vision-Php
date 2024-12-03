<?php
  
  
  /* exerice1
  
   $Etudiant=[
    
    'nom'=>'Bellaly',
    'prénom'=>'sara',
    'matricule'=>'bk54987' 
    ];
    echo "NOM :"  . $Etudiant ['nom'] . "</br>" ;
    echo "Prenom : "  . $Etudiant ['prénom'] . "</br>";
    echo "Matricule : "  . $Etudiant ['matricule'];
    */


    /* EXERCICE 2 
    echo "NOTE : "  . $Etudiant ['note'] = 20 . "</br>";
    echo "NOTE APRES MODIFICATION: "  . $Etudiant ['note'] = 17 . "</br>";
    */

    
    /*Exercice 3
    $Produit = [
        'Produit 1' => 157,
        'Produit 2' => 478,
        'Produit 3' => 75,
    ];
    
    // Utilisation de foreach pour parcourir et afficher les produits
    foreach ($Produit as $nom => $prix) {
        echo "$nom : $prix</br>";
    }
   
    */
    /* EXERCICE4
$Scores=[
    'score 1'=>1,
    'score 2'=>2,
    'score 3'=>3,
    'score 4'=>4,
    'score 5'=>5
];
$somme=array_sum($Scores);
$moyenne=$somme/count($Scores);
echo " La moyenne est : " .$moyenne ;
*/

/*Exercice 5
$Pays=[
    'Maroc'=>1487555,
    'France'=>574256,
    'Japon'=>7485125
];
arsort($Pays);
foreach($Pays as $pays => $valeurs)
{
    echo  "$pays : $valeurs </br>  ";
}
    
    */
    /*Exercice 6
    if ($_SERVER["REQUEST_METHOD"] == "POST") 
    {
        $nom=$_Post ['nom'];
        $age=$_Post ['age'];
        echo " Bienvenu  $nom votre age est $age : ";
    }

    */ 
    /*exercice 7
    if ($_SERVER["REQUEST_METHOD"] == "POST") 
    { 
        $nom=$_Post ['nom'];
        $age=$_Post ['age'];
    
    }
    if (filter_var($age, FILTER_VALIDATE_INT) === false)
    
        {
            echo "L'age doit etre un entier";
          } 
          elseif ($age <= 0) {
            echo "L'age doit etre superieur a 0";
          } 
          else {
            echo "L'age est valide.";
          }
    
*/

/* exercice 8

if ($_SERVER["REQUEST_METHOD"] == "POST") {
 
    $couleur = $_POST['couleur'];
    echo "Votre couleur préférée est : $couleur";
}
    */


    /* exercice 9
    if (isset($_GET['nombre1']) && isset($_GET['nombre2'])) {
        /
        $nombre1 = $_GET['nombre1'];
        $nombre2 = $_GET['nombre2'];
        
        $somme = $nombre1 + $nombre2;

        echo "La somme de $nombre1 et $nombre2 est : $somme";
    }
        */
/*Exercice 10
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            
            $choix = $_POST['typeCompte'];
        
            if ($choix == "administrateur") {
                echo "Bienvenue, administrateur !";
            } else {
                echo "Bienvenue, utilisateur simple !";
            }
        }
            */

    ?>
    
    <!DOCTYPE html>
    <html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Formulaire Nom et Âge</title>
    </head>
    <body>
    <!-- Exercice 6 HTML
        <h2>Formulaire</h2>
    
        <form action="votre_script.php" method="POST">
            <label for="nom">Nom :</label>
            <input type="text"  name="nom" required><br><br>
    
            <label for="age">Âge :</label>
            <input type="number" name="age" required ><br><br>
    
            <input type="submit" value="Soumettre">
        </form>
-->
<!-- exercice 8
<h2>Choisissez votre couleur préférée</h2>

<form action="formulaire.php" method="POST">
    <label for="couleur">Couleur :</label>
    <select name="couleur" id="couleur" required>
        <option value="rouge">Rouge</option>
        <option value="vert">Vert</option>
        <option value="bleu">Bleu</option>
    </select><br><br>

    <input type="submit" value="Soumettre">
</form>
-->
<!-- exercice 9
<form action="formulaire.php" method="GET">
    <label for="nombre1">Premier nombre :</label>
    <input type="number" name="nombre1" required><br><br>

    <label for="nombre2">Deuxième nombre :</label>
    <input type="number" name="nombre2" required><br><br>

    <input type="submit" value="Calculer la somme">
</form>
-->
<!--  exercice 10
<h2>Choisissez votre type de compte</h2>

<form action="formulaire.php" method="POST">
    <label for="choix">Type de compte :</label>
    <select name="choix" id="choix" required>
        <option value="administrateur">Administrateur</option>
        <option value="utilisateur">Utilisateur simple</option>
    </select><br><br>

    <input type="submit" value="Soumettre">
</form>
    -->

    </body>
    </html>
    
    
    
    
    
 

    
    