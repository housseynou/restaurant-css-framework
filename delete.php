<?php
    try{
        $bdd = new PDO('mysql:host=localhost;dbname=restoDB;charset=utf8', 'root', 'root');
    }
    catch(Exception $e)
    {
        die('Erreur : ' .$e->getMessage());
    }
    
    $idtodelete = $_GET['ID'];
    $req = $bdd->prepare('DELETE FROM Inscription WHERE ID=$idtodelete');
    $req->closeCursor();
    header('Location: guestbk.php');

    

?>

