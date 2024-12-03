<?php


/* Exercice 1
$employes = [
    [
        'nom' => 'Sara',
        'poste' => 'Technicien',
        'salaire' => 7000
    ],
    [
        'nom' => 'Reda',
        'poste' => 'Manager',
        'salaire' => 9500
    ],
    [
        'nom' => 'Achraf',
        'poste' => 'Chef responsable',
        'salaire' => 8500
    ],
    [
        'nom' => 'Yaya',
        'poste' => 'Comptable',
        'salaire' => 5000
    ],
    [
        'nom' => 'Isma',
        'poste' => 'Comptable',
        'salaire' => 7000
    ]
];


function calculerSalaireMoyen($employes) {
    $totalSalaire = 0;
    $nombreEmployes = count($employes);

    foreach ($employes as $employe) {
        $totalSalaire += $employe['salaire'];
    }

    $salaireMoyen = $totalSalaire / $nombreEmployes;

    echo "Salaire moyen des employes: $salaireMoyen  ";
}
    */
    /* exercice 2
    if(isset($_POST['nomEmp'])){
        $nomEmp = $_POST['nomEmp'];
        foreach($employes as $employe){
            if($nomEmp === $employe['nom']){
                echo "Nom: ".$employe['nom'];
                echo "Poste: ".$employe['poste'];
                echo "Salaire: ".$employe['salaire'];
                break;
                
            }
        }
    }
        */
        /*exercice 3


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    $email = $_POST['email'];
    $mot_de_passe = $_POST['mot_de_passe'];

 
    if (isset($utilisateurs[$email])) {
       
        if ($utilisateurs[$email]['mot_de_passe'] === $mot_de_passe) {
            $message = "Bienvenue, " . $utilisateurs[$email]['nom'] . "!";
        } else {
            $message = "Mot de passe incorrect.";
        }
    } else {
        $message = "Aucun utilisateur trouvé avec cet email.";
    }
}
    */

/* exercice 4
    function calculerTotalPanier($panier) {
        $total = 0;
        foreach ($panier as $produit) {
            // Calculer le total pour chaque produit : prix * quantité
            $total += $produit['prix'] * $produit['quantité'];
        }
        return $total;
    }
    
    // Calcul du total du panier
    $totalPanier = calculerTotalPanier($panier);
    */
/* exercice 5 
    
$commentaires = [];


if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['commentaire'])) {
  
    $commentaire = $_POST['commentaire'];
    $horodatage = date("Y-m-d H:i:s"); 
    $commentaires[] = [
        'commentaire' => $commentaire,
        'date' => $horodatage
    ];
}
    */
/* exercice 6
    $villes = [
        'Paris' => 22,  
        'Maroc' => 15,
        'Chine' => 32,
        'Madrid' => 27,
        'Rome' => 25
    ];
    
    function villeLaPlusChaufe($villes) {
      
        $villeMax = array_keys($villes, max($villes))[0];
        $temperatureMax = max($villes);
        
        return "La ville avec la température la plus élevée est " . $villeMax . " avec " . $temperatureMax . "°C.";
    }
    
    $resultat = villeLaPlusChaufe($villes);
    */



    /* exercice 8
    $produits = [
        ["nom" => "Produit 1", "prix" => 100],
        ["nom" => "Produit 2", "prix" => 200],
        ["nom" => "Produit 3", "prix" => 300]
    ];
    
    if (isset($_POST['produits'])) {
        $total = 0;
        foreach ($_POST['produits'] as $produit) {
            $total += $produits[$produit]['prix'];
        }
        echo "Total: $total";
    }
*/
/* exercice 9
   $etudiants = [
        "Ahmed" => ["Maths" => 19, "Physique" => 20, "Francais" => 18],
        "Sara" => ["Maths" => 15, "Physique" => 16, "Francais" => 12],
        "Reda" => ["Maths" => 10, "Physique" => 9, "Francais" => 11]
    ];
    
    foreach($etudiants as $nom => $notes){
        $sommeNotes = 0;
        $totalMat = count($notes);
        foreach($notes as $matiere => $note){
           $sommeNotes += $note;
        }
        $moyenne = $sommeNotes / $totalMat;
        echo "Etudiant: $nom ; Moyenne: $moyenne";
    }
        */
        /* exercice 10

        $utilisateurs = [
            ["nom" => "Achraf", "email" => "achraf@example.com"],
            ["nom" => "Zineb", "email" => "zineb@example.com"]
        ];
        if (isset($_POST['action']) && $_POST['action'] === "ajouter") {
            $nouvelUtilisateur = [
                "id" => count($utilisateurs) + 1,
                "nom" => $_POST['nom'],
                "email" => $_POST['email']
            ];
            $utilisateurs[] = $nouvelUtilisateur;
        }
    
        if(isset($_POST['action']) && $_POST['action'] === 'modifier'){
            foreach($utilisateurs as $utilisateur){
                if($utilisateur['id'] == $_POST['id']){
                    $utilisateur['nom'] = $_POST['nouveauNom'];
                    $utilisateur['email'] = $_POST['nouveauEmail'];
                    break;
                }
            }
        }
    
        if (isset($_POST['action']) && $_POST['action'] === "supprimer") {
            foreach ($utilisateurs as $indice => $utilisateur) {
                if ($utilisateur['id'] == $_POST['id']) {
                    unset($utilisateurs[$indice]);
                    break;
                }
            }
        }

*/
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   <!-- 
<h2>Rechercher un employé</h2>

<form action="recherche.php" method="POST">
    <label for="nom">Nom de l'employé :</label>
    <input type="text" name="nom" required><br><br>
    <input type="submit" value="Rechercher">
</form>
-->
<!-- exercice 4
<h2>Formulaire de Connexion</h2>

<form action="connexion.php" method="POST">
    <label for="email">Email :</label>
    <input type="email" name="email" required><br><br>

    <label for="mot_de_passe">Mot de passe :</label>
    <input type="password" name="mot_de_passe" required><br><br>

    <input type="submit" value="Se connecter">
</form>
-->
<!-- exercice 5
<h2>Soumettre un Commentaire</h2>

<form action="" method="POST">
    <label for="commentaire">Votre commentaire :</label><br>
    <textarea name="commentaire" rows="4" cols="50" required></textarea><br><br>
    <input type="submit" value="Soumettre">
</form>

<h2>Commentaires soumis :</h2>
-->
<!-- exercice 
<h2>Ville avec la Température la Plus Élevée</h2>

-->
<!--
<h2>Importer un fichier CSV de produits</h2>

<form action="importer_csv.php" method="POST" enctype="multipart/form-data">
    <label for="csvfile">Choisir un fichier CSV :</label>
    <input type="file" name="csvfile" accept=".csv" required><br><br>
    <input type="submit" value="Importer">
</form>
-->

<!--
<h2>Gestion des Utilisateurs</h2>


<h3>Ajouter un Utilisateur</h3>
<form method="POST" action="">
    <input type="hidden" name="action" value="ajouter">
    <label for="nom">Nom :</label>
    <input type="text" name="nom" required><br><br>
    <label for="email">Email :</label>
    <input type="email" name="email" required><br><br>
    <input type="submit" value="Ajouter">
</form>


<h3>Modifier un Utilisateur</h3>
<form method="POST" action="">
    <input type="hidden" name="action" value="modifier">
    <label for="id">ID de l'utilisateur :</label>
    <input type="number" name="id" required><br><br>
    <label for="nom">Nom :</label>
    <input type="text" name="nom" required><br><br>
    <label for="email">Email :</label>
    <input type="email" name="email" required><br><br>
    <input type="submit" value="Modifier">
</form>


<h3>Supprimer un Utilisateur</h3>
<form method="POST" action="">
    <input type="hidden" name="action" value="supprimer">
    <label for="id">ID de l'utilisateur à supprimer :</label>
    <input type="number" name="id" required><br><br>
    <input type="submit" value="Supprimer">
</form>

<h3>Liste des Utilisateurs</h3>
<table border="1">
    <tr>
        <th>ID</th>
        <th>Nom</th>
        <th>Email</th>
    </tr>
-->




</body>
</html>
