<!DOCTYPE html>
<html>

<head>
  <title>Info | Glasometar.ba</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <link type="image/x-icon" href="../image/favicon.ico" rel="shortcut icon">
  <link rel="stylesheet" href="http://code.jquery.com/mobile/1.2.1/jquery.mobile-1.2.1.min.css" />
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css" rel="stylesheet">
    <link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.min.css" rel="stylesheet">
  <script src="http://code.jquery.com/jquery-1.8.3.min.js"></script>
  <script src="http://code.jquery.com/mobile/1.2.1/jquery.mobile-1.2.1.min.js"></script>
  <link rel="stylesheet" href="../css/style.css" />
</head>


<body>
  <div data-role="page" data-title="Info | VolebníKalkulačka.cz" data-theme="f" class='page type-interior' style="font-family:Helvetica,Arial,sans-serif">

    <div data-role="header" data-theme="g">
      <a href="/" data-role="button" data-icon="home" data-iconpos="notext" data-ajax="false">Početna</a>
      <a href="/info" data-icon="info" data-iconpos="notext" data-ajax="false">Info</a>
      <h3 class="h1">Info | Glasometar.ba</h3>
    </div>
    <!-- /header -->

    <div data-role="content">
      <div class="col-md-6 col-md-offset-3">

        <h2>O projektu</h2>

        <a name="about"></a>
        <p> Glasomater je internet aplikacija koja omogućava građanima i građankama da uporede svoje stavove sa stavovima 18
          najrelevantnijih političkih partija u BiH i na taj način im olakšava odluku na predstojećim izborima.
          <br>
          <p>Glasometar je alatka za informiranje građana i građanki o stavovima partija u odnosu na pitanja iz domena politike,
            ekonomije, školstva, zdravstva i ostalih najvažnijih sfera života u BiH.</p>
          <p>
            Glasometar je korišten i u toku Opštih/Općih izbora 2010 godine u BiH, i već  tada se  pokazalo da se radi o jako dobrom
            alatu za informisanje građana, pogotovo u predizborno vrijeme,  i da moze biti odlučujući u smislu davanja povjerenje
            birača nekoj od partija na izborima.</p>
          <p> Za Opšte/Opće izbore 2014. godine  aplikacija
            <a href="http://www.glasometar.ba/">glasometar.ba</a> je razvijena u saradnji sa organizacijom
            <a href="http://www.kohovolit.eu/">Kohovolit</a>, i radi se o tehničkom rješenju koje je do sada korišteno u velikom broju zemalja EU.
            <br> Sve partije koje su uvrštene u ovu aplikaciju pozvane su da odgovore na upitnik i daju obrazoloženja svojih
            odgovora na pitanja iz Glasometra.  Za dio partija koji iz razlicitih razloga nije odgovorio na pitanja iz Glasometra,
            u aplikaciju su uvršteni  oni odgovori  i stavovi partija koji su do sada bili javno prezentirani od strane funkcionera
            partija, njihovih izabranih zvaničnika, kao i u zvanicnim dokumentima partija. Te partije su: Stranka demokratske
            akcije, Socijaldemokratska partija, Stranka nezavisnih socijaldemokrata, Srpska demokratska stranka, Hrvatska
            demokratska zajednica, Hrvatska demokratska zajednica 1990, Savez za bolju budućnost, Demokratska fronta, Narodna
            stranka radom za boljitak, Demokratski narodni savez, Partija demokratskog progresa, Hrvatska stranka prava,
            Stranka za BiH, Posavska stranka, Socijalistička partija Republike Srpske.</p>
          <p>Partije Demokratska narodna zajednica, Bosanska stranka – Mirnes Ajanović, Posavska stranka i Naša stranka  su
            odgovorile na upitnik Glasometra i njihove odgovore prenosimo u integralnom obliku. </p>
          <p>
            <h3>Opis algoritma</h3>
            <p>Na pitanja građani mogu odgovoriti sa Da/Ne/Ne znam - i samo pitanja na koja su korisnici odgovorili koristiće
              se u daljem algoritmu. Ukoliko je korisnicki odgovor ¨Da¨ tada se svim partijama koje su odgovorile sa ¨Da¨
              na isto pitanje dodaje po jedna bod, a partijama koje su odgvorile sa ¨Ne¨ u ovom slucaju jedan bod oduzima.
              U slučaju odgovora ¨Ne znam/Ne zanima me¨ pitanje se preskače u fazi izračuna stepena slaganja korisničkih
              odgovora sa odgovorom partija.
            </p>
            <p>Za ona pitanja na koja građani ne daju odgovor ta pitanja neće biti uzeta u razmatranje kada je u pitanju analiza
              rezultata slaganja odgovora partija sa odgovorima korisnika aplikacije.</p>
            <p> Također, kako bi se stepen slaganja odgovora korisnika sa odgvorima partija dodatno diferencirao, korisnicima
              smo ostavili mogućnost da na kraju upitnika ozaberu pitanja koja su im važnije, i time tim konkretnim pitanjima
              dodijele veći značaj u okviru aplikacije. U ovom slučaju, partije koje su na tako označeno pitanje imale isti
              odgovor kao i sam korisnik, će imati ostvariti bolji rezultat, u odnosu na partije koje su imale isti apsolutni
              broj slaganja sa odgovrima tog korisnika, ali suprotan u ovom konkretnom slučaju. U slučaju da su dvije ili
              više partija imale isti broj slaganja sa odgvorima korisnika, njihov rang ce biti rasporedjen potpuno nasumično
              i raspored mijesta će se mijenjati se sa svakim ponovnim učitavanjem konkretnih korisničkih rezultata. </p>
      </div>
    </div>
    <!-- /content -->

    <!-- footer -->
    <div data-role="footer" data-theme="g">
      <div>U.G. Zašto ne | Glasometar.ba</div>
      <div class="footerContainer">
        <div class="right computer">
          <a href="http://kohovolit.eu">
            <img src="../image/kohovolit-logo-dark-small.png" title="KohoVolit.eu" alt="KohoVolit.eu" />
          </a>
        </div>
      </div>
    </div>
    <!-- /footer -->

    <script type="text/javascript">
      var _gaq = _gaq || [];
      _gaq.push(['_setAccount', 'UA-8592359-7']);
      _gaq.push(['_trackPageview']);

      (function () {
        var ga = document.createElement('script');
        ga.type = 'text/javascript';
        ga.async = true;
        ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') +
          '.google-analytics.com/ga.js';
        var s = document.getElementsByTagName('script')[0];
        s.parentNode.insertBefore(ga, s);
      })();
    </script>

  </div>
  <!-- /page -->

</body>

</html>