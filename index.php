<?php


?>

<!doctype html>
<html lang="fr">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- google font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Merriweather+Sans:ital,wght@1,300&display=swap"
        rel="stylesheet">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Mikey</title>
    <style>
    body {
        font-family: 'Lato', sans-serif;
        font-family: 'Merriweather Sans', sans-serif;
    }

    h1 {
        font-family: 'Merriweather Sans', sans-serif;
    }

    #img {
        height: 20%;
        width: 20%;
        
    }
    </style>
</head>

<body>
    <ul class="nav justify-content-end">
        <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">Active</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#">Link</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#">Link</a>
        </li>
        <li class="nav-item">
            <a class="nav-link disabled">Disabled</a>
        </li>
    </ul>

    <h1 class="text-center display-4 my-4">Mikey</h1>
 <div class="container">

 <form class="row g-3">
 <div class="col-auto">
    <label for="pseudo" class="form-label">Pseudo</label>
    <input type="text" class="form-control" id="pseudo">
  </div>
  <div class="col-auto">
    <label for="mot_de_passe" class="form-label">Mot de passe</label>
    <input type="text" class="form-control" id="mot_de_passe">
  </div>
  <div class="col-auto">
    <label for="avis" class="form-label">Votez pour le pilote du jour</label>
    <input type="text" class="form-control" id="avis">
  </div>
  <div class="col-auto">
    <label for="np" class="form-label">Pilote du jour</label>
    <input type="text" class="form-control" id="np" placeholder="Nom du pilote du jour">
  </div>
  <div class="col-auto">
    <button type="submit" class="btn btn-primary mb-3">Envoyer l'avis</button>
  </div>
</form>


<h1 class="text-center">Merci d'avoir voté</h1>

    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Fugiat voluptatum quod esse inventore impedit pariatur consequatur aperiam cupiditate est repudiandae explicabo sit debitis nostrum hic ipsum quidem vel itaque id dignissimos, labore doloribus accusantium ducimus. Voluptatem sint accusantium dolor, vel quas doloremque praesentium blanditiis suscipit!
    </p>
    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Fugiat voluptatum quod esse inventore impedit pariatur consequatur aperiam cupiditate est repudiandae explicabo sit debitis nostrum hic ipsum quidem vel itaque id dignissimos, labore doloribus accusantium ducimus. Voluptatem sint accusantium dolor, vel quas doloremque praesentium blanditiis suscipit!
    </p>
    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Fugiat voluptatum quod esse inventore impedit pariatur consequatur aperiam cupiditate est repudiandae explicabo sit debitis nostrum hic ipsum quidem vel itaque id dignissimos, labore doloribus accusantium ducimus. Voluptatem sint accusantium dolor, vel quas doloremque praesentium blanditiis suscipit!
    </p>

    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"
                aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
                aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="image/Silverston.jpg" class="d-block" id="img" alt="...">
            </div>
            <div class="carousel-item">
                <img src="image/hamilton.jpg" class="d-block " id="img" alt="...">
            </div>
            <div class="carousel-item">
                <img src="image/lecler.jpg" class="d-block" id="img" alt="...">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
            data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">course précédente</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
            data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">course suivante</span>
        </button>
    </div>

 </div>
<footer>
  <h4 class="text-center">A propos de Moi</h4>
  
  <img src="image/LH.jpg" alt="" id="img" class="d-block">
  <P class="text-center">Je suis Mickaël Ajinça, en formuleje supporte Lewis Hamilton qui est le meilleur pilote de l'histoire de la F1, il est le plus grand champion de la catégorie avec la meilleure équipe de ses dernières années Mercedes F1 Team.</P>

</footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>

</body>

</html>