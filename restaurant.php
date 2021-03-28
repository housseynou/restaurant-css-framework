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
        <div class="ville">
            <div class="card">
                <img src="images/san-francisco.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                  <p class="card-text">San Francisco(Californie).</p>
                </div>
            </div>
            <div class="card">
                <img src="images/senegal.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                   <p class="card-text">Joal(Senegal)</p>
                </div>
            </div>
            <div class="card">
                <img src="images/brussels.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                   <p class="card-text">Bruxelles(Belgique)</p>
                </div>
            </div>
            <div class="card">
                <img src="images/paris.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                   <p class="card-text">Paris(France)</p>
                </div>
            </div>
        
            <div class="card">
                <img src="images/dubai.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                <p class="card-text">Abou Dabi(Dubai) </p>
                </div>
            </div>
            <div class="card">
                <img src="images/tokyo.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                <p class="card-text">Tokyo(Japon)</p>
                </div>
            </div>
        </div>
        <section class="section pb-5">

            <!--Section heading-->
            <h2 class="section-heading h1 pt-4">Contactez nous</h2>
            <p class="section-description pb-4">Home Made Restaurant se situe au coeur de San Francisco en Californie.
                 Nous avons des filiales un peu partout dans le monde.
            </p>
            <div class="col-sm-7">

                <!--Google map-->
                <div id="map-container-google-9" class="z-depth-1-half map-container-5" style="height: 300px">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2519.222588830237!2d4.355387680090804!3d50.84556226679737!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47c3c47fd1d960c1%3A0xcbd18b1ea8412062!2sBeCode%20Brussels!5e0!3m2!1sfr!2sbe!4v1612306178151!5m2!1sfr!2sbe" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                </div>
          
                <br>
                
                <div class="row text-center">
                    <div class="col-md-4">
                        <a class="btn-floating blue accent-1"><i class="fas fa-map-marker-alt"></i></a>
                        <p>San Francisco, CA 94126</p>
                        <p>United States</p>
                    </div>
          
                    <div class="col-md-4">
                        <a class="btn-floating blue accent-1"><i class="fas fa-phone"></i></a>
                        <p>+ 01 234 567 89</p>
                        <p>Mon - Fri, 8:00-22:00</p>
                    </div>
          
                    <div class="col-md-4">
                        <a class="btn-floating blue accent-1"><i class="fas fa-envelope"></i></a>
                        <p>info@gmail.com</p>
                        <p>sale@gmail.com</p>
                    </div>
                </div>
          
            </div>
        </section>
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