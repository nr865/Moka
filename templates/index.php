<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>moka</title>

    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="style.css">

    <script src="../js/caroussel.js" defer></script>

</head>
<body class="mx-auto pb-5">

    <!-- Barre de navigation -->
    <nav class="navbar navbar-expand-lg navbar-light bg-dark">
        <div class="container-fluid">
          <a class="navbar-brand text-secondary font-weight-bold text-uppercase px-3" href="#">Moka</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link text-light font-weight-bold text-uppercase px-3" aria-current="page" href="/">Accueil</a>
              </li>
              <li class="nav-item">
                <a class="nav-link text-light font-weight-bold text-uppercase px-3" href="/contact">Contact</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link text-light font-weight-bold text-uppercase px-3 dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Nos produits
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <li><a class="dropdown-item" href="#">Caf?? en grain</a></li>
                  <li><a class="dropdown-item" href="#">Caf?? en poudre</a></li>
                  <li><a class="dropdown-item">Caf?? en soluble</a></li>
                  <li><a class="dropdown-item" href="#">Caf?? en dossette</a></li>
                </ul>
              </li>
              <li class="nav-item">
                <a class="nav-link "></a>
              </li>
            </ul>
            <form class="d-flex" role="search">
              <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
              <button class="btn btn-outline-success" type="submit">Search</button>
            </form>
          </div>
        </div>
    </nav>

    <!-- Carousel -->
    <div class="col-12 py-5">
      <div class="row d-flex align-items-center slider">

        <!-- Fl??che de gauche -->
        <div class="col-lg-3 d-none d-lg-block text-end">                                
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-left" viewBox="0 0 16 16">
          <path fill-rule="evenodd" d="M15 8a.5.5 0 0 0-.5-.5H2.707l3.147-3.146a.5.5 0 1 0-.708-.708l-4 4a.5.5 0 0 0 0 .708l4 4a.5.5 0 0 0 .708-.708L2.707 8.5H14.5A.5.5 0 0 0 15 8z"/>
        </svg>
        </div>

        <!-- Image du carousel -->
        <div class="col-12 col-lg-6 pt-4 pt-lg-0">
          <img src="../images/slide/slide01.jpg" alt="Image du slide" class="w-100 rounded carousel-img">
        </div>

        <!-- Fl??che de droite -->
        <div class="col-lg-3 d-none d-lg-block text-start">
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-right" viewBox="0 0 16 16">
          <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z"/>
        </svg>                             
      </div>
    </div>
  </div>
      
  <div class="container">
    <div class="row">
      <div class="col-4">
        <div class="h-100">        
      </div>
      <div class="col-4">
        <h1>cafetiere</h1>
      </div>
    </div>
  </div>

         
        
        <div class="container">
            <div class="row"> 
            
            <img src="images/01.jpg" alt="cafeimages">
            
            <p>60???</p>
            <button>acheter</button>
          
          <div class="col-3"></div>
          <img src="images/02.jpg" alt="cafeimages">
            <h1>cafetiere</h1>
            <p>40???</p>
            <button>acheter</button>

            <div class="col-3"></div>
            <img src="images/03.jpg" alt="cafeimages">
            <h1>cafetiere</h1>
            <p>30???</p>
            <button>acheter</button>

            <div class="col-3"></div>
            <img src="images/04.jpg" alt="cafeimages">
            <h1>cafetiere</h1>
            <p>50???</p>
            <button>acheter</button>


    </div>
      </div>

</body>
</html>