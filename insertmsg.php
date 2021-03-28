<?php
    $errors = [];
    if(!array_key_exists('prenom', $_POST) || $_POST['prenom'] == ''){
        $errors['prenom'] = "Vous n'avez pas remplis le champ Prenom";
    }
    if(!array_key_exists('nom', $_POST) || $_POST['nom'] == ''){
        $errors['nom'] = "Vous n'avez pas remplis le champ Nom";
    }
    if(!empty($errors)){
        session_start();
        $_SESSION['$errors'] = $errors; 
        header('Location: guestbk.php');
    }
    else {
        try{
            $bdd = new PDO('mysql:host=localhost;dbname=restoDB;charset=utf8', 'root', 'root');
        }
        catch(Exception $e)
        {
            die('Erreur : ' .$e->getMessage());
        }
        $prenom = $_POST['prenom'];
        $nom = $_POST['nom'];
        $commentaire = $_POST['commentaire'];
        $req = $bdd->prepare('INSERT INTO Inscription(Prenom, Nom, Commentaire) VALUES(?, ?, ?)');
        $req->execute(array($prenom, $nom, $commentaire));
        header('Location: guestbk.php');
    }  
    
?>   