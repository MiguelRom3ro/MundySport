<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Template</title>
    <!--Cambiar titulo dependiendo lo que les toco-->

    <!--Archivos necesarios para bootstrap-->
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp"
      crossorigin="anonymous"
    />

    <!--Estilos personalizados necesarios-->
    <style>
      /* Clase para el color del Navbar */
      .colorNav {
        background-color: #d5d5d5;
      }
      /* Clase para el color del Footer */
      .colorF {
        background-color: black;
      }
      /* Clase para el color del texto del Footer */
      .textCF {
        color: #d5d5d5;
      }
      /* Clase para el tamanio de letra del Footer */
      .fontSizeFooter {
        font-size: smaller;
      }
    </style>
  </head>

  <body>
    <!--Navbar-->
      <?php
        include "components/navbar.php";
      ?>

    <!--A continuacion coloquen todo su codigo-->

    <div
      id="carouselExampleControls"
      class="carousel slide"
      data-bs-ride="carousel"
    >
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img
            src="recourses/img/adidas-Brand_advertising_wallpaper_1366x768.jpg"
            class="d-block w-100"
            alt="adidas"
          />
        </div>
        <div class="carousel-item">
          <img
            src="recourses/img/TenisWEB_Cover.PNG"
            class="d-block w-100"
            alt="teninis"
          />
        </div>
        <div class="carousel-item">
          <img
            src="recourses/img/Retro.PNG"
            class="d-block w-100"
            alt="tenis2"
          />
        </div>
      </div>
      <button
        class="carousel-control-prev"
        type="button"
        data-bs-target="#carouselExampleControls"
        data-bs-slide="prev"
      >
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Anterior</span>
      </button>
      <button
        class="carousel-control-next"
        type="button"
        data-bs-target="#carouselExampleControls"
        data-bs-slide="next"
      >
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Siguiente</span>
      </button>
    </div>

    <!--Esta es la parte de las cards-->

    <div class="container mt-3">
      <h3>Tendencias</h3>
    </div>

    <div class="container ">
      <div class="row justify-content-between">
        <div class="card col-md-4"  style="width: 25rem; height: 27rem;">
          <img
            src="recourses/img/D_735789-MLM43865609917_102020-O.jpg"
            class="card-img-top"
            alt="nike1"
            height="190rem"
          />
          <div class="container">
            <div class="row">
          <div class="card-body">
            <h6 class="card-text">
              NIKE
            </h6>
            <p>
              Tenis para hombre Nike Court Vision Low Next Nature
            </p>
            <h4>$1,406</h4>
            <div class="col align-self-center">
            <p class="textCard">33% OFF</p>
          </div>
            <h5 class="textCard">Envio gratis FULL</h5>
          </div>
        </div>
      </div>
    </div>

        <div class="card col-md-4" style="width: 25rem; height: 27rem;" >
          <img
            src="recourses/img/D_NQ_NP_2X_859405-MLM51823982451_102022-F.PNG"
            class="card-img-top"
            alt="nike2"
            height="190rem"
          />
          <div class="card-body">
            <h6 class="card-text">
              NIKE
            </h6>
            <p>Tennis blancos para hombre Nike Court Legacy </p>
            <h4>$1,599</h4>
            <p>en 12x $162.34</p>
            <h5 class="textCard">Envio gratis FULL</h5>
          </div>
        </div>

        <div class="card col-md-4" style="width: 25rem; height: 27rem;">
          <img
            src="recourses/img/cars.PNG"
            class="card-img-top"
            alt="teniscars"
            height="190rem"
          />
          <div class="card-body">
            <h6 class="card-text">
              CARS TENNIS
            </h6>
            <p>
              Tennis con diseño de cars para imresionar a las chicas 
              y que te digan tranquilo velocista
            </p>
            <h4>$299</h4>
            <h5 class="textCard">Envio gratis apartir de 2 Unidades</h5>
          </div>
        </div>

      </div>
    </div>
    <br>
    
    <div class="container mt-3">

    <h3>
      Mas Vendido
    </h3>
  </div>
    
    <div class="container">
      <div class="row justify-content-between">
        <div class="card col-md-4" style="width: 25rem; height: 27rem;">
          <img
            src="recourses/img/negrosNike.PNG"
            class="card-img-top"
            alt="nike3"
            height="190rem"
          />
          <div class="card-body">
            <h6 class="card-text">
              NIKE BLACK
            </h6>
            <p>
              Tennis para mujer Nike flight legacy
            </p>
            <h4>$1,689</h4>
            <P>en 12x 143.33</P>
            <h5 class="textCard">Envio gratis FULL</h5>
          </div>
        </div>

        <div class="card col-md-4" style="width: 25rem; height: 27rem;">
          <img
            src="recourses/img/adidasBln2.PNG"
            class="card-img-top"
            alt="adidasneg"
            height="190rem"
            width="180"
          />
          <div class="card-body">
            <h6 class="card-text">
              ADIDAS
            </h6>
            <p>Tennis advange (Unisex) Blanco-adidas</p>
            <h4>$999</h4>
            <p class="textCard">10% OFF</p>
            <h5 class="textCard">Envio gratis FULL</h5>
            
          </div>
        </div>

        <div class="card col-md-4" style="width: 25rem; height: 27rem;">
          <img
            src="recourses/img/adidasblu.PNG"
            class="card-img-top"
            alt="nikeblu"
            height="190rem"
          />
          <div class="card-body">
            <h6 class="card-text">
              NIKE
            </h6>
            <p>Tenis Para Niño Talla Grande Nike Court Borough Mid 2</p>
            <h4>$1,349</h4>
            <p class="textCard">10% OFF</p>
            <h5 class="textCard">Envio Gratis FULL</h5>
          </div>
        </div>

      </div>
    </div>

    <!--Arriba de este comentario en esta seccion-->

    <!--Footer-->
    <br /><br />
    <?php
      include "components/footer.php";
    ?>
  </body>
</html>
