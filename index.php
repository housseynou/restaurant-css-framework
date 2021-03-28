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
    
    <a class="book" href="guestbk.php">Guest Book</a>
    
    <div class="container-fluid">
        <div class="row">
            <!-- <img class="image-fluid" src="images/home_acceuil.jpg" alt="image d'acceuil"> -->
            <pre> 
                <strong>    
Votre Resto !!!
À la maison, au bureau,
où vous voulez ...
                </strong>
            </pre>
            <button type="button" class="btn btn-outline-success"><a href="#"><strong>Faites une réservation</strong></a></button>
        </div>

    </div>
    <div class="present">
        <div class="container">
            <div class="row">
                <div class="col-8">
                    <img src="images/saumon.jpg" class="img-fluid" alt="assiette saumon">
                </div>
                <div class="col align-self-center">
                    <p>Saumooonnn! À la crème, moutarde à l'ancienne. Non je plaisente. Je ne sais 
                        pas du tout de quoi est fait cette sauce mais ça a l'air bon.
                    </p>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col align-self-center">
                    <p>Des produits frais toute l'année grâce àux formidables agriculteurs partout où nos restaurants sont implantés.</p>
                </div>
                <div class="col-8">
                    <img src="images/fruit-leg.jpg" class="img-fluid" alt="fruit et legume">
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-8">
                    <img src="images/boisson.jpg" class="img-fluid" alt="assiette saumon">
                </div>
                <div class="col align-self-center">
                    <p>Un bon repas doit toujours être accompagné d'une bonne boisson. Vous avez le droit de vous bourrer la gueule si vous 
                        pensez que ça vaut le coup aprés un tel régal. Oubien un sans alcool. Où juste un jus de fruit.
                    </p>
                </div>
            </div>
        </div>
    </div>
    <footer>
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