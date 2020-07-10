<?php include_once 'Template/header.php'; ?>

    <main>

        <!--Início do carousel-->
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel" style="margin-left: 100px; margin-right: 100px;">
            <ol class="carousel-indicators">
              <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
              <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
              <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner" id="imagens">
              <div class="carousel-item active">
                <div class="carousel-caption">
                  <h2 style="font-weight: bold;">Facilidade e desempenho</h2>
                </div>
                <img id="imagem1" src="../Public/Images/escritorio.jpg" class="img-fluid d-block w-100" alt="...">
              </div>
              <div class="carousel-item">
                <div class="carousel-caption">
                  <h2 style="font-weight: bold;">Tecnologias modernas</h2>
                </div>
                <img id="imagem2" src="../Public/Images/desenvolvedor.jpg" class="img-fluid d-block w-100" alt="...">
              </div>
              <div class="carousel-item">
                <div class="carousel-caption">
                  <h2 style="font-weight: bold;">Segurança e confiabilidade</h2>
                </div>
                <img id="imagem3" src="../Public/Images/database.jpg" class="img-fluid d-block w-100" alt="...">
              </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </a>
        </div>
          <!--Fim do carousel-->

          <h1>Por que escolher o Moginho?</h1>
          <br/>
          <hr/>
          <br/>

          <div id="texto">
             <p>
                Um bom banco de dados é essencial para que as informações da sua empresa sejam 
                 armazenadas com segurança. E Moginho oferece o suporte necessário para que você 
                possa operar de forma rápida e intuitiva.
            </p>
          </div>

          <br/>
          <hr/>
          <br/>

    
    </main>
    
<?php

//Incluindo o footer:
include_once 'Template/footer1.php';

?>