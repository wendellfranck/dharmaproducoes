<?php include "../header.php"; ?>
<link rel="stylesheet" href="quem_somos.css">

      <div class="container">
          <div class="row">
            <div class="col s12 center-align titulo">
                <h1>QUEM SOMOS</h1>
            </div>
          </div>
      </div>
    	</header>
      	<section class="section section-contato" style="background: #471F58;">
          <div class="container">
            <div class="row">
              <div class="col s12 m6 titulo2 center hide-on-med-and-down">
                  <img class="quem_logo" src="../img/quem_somos_logo.png">
              </div>
              <!-- <div class="vl col s12 m2"></div> -->
              <div class="col s12 m6 titulo2">
                  <h3 class="white-text">DHARMA PRODUÇÕES</h3>
              </div>
              <div class="col s12 m6">
                 <p class="white-text bio">Idealizada pelas produtoras culturais Raquel Cardoso e Natália Corintho, a Dharma Produções planeja e produz os mais diversos tipos de projetos e ações culturais e educacionais a fim de fomentar e disseminar o entretenimento na cidade do Rio de Janeiro, além de auxiliar novos produtores e artistas em construção de carreira.</p>
              </div>
            </div>
          </div>
        </section>
        <section class="section section-time" style="">
          <div class="container ">
            <div class="row hide-on-med-and-down">
              <div class="col s12">
                  <h3 style="color: #471F58;">TIME <b>DHARMA</b></h3>
                  <p>Conheça o time Dharma</p>
              </div>
              <div class="col s12 m3" id="img_nati" onclick="myFunctionNati()">
                  <img style="width: 100%;" src="../img/nati_pb.png" onmouseover="this.src='../img/nati1.png'" onmouseout="this.src='../img/nati_pb.png'">
                <!-- <img class="seg" src="../img/nati.png"> -->
                <!-- <img src="../img/nati_pb.png"> -->

                <!-- <p style="color: #471F58; text-align: center;"><b>Natália Corintho</b></p> -->
              </div>
              <div class="col s12 m3" onclick="myFunctionRaquel()">
                 <img style="width: 100%;" src="../img/raquel_pb.png" onmouseover="this.src='../img/raquel1.png'" onmouseout="this.src='../img/raquel_pb.png'">
                <!-- <img class="seg" src="../img/raquel.png"> -->
                <!-- <img class="pri" src="../img/raquel_pb.png"> -->
                <!-- <p style="color: #471F58;  text-align: center;"><b>Raquel Cardoso</b></p> -->
              </div>
              <div class="col s12 m3" onclick="myFunctionMerlot()">
                 <img style="width: 100%;" src="../img/merlot_mascotte_pb.png" onmouseover="this.src='../img/merlot_mascotte1.png'" onmouseout="this.src='../img/merlot_mascotte_pb.png'">
                <!-- <img  class="seg" src="../img/merlot_mascotte.png"> -->
                <!-- <img  class="pri" src="../img/merlot_mascotte_pb.png"> -->
                <!-- <p style="color: #471F58;  text-align: center;"><b>Merlot, a mascote</b></p> -->
              </div>
              <div class="col s12 m3" onclick="myFunctionLohaine()">
                 <img style="width: 100%;" src="../img/lohaine_moraes_pb.png" onmouseover="this.src='../img/lohaine1.png'" onmouseout="this.src='../img/lohaine_moraes_pb.png'">
                
              </div>
              
              
               
            </div>
          <!-- </div> -->
          <!-- <div class="container "> -->
            <div class="row mobile-style">
                <div class="col s12">
                  <h3 style="color: #471F58;">TIME <b>DHARMA</b></h3>
                  <p>Conheça o time Dharma</p>
                </div>
                <div class="carousel">
                  <a class="carousel-item"><div class="col s12 m3 col-md-1-mobi" onclick="myFunctionNati()"></div></a>
                  <a class="carousel-item" ><div class="col s12 m3 col-md-2-mobi" onclick="myFunctionRaquel()"></div></a>
                  <a class="carousel-item" ><div class="col s12 m3 col-md-3-mobi" onclick="myFunctionMerlot()"></div></a>
                  <a class="carousel-item" ><div class="col s12 m3 col-md-4-mobi" onclick="myFunctionLohaine()"></div></a>
                </div>
            </div>
          <!-- </div> -->
          <!-- <div class="container"> -->
            <div class="row mt-10">
              <div class="col s12 div1 hide" id="raquel_desc">
                <h5 class="white-text text-box"><b>Raquel Cardoso</b></h5>
                <p class="white-text text-box"><i>Sócia Diretora e Gestão de Projetos</i></p>
                <p class="white-text text-box">Bacharel em Produção Cultural pelo IFRJ e cursando Marketing pela UVA, possui 5 anos de experiência com gestão e idealização de editais públicos de fomento à cultura. Experiente em produção executiva e curadoria musical em eventos de diferentes portes, é geminiana, mãe da Merlot e uma das idealizadoras da Dharma Produções.</p>
              </div>
              <div class="col s12 div1 hide" id="nati_desc">
                <h5 class="white-text text-box"><b>Natália Corintho</b></h5>
                <p class="white-text text-box"><i>Sócia Diretora e Gestão Administrativa</i></p>
                <p class="white-text text-box">Bacharel em Produção Cultural pelo IFRJ e se especializando em marketing na UVA, já atuou como produtora e pesquisadora musical para o Prêmio da Música Brasileira. Curadora artística e produtora de grandes projetos para empresas como Ancar Ivanhoe e Fever, é sócia e idealizadora da Dharma Produções e mãe da Merlot.</p>
              </div>
              <div class="col s12 div1 hide" id="lohaine_desc">
                <h5 class="white-text text-box"><b>Lohaine Moraes</b></h5>
                <p class="white-text text-box"><i>Assistente de Produção Executiva</i></p>
                <p class="white-text text-box">Bacharel em produção cultural pelo IFRJ, possui 2 anos de experiência em editais públicos e gestão e centros culturais. Atuou na produção e logística de eventos teatrais e exposições de artes visuais, é amante do segmento do audiovisual e assistente de produção executiva na Dharma Produções.</p>
              </div>
              <div class="col s12 div1 hide" id="lohaine_desc">
                <h5 class="white-text text-box"><b>Lohaine Moraes</b></h5>
                <p class="white-text text-box"><i>Assistente de Produção Executiva</i></p>
                <p class="white-text text-box">Bacharel em produção cultural pelo IFRJ, possui 2 anos de experiência em editais públicos e gestão e centros culturais. Atuou na produção e logística de eventos teatrais e exposições de artes visuais, é amante do segmento do audiovisual e assistente de produção executiva na Dharma Produções.</p>
              </div>
              <div class="col s12 div1 hide" id="merlot_desc">
                <h5 class="white-text text-box"><b>Merlot</b></h5>
                <!-- <p class="white-text text-box"><i>Assistente de Produção Executiva</i></p> -->
                <p class="white-text text-box">Mascote da Dharma Produções, a fofurinha para os que visitam o escritório.</p>
              </div>
            </div>
          </div>
        </section>

        <script>
           $(document).ready(function(){
              $('.carousel').carousel();
            });
      function myFunctionNati() {
          $('#nati_desc').removeClass('hide');
          $('#raquel_desc').addClass('hide');
          $('#merlot_desc').addClass('hide');
          $('#lohaine_desc').addClass('hide');
      } 
      function myFunctionRaquel() {
          $('#raquel_desc').removeClass('hide');
          $('#nati_desc').addClass('hide');
          $('#merlot_desc').addClass('hide');
          $('#lohaine_desc').addClass('hide');
      } 
      function myFunctionMerlot() {
          $('#merlot_desc').removeClass('hide');
          $('#raquel_desc').addClass('hide');
          $('#nati_desc').addClass('hide');
          $('#lohaine_desc').addClass('hide');
      } 
      function myFunctionLohaine () {
        $('#lohaine_desc').removeClass('hide');
        $('#merlot_desc').addClass('hide');
        $('#raquel_desc').addClass('hide');
        $('#nati_desc').addClass('hide');
      }
        </script>
<?php include "../footer.php"; ?>



  