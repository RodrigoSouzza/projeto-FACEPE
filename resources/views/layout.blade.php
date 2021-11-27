<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
<link rel="stylesheet" href="style.css">
    <title>Nordeste Restaurantes</title>
</head>
<body class="container-fluid">
    <header class="container-fluid">
        <div class="container">
            <div class="row">
                <div class="col-3">
                <img src="https://meusertaocom.files.wordpress.com/2018/10/logo_400x400.png?w=200" alt="">

                </div>
                <div class="col-9">
                    <h1 class="titulo">
                        Nordeste Restaurantes
                    </h1>

                </div>          
            
            </div>     

        </div>
        <div id="pesquisa">
            <ul class="nav justify-content-center">
              <li class="nav-item">
                <a style="color:#F8C605;-webkit-text-stroke-width: 1px;-webkit-text-stroke-color: black;" class="nav-link active" aria-current="page" href="/">Inicio</a>
              </li>
              <li class="nav-item">
                <a style="color:#F8C605;-webkit-text-stroke-width: 1px;-webkit-text-stroke-color: black;" class="nav-link" href="/cardapio">Cardápio</a>
              </li>
              <li class="nav-item">
                <a style="color:#F8C605;-webkit-text-stroke-width: 1px;-webkit-text-stroke-color: black;" class="nav-link" href="/pedido">Pedido</a>
              </li>
              <li class="nav-item">
                <a style="color:#F8C605;-webkit-text-stroke-width: 1px;-webkit-text-stroke-color: black;" class="nav-link" href="/cadastro">Cadastrar cardápio</a>
              </li>
            </ul>
        </div>
        <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img style="width: 200px; height: 400px; object-fit: cover;object-position: 20% 10%;border: 5px solid white;"
      src="http://www.saboresajinomoto.com.br/uploads/images/posts/comidas_tipicas_do_nordeste_5c34d00b09c040.82225278.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img style="width: 200px; height: 400px; object-fit: cover;object-position: 20% 10%;border: 5px solid white;"
      src="https://www.melhoresdestinos.com.br/wp-content/uploads/2020/07/comidas-tipicas-nordeste-00005.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img style="width: 200px; height: 400px; object-fit: cover;object-position: 20% 10%;border: 5px solid white;"
      src="https://big1news.com.br/wp-content/uploads/2020/08/Cuscuz-De-Fuba-Recheado.jpg" class="d-block w-100" alt="...">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
      
  </header>

    <main class="container-fluid">
        
        <div id="fundo" class="container-fluid">
        @yield('conteudo')
        </div>    
        
    </main>

  <footer class="container-fluid"> 
                <div style="text-align:center;" class="row">
                <div class="col-4">
                    <a href="https://www.instagram.com">
                    <img style="width: 30px; height: 30px; margin-top: 30px;" 
                    src="https://cdn-icons-png.flaticon.com/512/2111/2111463.png" class="img-fluid" class="media-object  img-responsive img-thumbnail"></a>
                  </div>
                  <div class="col-4">            
                    <a href="https://www.google.com">
                    <img style="width: 30px; height: 30px; margin-top: 30px;"
                    src="https://cdn-icons-png.flaticon.com/512/300/300221.png" class="img-fluid" class="media-object  img-responsive img-thumbnail"></a>
                  </div>
                    <div class="col-4">
                    <a href="https://www.facebook.com">
                    <img style="width: 30px; height: 30px; margin-top: 30px;"
                    src="https://cdn-icons-png.flaticon.com/512/174/174848.png" class="img-fluid" class="media-object  img-responsive img-thumbnail"></a>
                  </div>
                </div>              
                  
                  <h4>
                    Nordeste Restaurantes | Garanhuns-PE
                  </h4>
            </div>
  </footer>
    
</body>
</html>