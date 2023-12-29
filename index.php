<!DOCTYPE html>
<html lang="sp">
  
<head>

    <link  rel="icon"   href="imagenes\codoacodo.png" type="image/png" />

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trabajo práctico integrador final</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" 
          integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="CSS/style.css">
</head>
<body>

   <!-- BEGIN OF NAVBAR  --------------------------------------------------------------------------->
        <nav class="navbar navbar-expand-lg navbar-lghtgray" style="background-color: dimgray;">
            <div class="container-lg">

               <img src="imagenes\codoacodo.png" alt="NO SE"width="200" height="100">
               <p id="city"> Conf Bs As </p>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button> 
               
              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <div class="navbar-nav ms-auto"> 
                    <a class="nav-link" aria-current="page" color="white" href="#">La conferencia</a>
                    <a class="nav-link" aria-current="page" href="#speakers">Los oradores</a>
                    <a class="nav-link" aria-current="page" href="#">El lugar y la fecha</a>
                    <a class="nav-link" aria-current="page" href="#form">Conviértete en orador</a>
                    <a class="nav-link" aria-current="page" href="index1.html">Comprar tickets</a>  
                </div>
              </div>
            </div>
        </nav>
   <!-- END OF NAVBAR ------------------------------------------------------------------------------->

    
   <!-- BEGIN OF BSASINFO ------------------------------------------------------------------------------->
      <section class="bsasinfo">
       <div class="card bg-dark text-white">
          <img class="card-img" src="imagenes\ba1.jpg" alt="Bs>s image">
          <div class="card-img-overlay">
            <p class="card-title" >Conf Bs As</p>
            <p class="card-text">Llega por primer vez a Bs As Argentina un evento para compartir con.</p>
            <p class="card-text">nuestra comunidad el conocimiento y experiencia de los expertos que</p>
            <p class="card-text">están creando el futuro de internet. Vení a conocer a los miembros del</p>
            <p class="card-text">evento, a otros estudiantes de Codo a Codo y los oradores de primer</p>
            <p class="card-text">nivel que tenemos para ti. Te esperamos!</p>
            <div class="keypad">
                 <a class="btn btn-transparent" href="#form">Quiero ser orador</a>            
                 <a class="btn btn-solid" href="index1.html">Comprar Tickets</a>
            </div>
          </div>
        </div>
      </section>
      <!-- END OF BSASINFO ------------------------------------------------------------------------------->

      <!-- BEGIN OF SPEAKERS ------------------------------------------------------------------------------->
      <section class="speakers" id="speakers">
          
          <div class="title">
              <h6> CONOCE A LOS </h6> 
              <h2> ORADORES </h2> 
          </div>
      
          <div class="container-speakers">
            <div class="card" style="width: 30%;">  
                 <img src="imagenes\steve.jpg" class="card-img-top" alt="Steve Jobs">
                 <div class="skills">
                    <h6 class="yellow">JavaScript</h6>
                    <h6 class="cyan">React</h6> 
                </div>
                <h3 class="card-title-sub">Steve Jobs</h3>
                <p class="card-text-sub"> Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod 
                       tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim 
                       veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea 
                       commodo consequat. Duis aute irure dolor in reprehenderit in voluptate 
                       velit esse cillum dolore eu fugiat nulla pariatur.</p>
             </div>
             
             <div class="card" style="width: 30%;">
                 <img src="imagenes\bill.jpg" class="card-img-top" alt="Bill Gates">
                 <div class="skills">
                    <h6 class="yellow">JavaScript</h6>
                    <h6 class="cyan">React</h6> 
                </div>
                <h3 class="card-title-sub">Bill Gates</h3>
                <p class="card-text-sub"> Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod 
                  tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim 
                  veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea 
                  commodo consequat. Duis aute irure dolor in reprehenderit in voluptate 
                  velit esse cillum dolore eu fugiat nulla pariatur.</p>
             </div>  
           
             <div class="card" style="width: 30%;">
                 <img src="imagenes\ada.jpeg" class="card-img-top" alt="Ada">
                 <div class="skills">
                     <h6 class="grey">Negocios</h6>
                     <h6 class="magenta">StartUps</h6> 
                 </div>
                 <h3 class="card-title-sub">Ada Lovelace</h3>
                <p class="card-text-sub"> Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod 
                  tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim 
                  veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea 
                  commodo consequat. Duis aute irure dolor in reprehenderit in voluptate 
                  velit esse cillum dolore eu fugiat nulla pariatur.</p>
             </div>
  
        </div>

      </section>
      <!-- END OF SPEAKERS ------------------------------------------------------------------------------->

      
      
      <section id="sec_1">
        <div class="container-s1">
              <img src="imagenes\honolulu.jpg" alt="Honolulu" width="50%">
              <div class="s1-body">
                  <h2>Bs As - Octubre</h2>
                  <p>Buenos Aires es la provincia y localidad más grande de la Argentina, 
                    en los Estados Unidos Honolulu es la más sureña. Aunque el nombre Honolulu 
                    se refiere al área urbana en la costa sureste de la isla de Oahu, la ciudad 
                    y el condado de Honolulu han formado una ciudad condado consolidada que cubre 
                    toda la ciudad (aproximadamente 600Km2 de superficie).</p>
                  <a href="#" class="btn btn-transparent">Conocé más</a>  
              </div>
        </div>
      </section>
      
    <!-- BEGIN OF FORM ------------------------------------------------------------------------------->  
      <section class="form" id="form">
           <div class="title"> 
               <h6>CONVIERTETE EN UN</h6> 
               <h2>ORADOR</h2> 
               <h3>Anótate como orador para dar una <u>charla ignite</u>. Cuéntanos de que quieres hablar! </h3> 
           </div>

           <div class=container-form>
                <form action="">
                  <div class="first-last-name">
                    <input type="text" class="input-name" name="input-firtname" placeholder="Nombre" required>
                    <input type="text" class="input-name" name="input-lastname" placeholder="Apellido" required> 
                </div>
                <textarea class="input-about" name="input-about" id="" cols="30" rows="6" placeholder="Sobre qué quieres hablar?" required></textarea>
                <h6>Recuerda incluir un título para tu charla</h6>
                <input class="btn-submit" type="submit" value="Enviar">
                </form>
           </div>
      </section>
    <!-- END OF FORM ------------------------------------------------------------------------------->

    <!-- BEGIN OF FOOTER ------------------------------------------------------------------------------->  
     <footer CLASS="footer">
        <div class="container-footer">
          <a class="footer-item" href="#">Preguntas frecuentes</a>
          <a class="footer-item" href="#">Contáctanos</a>
          <a class="footer-item" href="#">Prensa</a>
          <a class="footer-item" href="#">Conferencias</a>
          <a class="footer-item" href="#">Términos y condiciones</a>
          <a class="footer-item" href="#">Privacidad</a>
          <a class="footer-item" href="#">Esdudiantes</a>
        </div>
      </footer>
    <!-- END OF FOOTER ------------------------------------------------------------------------------->  
    
    
  </body>
</html> 