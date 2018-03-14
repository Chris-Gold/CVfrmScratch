<!DOCTYPE html>
<html>

<head>
<?php include 'includes/header.html' ?>
<title>Christian RATSIMBA</title>
<script>
  $(document).ready(function(){
    $("nav").find("li").on("click", "a", function () {
        $('.navbar-collapse').collapse('hide');
        var target = $(this).attr('href');
        $('html, body').stop().animate({scrollTop: $(target).offset().top}, 1000 );
    });
    $("form").submit(function(event){
      event.preventDefault();
      var obj = $("#cont-obj").val();
      var name = $("#cont-name").val();
      var mail = $("#cont-mail").val();
      var msg = $("#cont-msg").val();
      var submit = $("#cont-submit").val();
      $("#confirm").load("mail.php", {
        obj:obj,
        name:name,
        mail:mail,
        msg:msg,
        submit:submit
      });
    })
  //>>>>>>>>>>SCROLL<<<<<<<<<<
  //$(function(){

      $(window).on('scroll', function() {
        var large = $(window).width();
        //console.log(large);
        if(large >= 750){
          var st = window.scrollY;
          var scrn = $(window).height();
          var perso = $('#topPerso');
          var bg = $('#topBG');

          //console.log(st);
          var persoTop = perso.position().top;
          var bg2 = $('#skills');
          var posBg2 = $('#skills').position().top;
          var bg3 = $('#bg3');
          var posBg3 = $('#projects').position().top;
          var bg4 = $('#bg4');
          var posBg4 = $('#exp').position().top;
          var bg5 = $('#bg5');
          var posBg5 = $('#music').position().top;
          var bg6 = $('#contact');
          var posBg6 = bg6.position().top;
          //HEADER
          if ( st >= persoTop && st <= (persoTop + 500)) {
              perso.removeClass("hide");
              bg.removeClass("hide");
              //perso.stop().animate({'left':st+'px' }, 20);
              perso.stop().animate({'background-size':+150+(st*0.06)+'%' }, 20);
              bg.stop().animate({'background-size':+150-(st*0.03)+'%' }, 10);
              bg.stop().animate({'top':+(st*0.06)+'px'}, 10);
          }
          else if (st >= (persoTop + 500)) {
            perso.addClass("hide");
            bg.addClass("hide");
          }
          //Compétences
          if(st >= (posBg2-scrn) && st <=(posBg3)){
            bg2.stop().animate({'background-size':+150-(st-(posBg2-scrn))*0.015+'%'}, 20);
          }
          //Projets
          if(st >= (posBg3-scrn) && st <=(posBg3)){
            bg3.stop().animate({'background-size':+100+(st-(posBg3-scrn))*0.125+'%'}, 20);
          }
          //Experiences
          if(st >= (posBg4-scrn) && st <=(posBg4)){
            bg4.stop().animate({'background-size':+130-(st-(posBg4-scrn))*0.03+'%'}, 20);
          }
          //Contact
          if(st >= (posBg6-scrn) && st <=(posBg6)){
            bg6.stop().animate({'background-size':+100+(st-(posBg6-scrn))*0.062+'%'}, 20);
          }

        }
      })
      //.scroll();
        /////>>>>>>>>IMAGE COMPARISON<<<<<<<<<
      $("#musicImg").twentytwenty({
        before_label : "",
        after_label : ""
      });

    //}
  })
</script>
</head>

<body>
  <header id="home" class="animated fadeIn d-flex container-fluid">

    <div id="topBG" class="banniere"></div>
    <div id="topPerso" class="banniere"></div>

    <div id="chris" class="container d-flex">
      <h1 class="row text-center d-flex align-items-center">
        <div id="first" class="col-sm-12 col-md-6 animated bounceInLeft">Christian</div>
        <div id="last" class="col-sm-12 col-md-6 animated bounceInRight">Ratsimba</div>
      </h1>
    </div>
  </header>

  <nav class="navbar navbar-expand-md navbar-dark bg-dark sticky-top">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#nav" aria-controls="nav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="nav">
      <ul class="navbar-nav mr-auto container justify-content-between">
        <li class="nav-item">
          <a class="nav-link" href="#home" >Accueil<span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#skills">Compétences</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#projects">Projets Développement</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#exp">Expériences</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#music">Musique</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#contact">Contact</a>
        </li>
      </ul>
    </div>
  </nav>

  <section id="infos" class="container-fluid">
    <div class="container animated slideInUp ">
      <div class="row jumbotron">
        <ul class="list-unstyled col-sm-12 col-md-6 text-center">
          <li>32 ans  03/07/1985</li>
          <li>80 avenue du sablard</li>
          <li>87000 LIMOGES</li>
          <li><a href="tel:+33667323575">06-67-32-35-75</a></li>
          <li><a href="mailto:ratsimbachris@hotmail.fr">ratsimbachris@hotmail.fr</a></li>
          <li class="text-center">
            <a class="fb" href="https://www.facebook.com/chris.rtsmb.5" title="Facebook"><i class="fab fa-facebook-square fa-2x"></i></a>
            <a id="lkd" href="https://www.linkedin.com/in/christian-ratsimba-944345155/" title="Linkedin" ><i class="fab fa-linkedin-in fa-2x"></i></a>
            <a id="git" href="https://github.com/Chris-Gold" title="GitHub"><i class="fab fa-github-square fa-2x"></i></a>
          </li>
        </ul>
        <iframe class="col-sm-12 col-md-6 text-center" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2780.0821315179082!2d1.2737806147841162!3d45.82963791700674!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47f9349a924700c3%3A0x46914ec744289d79!2s80+Avenue+du+Sablard%2C+87000+Limoges!5e0!3m2!1sfr!2sfr!4v1518283403890" frameborder="0" style="border:0" allowfullscreen></iframe>
      </div>
    </div>
  </section>

  <section id="skills" class='container-fluid'>

      <h2 id="bg2" class="text-center col-12">Compétences</h2>
      <div class='row text-center'>
        <div id='info' class='col-sm-12 col-lg-4 d-flex align-items-center'>
          <div class="jumbotron">
            <h3>Informatique</h3>
       			  <h6>Maintenance élémentaire</h6>
              <p>(anti-virus, anti-malware, formatage et réinstallation du système d'exploitation Windows, MAJ pilotes matériel)</p>
       			  <h6>Langages</h6>
              <p>HTML5, CSS3, JS, PHP, MySQL</p>
              <h6>Framework</h6>
              <p>Bootstrap4, Jquery</p>
       			  <h6>M.A.O.</h6>
              <p>Logiciels Traktor, FL Studio, Ableton</p>
          </div>
        </div>
        <div id='comm' class='col-sm12 col-lg-4 d-flex align-items-center'>
          <div class="jumbotron">
            <h3>Communication</h3>
            <h6>Générale</h6>
            <p>Anglais courant, bon relationnel client</p>
            <h6>Evénementielle</h6>
            <p>réseaux sociaux, affichage, radios, communiqués de presse</p>
            <p>Démarchage clients/partenaires/artistes (managers)</p>
            <p>Édition de contrats/factures</p>
          </div>
        </div>
        <div id='elec' class='col-sm12 col-lg-4 d-flex align-items-center'>
          <div class="jumbotron">
            <h3>Électricité</h3>
       			  <p>Pose de canalisation électrique (goulottes, moulures, tubes IRL)</p>
       			  <p>Raccordement appareillage électrique basse tension (luminaires, interrupteurs, prises...) et très basse tension (centrales et détecteurs incendie, prises téléphone/réseaux RJ45)</p>
       			  <p>Installation et raccordement de matériel de sonorisation (haut-parleurs, amplificateurs, tables de mixage, instruments, câbles RCA/jack/XLR/midi)</p>
          </div>
        </div>
      </div>

  </section>

  <section id="projects" class="container-fluid text-center">
    <h2 id="bg3" class="col-12">Projets Développement Web</h2>
    <div class="container">
      <div class="row jumbotron">
        <div class="col-sm-12 col-md-6" title="Jeu vidéo type Space Invaders sur le theme Pokemon">
          <a href='https://github.com/Chris-Gold/Pokemon-invaders.git'><p><i class="fas fa-gamepad fa-5x"></i></p>Pokemon Invaders</a>
        </div>
        <div class="col-sm-12 col-md-6" title="Explorateur de fichier">
          <a href='https://github.com/Chris-Gold/navigateur.git'><p><i class="fas fa-folder fa-5x"></i></p>NAVIGAJAXATOR</a>
        </div>
        <div class="col-sm-12 col-md-6" title="Systeme de Blog en lien avec une Base de Données">
          <a href='https://github.com/Chris-Gold/blog.git'><p><i class="fab fa-blogger fa-5x"></i></p>Blog C.S.A.</a>
        </div>
        <div class="col-sm-12 col-md-6" title="Integration d'un theme sous Wordpress">
          <a href='https://github.com/Chris-Gold/wordpress.git'><p><i class="fab fa-wordpress-simple fa-5x"></i></p>Theme Wordpress</a>
        </div>
        <div class="col-12 text-center" title="Refactoring et amelioration visuel d'un code existant avec theme Simpsons">
          <a href='https://github.com/Chris-Gold/Navimpson.git'><p><i class="fas fa-eye fa-5x"></i></p>Navimpson</a>
        </div>
      </div>
    </div>
  </section>

  <section id="exp" class=" text-center">
    <h2 id="bg4" class="col-12">Expériences</h2>
      <div id="carousel" class="carousel slide" >
        <div class="carousel-inner">

          <div id="show" class="carousel-item active jumbotron ">
            <div class="sub jumbotron">
              <h3>Spectacle vivant</h3>
                <ul class="list-unstyled">
                  <li><strong>Technicien plateau</strong> en contrats ponctuels avec les sociétés <a href="http://www.euterpepromotion.fr/">EUTERPE Promotion</a>, <a href="http://www.theatrefemina.fr/">Alhambra Production</a> et <a href="http://www.agoprod.fr/">Alternative Grand Ouest</a> depuis octobre 2015</li>
                  <li><strong>Agent de contrôle</strong> (2009 et 2010) / <strong>Monteur</strong> (2011) / <strong>Magasinier livreur installateur</strong> (2014) pour le festival <a href="http://www.printemps-bourges.com/fr/">Le Printemps de Bourges</a></li>
                  <li><strong>Chargé de communication et organisation de concerts</strong> en bénévolat pour l'<a href="https://youtu.be/fNAIz1MiQPU">Association Snake's House</a> de Limoges depuis avril 2016</li>
                  <li><strong>Prestations scéniques</strong> (disc jockey) depuis 2010 <a href="#music">(liens)</a></li>
                </ul>
            </div>
          </div>

          <div id="btp" class="carousel-item jumbotron">
            <div class="sub jumbotron">
              <h3>Bâtiment et Travaux publics</h3>
                <ul class="list-unstyled">
                  <li><strong>Électricien</strong> en bâtiment (tertiaire) en contrat de professionnalisation pour <a href="https://www.avenirelec.fr/">Avenir Électrique de Limoges</a> de  septembre 2011 à juillet 2013</li>
                  <li><strong>CAP PRO-Elec</strong> obtenue au <a href="http://www.cfabatiment-limoges.fr/">CFA Batiment Limoges</a> en 2012</li>
                  <li><strong>Manœuvre</strong> sur chantier en interim pour <a href="http://www.dr-equipement.fr/">D.R. Équipement</a> en 2009</li>
                </ul>
            </div>
          </div>

          <div id="merch" class="carousel-item jumbotron">
            <div class="sub jumbotron">
              <h3>Commerce</h3>
                <ul class="list-unstyled">
                  <li><strong>Vendeur</strong> caissier <a href="http://www.au-nenuphar-montlucon.fr/">Au Nénuphar</a>, magasin de chasse et pêche à Montluçon en 2007</li>
                  <li><strong>Bac STT Actions et Communications Commerciales</strong> obtenue au lycée <a href="http://paul-constans.fr/">Paul Constans</a> à Montluçon en 2005</li>
                </ul>
            </div>
          </div>

        </div>
        <a class="carousel-control-prev" href="#carousel" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carousel" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
  </section>

  <section id="music" class="container-fluid ">
    <h2 id="bg5" class="col-12">Musique</h2>
      <div class="row">
        <div id="seuh" class="col-sm-12 col-md-3 text-center container d-flex">
          <h3>SeuH KrY</h3>
            <div class="">
              <a href="https://www.facebook.com/SeuHKrY/"><i class="fab fa-facebook-square fa-7x col-12 fb"></i></a>
            </div>
            <div class="">
              <a href="https://www.mixcloud.com/SeuH_KrY/"><i class="fab fa-mixcloud fa-7x col-12"></i></a>
            </div>
            <div class="">
              <a href="https://soundcloud.com/seuhkry"><i class="fab fa-soundcloud fa-7x col-12"></i></a>
            </div>
        </div>

        <div id="slide" class="col-6 container-fluid">
          <div id="musicImg">
            <img class="comparison-image" src="img/seuh3.png" alt="">
            <img class="comparison-image" src="img/shake.jpg" alt="">
          </div>
        </div>

        <div id="shake" class="col-sm-12 col-md-3 text-center container d-flex">
          <h3>Shake dB</h3>
              <div class="">
                <a href="https://www.facebook.com/ShakeDnB/"><i class="fab fa-facebook-square fa-6x col-12 fb"></i></a>
              </div>
              <div class="">
                <a href="https://www.youtube.com/user/shake87000/videos"><i class="fab fa-youtube fa-6x col-12"></i></a>
              </div>
              <div class="">
                <a href="https://www.mixcloud.com/shakedabooty"><i class="fab fa-mixcloud fa-6x col-12"></i></a>
              </div>
              <div class="">
                <a href="https://soundcloud.com/shake-db"><i class="fab fa-soundcloud fa-6x col-12"></i></a>
              </div>
        </div>
      </div>
  </section>

  <section id="contact" class="container-fluid">
    <h2 class="col-12">Contactez moi</h2>
    <div class="container">
      <form method="post" action="mail.php" class="row jumbotron">

        <div class="col-sm-12 col-md-6">

            <div id="form-sujet" class="form-group custom-control-inline">
              <div class="input-group-prepend">
                <label class="input-group-text" for="cont-obj">Objet</label>
              </div>
              <select id="cont-obj" class="custom-select" name="obj">
                <option selected value="">Choisissez...</option>
                <option value="perso">Personnel</option>
                <option value="pro">Professionnel</option>
                <option value="shake">Booking Shake dB</option>
                <option value="seuh">Booking SeuH KrY</option>
              </select>
            </div>

            <div id="form-name" class="form-group">
              <input id="cont-name" type="text" class="form-control" name="nom" placeholder="Votre nom">
            </div>

            <div id="form-mail" class="form-group">
              <input id="cont-mail" type="email" class="form-control" name="mail" placeholder="Votre e-mail">
            </div>

        </div>

        <div id="form-message" class="form-group col-sm-12 col-md-6">
          <textarea id="cont-msg" class="form-control" name="message" placeholder="Tapez votre message"></textarea>
        </div>

        <div id="confirm" class="col-sm-12 col-md-8">

        </div>

        <div id="form-submit" class="form-group col-sm-12 col-md-4">
          <button id="cont-submit" type="submit" class="btn btn-primary">Envoyer</button>
        </div>
      </form>
    </div>
  </section>

  <footer>
    <small>q;) Proudly made by myself - Thanks for watching. (!b</small>
  </footer>

  <?php include 'includes/base_js.html' ?>
</body>

</html>
