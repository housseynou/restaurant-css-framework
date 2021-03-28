<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
        <link rel="stylesheet" href="css/style.css" type="text/css" media="all">
        <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
        <title>Home made Restaurant</title>
    </head>
    <body>
        <?php
            include("navmenu.php"); 
        ?>
        <div class="form">
        <?php
            if(array_key_exists('errors', $_SESSION)): ?>
                    <div class="alert alert-danger">
                        <?= inmplode('<br>', $_SESSION['errors']); ?>
                    </div>
                
                <?php endif;?>
        <form class="row g-3" action="insertmsg.php" methode="POST">
            <div class="row">
                <div class="col">
                    <label for="prenom">prenom</label><input type="text" name="prenom" id="prenom" placeholder="Prenom" class="form-control">
                </div>
                <div class="col">
                    <label for="nom">nom</label><input type="text" name="nom" id="nom" class="form-control" placeholder="Nom" >
                </div>
            </div>
            <div>
                <select class="form-select" aria-label="Default select example">
                    <option selected>Choisir un restaurant</option>
                    <option value="Bruxelles">Bruxelles</option>
                    <option value="Paris">Paris</option>
                    <option value="Joal">Joal</option>
                    <option value="San Francisco">San Francisco</option>
                    <option value="Abu Dabi">Abu Dabi</option>
                    <option value="Tokyo">Tokyo</option>
                </select>
            </div>
            <div class="form-floating">
                <textarea class="form-control" name="commentaire"  id="commentaire" style="height: 100px"></textarea>
                <label for="commentaire">Commentaire</label>
            </div>
            <div>
                <button type="submit" class="btn btn-primary">Envoyer</button>
            </div>
        </form>
        </div>
        <table class="table table-hover">
                    <thead>
                        <tr>
                            <th scope="col">Date</th>
                            <th scope="col">Prenom</th>
                            <th scope="col">Nom</th>
                            <th scope="col">Commentaire</th>
                        </tr>
                    </thead>
        
        <?php
            
            $bdd = new PDO('mysql:host=localhost;dbname=restoDB;charset=utf8', 'root', 'root', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
            
            $req = $bdd->query('SELECT * FROM Inscription ORDER BY date_creation DESC LIMIT 0, 10');
            while($data = $req->fetch())
            {
            ?>
           
                
                    <tbody>
                        <tr>
                            <th scope="row"><?php echo $data['date_creation'] ?></th>
                            <td><?php echo $data['Prenom'] ?></td>
                            <td><?php echo $data['Nom'] ?></td>
                            <td><?php echo $data['Commentaire'] ?></td>
                            <td> 
                                    <?php echo '<a href="delete.php?id='.$data['ID'].'"><i class="fas fa-times"></i></a>' ?>
                                     
                                </form>  
                            </td>
                        </tr>
                    </tbody>
                
            
        <?php
        }
        echo '</table>';
            $req->closeCursor(); 
        ?>
        <footer >
            <div>
                <ul>
                    <li>
                        <a href="#">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <i class="fab fa-twitter"></i>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <i class="fab fa-linkedin-in"></i>
                        </a>
                    </li>
                    <li><a href="#">
                        <i class="fab fa-instagram"></i>
                    </a>
                    </li>
                </ul>
            </div>
            <div>Copyright &copy; Housseynou, All right reserved !</div>
        </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
    </body>
</html>