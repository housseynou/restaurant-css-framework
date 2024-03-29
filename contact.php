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
        <div class="form">
            <div class="message"><p>Laissez-nous un message. On vous contactera dès que possible</p> </div>
            <div class="row">
                <div class="col">
                <input type="text" class="form-control" placeholder="First name" aria-label="First name">
                </div>
                <div class="col">
                <input type="text" class="form-control" placeholder="Last name" aria-label="Last name">
                </div>
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label"></label>
                <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
            </div>
            <div class="input-group mb-3">
                <button class="btn btn-outline-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">Dropdown</button>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="#">Réservation</a></li>
                  <li><a class="dropdown-item" href="#">Réclamation</a></li>
                  <li><a class="dropdown-item" href="#">Autre question</a></li>

                </ul>
                <input type="text" class="form-control" aria-label="Text input with dropdown button">
            </div>
            <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label"></label>
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="votre message"></textarea>
            </div>
            <div><button type="submit" class="btn btn-primary">Submit</button></div>
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