<?php
//header
include_once("includes/header.php");
//navigation
include_once("includes/navigation.php");
?>


<!-- voyage -->
<section id="voyage">
    <section>
        <div class="container">
            <div class="row">
                <div class="col-md-6 voyage">
                    <h1>Où souhaitez-vous aller ?</h1>
                    <p>Votre prochain voyage</p>
                    <p>commence sur Airbnb.</p>
                </div>
                <div class="col-md-3">
                </div>
                <div class="col-md-3">
                </div>
            </div>
        </div>
    </section>

    <!-- choix -->
    <section id="choix">
      <div class="container">
        <div class="row">
          <div class="col-md-1">
          </div>
          <div class="col-md-4 contour">
            <label for="">Où</label><br>
            <input type="text" name="" value="Partout" class="choix">
          </div>
          <div class="col-md-4 contour">
            <label for="">Quand</label><br>
            <input type="text" name="" value="Dates indifférentes" class="choix">
          </div>
          <div class="col-md-4 contour">
            <label for="">Voyageurs</label><br>
            <input type="text" name="" value="1 voyageur" class="choix">
            <button type="button" class="btn btn-default">Rechercher</button>
          </div>
          <div class="col-md-2">
          </div>
        </div>
      </div>
    </section>
</section>


<!-- barre de navigation secondaire -->
<!-- options -->
<section id="options">
  <div class="navbar" role="navigation">
    <div class="container">
       <div class="row">
            <ul class="nav navbar-nav navbar-left">
                <li><a href="#">RECOMMANDÉ</a></li>
                <li><a href="#">LOGEMENTS</a></li>
                <li><a href="#">EXPÉRIENCES</a></li>
                <li><a href="#">LIEUX</a></li>
            </ul>
       </div>
    </div>
  </div>
</section>
<!-- la Fin de notre barre de navigation -->














<?php
include_once("includes/footer.php");
?>
