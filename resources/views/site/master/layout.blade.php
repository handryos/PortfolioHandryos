
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Handryos GS - DEV</title>
    <link rel="shortcut icon" href="...\..\..\img\H.png">
    <link rel="stylesheet" href="/css/styles.css">
    <link rel="stylesheet" href="http://127.0.0.1:8000/">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <header>
        <br></header>
        <nav class="navbar navbar-expand-md navbar-dark fixed-top" style="background: rgb(0,0,0);
        background: linear-gradient(331deg, rgba(0,0,0,1) 7%, rgba(0,0,0,0.9192051820728291) 100%);">
          <a class="navbar-brand" href="#"><img width="70" height="46" src="https://avatars.githubusercontent.com/u/74721057?s=400&u=e612678d06f6b0cb70e9b2cf6e6f0df78f6b340e&v=4" alt="Generic placeholder image"></a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarCollapse">
            <ul class="navbar-nav mr-auto">
              <li class="nav-item active">
                <a class="nav-link" href="{{route("site.home")}}">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{route("site.about")}}">Sobre</a>
              </li>
              
            </ul>
          
          </div>
        </nav>
      </header>
  
      <main role="main">

    </main>



        @yield("content")

        <div class="footer-dark">
            <footer>
                <div class="container">
                    <div class="row">
                        <div style="align-content: initial" class="col-sm-6 col-md-3 item">
                            <h3>Services</h3>
                            <ul>
                                <li><a href="#">Desenvolvimento Web</a></li>
                                <li><a href="#">Segurança da Informação</a></li>
                                <li><a href="#">Redes de Computadores</a></li>
                            </ul>
                        </div>
                              
                        <div class="col item social">
                            <a href="https://www.linkedin.com/in/handryos-ghidorsi-dos-santos-421b00258/"><i class="icon ion-social-linkedin"></i></a><a href="https://github.com/handryos"><i class="icon ion-social-github"></i></a>
                            
                        </div>
                    </div>
                </div>
            </footer>
        </div>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
       

        @yield("footer")

    


</body>
</html>