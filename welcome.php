<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
        <title>Home made Restaurant</title>
    </head>
    <body>
        <?php
            include("navmenu.php"); 
        ?>
        <div class="bg-light p-5 rounded-lg m-3">
            <h1 class="display-4">Promos et News</h1>
            <h3>Venez avec toute la famille</h3>
            <p class="lead">En ce moment, pour toute commande pour adulte, vous avez droit à 50% de remise sur le menu enfant. Profitez-en.</p>
            <hr class="my-4">
            <div>
                <p>Nos plats et menu pour enfant</p>
            </div>
            <div class="img_menu">
                <div class="card">
                    <img src="images/burger-frite.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                      <p class="card-text">Burgers ou sandwichs</p>
                    </div>
                  </div>
                  <div class="card">
                    <img src="images/gallette-enfsu.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                      <p class="card-text">Galettes fourrées(viande hachée, poulet, tenders...)</p>
                    </div>
                  </div>
                  <div class="card">
                    <img src="images/gall-fraise.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                      <p class="card-text">Galettes saveur sucrée</p>
                    </div>
                  </div>
                  <div class="card">
                    <img src="images/sandwich2-ap.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                      <p class="card-text">Calamars frits, tenders, sticks de mozza frits</p>
                    </div>
                  </div>
                <!--<div>
                    <img src="/images/burger-frite.jpg" class="img-thumbnail" alt="...">
                    <p>Burgers ou sandwichs</p>
                </div> -->
                <!--<div>
                    <img src="/images/gall-fraise.jpg" class="img-thumbnail" alt="...">
                    <p>Galettes saveur sucrée</p>
                </div>
                <div>
                    <img src="/images/gallette-enfsu.jpg" class="img-thumbnail" alt="...">
                    <p>Galettes fourrées(viande hachée, poulet, tenders...)</p>
                </div>
                <div>
                    <img src="/images/sandwich2-ap.jpg" class="img-thumbnail" alt="...">
                    <p>Calamars frits, tenders, sticks de mozza frits</p> 
                </div> -->
                <a class="btn btn-primary btn-lg" href="#" role="button">Réservation</a>
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