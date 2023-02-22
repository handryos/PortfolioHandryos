@extends ("site.master.layout")

@section("content")

<div id="myCarousel"  class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <div style="padding-bottom: 40%" class="row">
        </div>  
        <img class="first-slide" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="First slide">
        <div class="container">
          
          <div style="padding-bottom: 7%" class="carousel-caption text-left">
           
            <img style="padding: 0%" class="rounded-circle" src="https://media.licdn.com/dms/image/D4D03AQGKH3-ZtlnTHg/profile-displayphoto-shrink_200_200/0/1671720263121?e=1681344000&v=beta&t=RXUERycg7MXDoyxYNgsPBTof5F1FvIFzooG5eShvEI0" alt="Generic placeholder image" width="140" height="140">
             <br>
             <div style="text-shadow: 4px 4px 14px rgba(0,0,0,1);">
            <h1>Handryos Ghidorsi dos Santos</h1>
            <p><h2><i>Desenvolvedor Web</i></h2></p>
            </div>
            <br> 
          </div>
        </div>
      </div>
      <div class="carousel-item">
     
        <div class="container">
          <div style="padding-bottom: 7%" class="carousel-caption">
            <h1 style="text-shadow: 4px 4px 14px rgba(0,0,0,1);">Formado Técnico em Informática para Internet</h1>
            <br>
            <p><a class="btn btn-lg btn-primary" href="{{route("site.about")}}" role="button">Saiba mais</a></p>    
          </div>
        </div>
      </div>
      <div class="carousel-item">
        
        <div class="container">
          <div style="padding-bottom: 9%" class="carousel-caption text-right">
            <h1 style="text-shadow: 4px 4px 20px rgba(0,0,0,1);">Contato</h1>
            
            <a class="btn btn-lg btn-primary" href="https://www.linkedin.com/in/handryos-ghidorsi-dos-santos-421b00258/" role="button"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-linkedin" viewBox="0 0 16 16">
                <path d="M0 1.146C0 .513.526 0 1.175 0h13.65C15.474 0 16 .513 16 1.146v13.708c0 .633-.526 1.146-1.175 1.146H1.175C.526 16 0 15.487 0 14.854V1.146zm4.943 12.248V6.169H2.542v7.225h2.401zm-1.2-8.212c.837 0 1.358-.554 1.358-1.248-.015-.709-.52-1.248-1.342-1.248-.822 0-1.359.54-1.359 1.248 0 .694.521 1.248 1.327 1.248h.016zm4.908 8.212V9.359c0-.216.016-.432.08-.586.173-.431.568-.878 1.232-.878.869 0 1.216.662 1.216 1.634v3.865h2.401V9.25c0-2.22-1.184-3.252-2.764-3.252-1.274 0-1.845.7-2.165 1.193v.025h-.016a5.54 5.54 0 0 1 .016-.025V6.169h-2.4c.03.678 0 7.225 0 7.225h2.4z"/>
              </svg> 
              </a>
              <a class="btn btn-lg btn-primary" href="https://github.com/handryos" role="button"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-github" viewBox="0 0 16 16">
                <path d="M8 0C3.58 0 0 3.58 0 8c0 3.54 2.29 6.53 5.47 7.59.4.07.55-.17.55-.38 0-.19-.01-.82-.01-1.49-2.01.37-2.53-.49-2.69-.94-.09-.23-.48-.94-.82-1.13-.28-.15-.68-.52-.01-.53.63-.01 1.08.58 1.23.82.72 1.21 1.87.87 2.33.66.07-.52.28-.87.51-1.07-1.78-.2-3.64-.89-3.64-3.95 0-.87.31-1.59.82-2.15-.08-.2-.36-1.02.08-2.12 0 0 .67-.21 2.2.82.64-.18 1.32-.27 2-.27.68 0 1.36.09 2 .27 1.53-1.04 2.2-.82 2.2-.82.44 1.1.16 1.92.08 2.12.51.56.82 1.27.82 2.15 0 3.07-1.87 3.75-3.65 3.95.29.25.54.73.54 1.48 0 1.07-.01 1.93-.01 2.2 0 .21.15.46.55.38A8.012 8.012 0 0 0 16 8c0-4.42-3.58-8-8-8z"/>
              </svg>
              </a>
              <a class="btn btn-lg btn-primary" href="https://wa.me/49998189774" role="button"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-whatsapp" viewBox="0 0 16 16">
                <path d="M13.601 2.326A7.854 7.854 0 0 0 7.994 0C3.627 0 .068 3.558.064 7.926c0 1.399.366 2.76 1.057 3.965L0 16l4.204-1.102a7.933 7.933 0 0 0 3.79.965h.004c4.368 0 7.926-3.558 7.93-7.93A7.898 7.898 0 0 0 13.6 2.326zM7.994 14.521a6.573 6.573 0 0 1-3.356-.92l-.24-.144-2.494.654.666-2.433-.156-.251a6.56 6.56 0 0 1-1.007-3.505c0-3.626 2.957-6.584 6.591-6.584a6.56 6.56 0 0 1 4.66 1.931 6.557 6.557 0 0 1 1.928 4.66c-.004 3.639-2.961 6.592-6.592 6.592zm3.615-4.934c-.197-.099-1.17-.578-1.353-.646-.182-.065-.315-.099-.445.099-.133.197-.513.646-.627.775-.114.133-.232.148-.43.05-.197-.1-.836-.308-1.592-.985-.59-.525-.985-1.175-1.103-1.372-.114-.198-.011-.304.088-.403.087-.088.197-.232.296-.346.1-.114.133-.198.198-.33.065-.134.034-.248-.015-.347-.05-.099-.445-1.076-.612-1.47-.16-.389-.323-.335-.445-.34-.114-.007-.247-.007-.38-.007a.729.729 0 0 0-.529.247c-.182.198-.691.677-.691 1.654 0 .977.71 1.916.81 2.049.098.133 1.394 2.132 3.383 2.992.47.205.84.326 1.129.418.475.152.904.129 1.246.08.38-.058 1.171-.48 1.338-.943.164-.464.164-.86.114-.943-.049-.084-.182-.133-.38-.232z"/>
              </svg>
              </a>
              <a class="btn btn-lg btn-primary" href="https://mailto:handryosgds12@hotmail.com" role="button"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-envelope-at" viewBox="0 0 16 16">
                <path d="M2 2a2 2 0 0 0-2 2v8.01A2 2 0 0 0 2 14h5.5a.5.5 0 0 0 0-1H2a1 1 0 0 1-.966-.741l5.64-3.471L8 9.583l7-4.2V8.5a.5.5 0 0 0 1 0V4a2 2 0 0 0-2-2H2Zm3.708 6.208L1 11.105V5.383l4.708 2.825ZM1 4.217V4a1 1 0 0 1 1-1h12a1 1 0 0 1 1 1v.217l-7 4.2-7-4.2Z"/>
                <path d="M14.247 14.269c1.01 0 1.587-.857 1.587-2.025v-.21C15.834 10.43 14.64 9 12.52 9h-.035C10.42 9 9 10.36 9 12.432v.214C9 14.82 10.438 16 12.358 16h.044c.594 0 1.018-.074 1.237-.175v-.73c-.245.11-.673.18-1.18.18h-.044c-1.334 0-2.571-.788-2.571-2.655v-.157c0-1.657 1.058-2.724 2.64-2.724h.04c1.535 0 2.484 1.05 2.484 2.326v.118c0 .975-.324 1.39-.639 1.39-.232 0-.41-.148-.41-.42v-2.19h-.906v.569h-.03c-.084-.298-.368-.63-.954-.63-.778 0-1.259.555-1.259 1.4v.528c0 .892.49 1.434 1.26 1.434.471 0 .896-.227 1.014-.643h.043c.118.42.617.648 1.12.648Zm-2.453-1.588v-.227c0-.546.227-.791.573-.791.297 0 .572.192.572.708v.367c0 .573-.253.744-.564.744-.354 0-.581-.215-.581-.8Z"/>
              </svg>
              </a>
          </div>
        </div>
      </div>
    </div>
    <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>

  <div class="container marketing reveal">
    
    <div class="row">
      <div class="col-lg-4 lead">
        <img class="rounded-circle" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTVs9npZRNF4nln_p4FBgazQi7RYq48k-nF2C3oZ0g&s" alt="Generic placeholder image" width="140" height="140">
        <h2 style="font-stretch: expanded">IFC Campus Concórdia</h2>
        <p style="font-size-adjust: 0.58">Instituição na qual me formei Técnico em Informática no período de três anos.</p>

       
      </div>
      <div class="col-lg-4 lead">
        <img class="rounded-circle" src="https://media.licdn.com/dms/image/C4D0BAQFhi_fbDqYe3g/company-logo_200_200/0/1554399299344?e=1683763200&v=beta&t=fNzcVFxDDT77Ykobqgoe8sbh6XMsuJO5OlavQbXA53s" alt="Generic placeholder image" width="140" height="140">
        <h2>Movitech</h2>
        <p>Empresa na qual tive minha primeira experiência como progamador.</p>

      </div>
      <div class="col-lg-4 lead">
        <img class="rounded-circle" src="https://thumbs.dreamstime.com/b/design-do-logotipo-da-letra-io-em-fundo-preto-conceito-de-iniciais-criativas-%C3%ADcone-azul-e-branco-branca-i-192623295.jpg" alt="Generic placeholder image" width="140" height="140">
        <h2>Branas.io</h2>
        <p>Plataforma que pude aprimorar minha visão como programador.</p>
      
      </div>
    </div>

    <div class="container reveal">
    <hr class="vr vr-blurry" style="border-width: 2px;">
    <div class="row featurette">
        <div class="col-md-20">
          <h2 class="featurette-heading" style="text-align: center">Minha trajetória no mundo da TI.<span class="text-muted"></span></h2>
          <br>
          <br>
          <br>
          <p class="lead" style="text-align:center">Desde pequeno sempre fui muito ligado a tecnlogia. Desde cedo me interessei por computadores e aprendi a utilizá-los como ferramenta de aprendizado. Aprendi a programar, e essa habilidade veio a calhar quando comecei o meu técnico no Instituto Federal Catarinense. Desde então, me mantive interessado em tecnologia e sou um grande entusiasta da área.  Tive a oportunidade aprender a criar websites, aplicativos, jogos e também me dedico ao aprendizado de novas linguagens de programação, além de me interessar pelo mundo de Redes de Computadores e do Desenvolvimento, sendo essas as áreas nas quais tive o maior contato e interesse ao longo do meu curso.</p>
        </div>
        <div class="col-md-3">
        
        </div>
      </div>
    </div>
    <div class="container reveal">
      <hr class="featurette-divider">
      <br>
    <div class="row featurette">
      <div class="col-md-7">
        <h2 class="featurette-heading">Formatura no curso Técnico em Informática para Internet.<span class="text-muted"></span></h2>
        <br>
        <p style="text-align: justify" class="lead">Nesse dia, tive a oportunidade de me formar Técnico em Informática para Internet. Foi um momento muito especial para mim e para todos os meus familiares. Foi uma conquista tão importante para a minha carreira e para a minha vida. Fiquei muito feliz de poder conseguir realizar um sonho com muito esforço e dedicação. A cerimônia foi muito emocionante e me deixou com um sentimento de realização e orgulho. Fui muito bem recebido por todos que estavam presentes. Agradeço a Deus por essa oportunidade incrível.</p>
        
    </div>
      <div class="col-md-5">
        <img style="border-radius: 20%; object-fit:cover" class="featurette-image img-fluid mx-auto" src="..\..\img\FOTO FORMATURA (2).jpeg" alt="Generic placeholder image">
      </div>
    </div>
    <hr class="featurette-divider">
    <br>
    <br>
    </div>
    <div class="container reveal">
      <div class="row featurette">
        <div class="col-md-7 order-md-2">
          <h2 class="featurette-heading">Meus Objetivos.<span class="text-muted"></span></h2>
          <br>
          <p style="text-align: justify" class="lead">Estou sempre buscando me aprimorar na área da TI e para isso estou investindo em cursos, participando de eventos, fazendo leituras, acompanhando novas tendências e compartilhando conhecimento com meus colegas. Estou sempre aberto a aprender e entender melhor as tecnologias e ferramentas mais usadas na área. Acredito que realizar essas atividades me ajuda a desenvolver as minhas capacidades profissionais e aumentar minhas chances de sucesso.</i></p>
          
        </div>
        <div class="col-md-5 order-md-1">
          <img style="border-radius: 20%; height:450px; width: 600px; object-fit:cover" class="featurette-image img-fluid mx-auto" src="..\..\img\FOTO FORMATURA (1).jpeg" alt="Generic placeholder image">
        </div>
      </div>
    </div>  

    
    
    <hr class="featurette-divider">
    <div class="container reveal">
    <div class="row featurette">
    <div class="d-flex p-2 bd-highlight align-items-center">
    </div>
   
    <div class="card d-flex align-items-center" 
    style="
    
    margin-bottom:20rem; 
    width:70rem; 
    border-radius: 5rem;
    position: flex;
    border-style: transparent;

    height:40rem;
    -webkit-box-shadow: 26px 2px 27px -8px rgba(184,184,184,1);
    -moz-box-shadow: 26px 2px 27px -8px rgba(184,184,184,1);
    box-shadow: 26px 2px 27px -8px rgba(184,184,184,1);">

    <div id="area"> 
    <div class="row featurette">
      <div class="col-md-12">
        <br>
        <div id="formheader" class="card-header bg-outline-primary">
        <h2 class="d-flex align-items-center">ENVIE UMA MENSAGEM<span class="text-muted"></span></h2> 
        
        </div>
         
        </form>
        </div>
      </div>
      </div>
      </div>
      </div>
    </div>
    </div>
      </div>
    <hr class="featurette-divider">
</div>
      </div>

  </div>
<br>
@endsection

@section("scripts")


@section("footer")   


<div class="footer-dark">
    <footer>
        <div class="container">
            <p class="copyright">by Handryos G. dos Santos © 2023</p>
        </div>
    </footer>
</div>

<script type="text/javascript">

window.addEventListener("scroll", reveal);
    function reveal(){
      var reveals = document.querySelectorAll('.reveal');
      for(var i = 0; i < reveals.length; i++){

        var windowheight = window.screen.height;        
        var revealtop = reveals[i].getBoundingClientRect().top;
        var revealpoint = 150;

        if(revealtop < windowheight - revealpoint){
          reveals[i].classList.add("active");
        }
        else{
          reveals[i].classList.remove("active");
        }
      }
    }
</script>




<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>


    

  




@endsection
