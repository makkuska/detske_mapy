<!DOCTYPE html>
<html lang="cs-cz" dir="ltr">
  <head>
    <meta charset="utf-8" />
    <?php include_once("head.html") ?>

    <title>Soutěž dětské mapy Barbary Petchenik</title>
  </head>

  <body>
    <div class="container">
      <div class="jumbotron">
        <h1>Soutěž děstké mapy Barbary Petchenic</h1>
      </div>

      <!-- Navigace -->
      <div class="navbar navbar-inverse">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand visible-xs" href="#">Cena Barbary Petchenik</a>
        </div>
        <div class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <li class="active"><a href="index.php">Úvod</a></li>
            <li><a href="pravidla.php">Pravidla soutěže</a></li>
            <li><a href="aktualni.php">Aktuální ročník</a></li>
            <!-- speciální vzhled navigace pro PC, noteboky -->
            <li class="dropdown visible-lg visible-md visible-sm">
            <a href="#" class="dropdown-toggled" data-toggle="dropdown">Historie <b class="caret"></b></a>
            <ul class="dropdown-menu">
              <li><a href="hist_2013.php">2013</a></li>
              <li><a href="hist_2011.php">2011</a></li>
              <li><a href="hist_2009.php">Do roku 2009</a></li>
            </ul>
            </li>
            <li class="dropdown visible-lg visible-md visible-sm">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Fotogalerie <b class="caret"></b></a>
            <ul class="dropdown-menu">
              <li><a href="foto_2013.php">2013</a></li>
              <li><a href="foto_2011.php">2011</a></li>
            </ul>
            </li>
            <li><a class="visible-lg visible-md visible-sm" href="kontakt.php">Kontakt a přihláška</a></li>

            <!-- speciální vzhled navigace pro mobilní telefony -->
            <li><a class="visible-xs" href="kontakt.php">Kontakt a přihláška</a></li>
            <div class="container visible-xs">
              <li class="visible-xs page-header bily_text">Historie</li>
            </div>
            <li><a class="visible-xs" href="hist_2013.php">2013</a></li>
            <li><a class="visible-xs" href="hist_2011.php">2011</a></li>
            <li><a class="visible-xs" href="hist_2009.php">Do roku 2009</a></li>
            <div class="container visible-xs">
              <li class="visible-xs page-header bily_text">Fotogalerie</li>
            </div>
            <li><a class="visible-xs" href="foto_2013.php">2013</a></li>
            <li><a class="visible-xs" href="foto_2011.php">2011</a></li>

          </ul>

        </div><!--/.nav-collapse -->
      </div>

      <!-- Main component for a primary marketing message or call to action -->
      <div class="jumbotron">
        <h1>Navbar example</h1>
        <p>This example is a quick exercise to illustrate how the default, static navbar and fixed to top navbar work. It includes the responsive CSS and HTML, so it also adapts to your viewport and device.</p>
        <p>
        <a class="btn btn-lg btn-primary" href="../../components/#navbar">View navbar docs &raquo;</a>
        </p>
      </div>

      <!-- HLAVNÍ TĚLO STRÁNKY, ZDE EDITOVAT VEŠKERÝ TEXT -->
      <div class="container"> 
        <div class="row container">
          <p>Kartografická společnost České republiky  
          pořádá ve spolupráci  
          s Katedrou geoinformatiky Univerzity Palackého v Olomouci  
          národní kolo umělecko‐kartografické soutěže  
          Dětská mapa světa,  
          tentokrát se zaměřením na téma 
          Moje místo v dnešním světě 
          věkové kategorie: 4 – 9 let, 9 – 12 roků, 13 – 16 roků</p>  
          <p>Cena Barbary Petchenik byla založena Mezinárodní
          kartografickou asociací ICA v roce 1993 jako památka na Barbaru
          Petchenik, bývalou viceprezidentku ICA a kartografku, která se po
          celý život zabývala mapami ve vztahu k dětem. Cílem Ceny je
          zlepšit tvůrčí představivost dětí o světě. Cena je udělována
          každé 2 roky na konferenci ICA jejími nejvyššími zástupci vždy
          alespoň jedné práci z každého kontinentu se zvláštním důrazem na
          věk zúčastněných dětí. Oceněné práce jsou navrženy k prezentaci
          UNICEF na pohlednicích.</p>

          <p>Cílem soutěže je rozvinout tvůrčí vyjadřovaní dětí o světě pro
          zlepšení jejich grafického uvědomění a prohloubit jejich hlubšího
          vnímání o životním prostředí. ICA využívá přihlášené práce i k
          výzkumným účelům, obrázky se objevují na summitech Organizace
          spojených národů nebo na plakátech UNICEF. Z každé země lze
          přihlásit do mezinárodního kola maximálně 3 práce z každé
          kategorie. Děti z českých zemí se soutěže pravidelně účastní od
          roku 1999. Mezinárodního kola se vždy účastní 6 až 9 dětských
          prací.</p>
        </div> <!-- /container -->
      </div> <!-- /container -->

      <!-- vložená patička: @2014 Katedra geoinformatiky -->
      <?php include_once("paticka.html") ?>

    </div> <!-- /container -->
  </div> <!-- /container -->

</body>
</html>