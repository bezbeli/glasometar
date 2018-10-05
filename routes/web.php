<?php

Route::get('/', function () {
    return view('welcome');
});

Route::get('/odgovori-glasaca', 'QuestionController@index');
Route::get('/odgovori-partija', 'PartyController@index');
Route::get('/prebroj', 'ResultController@countResults');

Route::get('/info', function () {
    $content = '
        <h1>O projektu</h1>
        <p>Glasomater je internet aplikacija koja omogućava građanima i građankama da uporede svoje stavove sa stavovima 20 političkih partija koje će učestvovati na opštim izborima u BiH 2018. godine. Na taj način, ova aplikacija ima cilj da im olakša odluku na predstojećim izborima.</p>
        <p>Glasometar sadrži upitnik od 33 pitanja koja su u proteklom periodu imala najviše pažnje javnosti ili su bila važna u političkom diskursu. Ova pitanja su iz domena politike, ekonomije, školstva, zdravstva, međunarodnih odnosa, kao i većine ostalih najvažnijih sfera političkog života u BiH.</p>
        <p>Glasometar je korišten i u toku Opštih/Općih izbora 2010., kao i 2014. godine u BiH, i već tada se pokazalo da se radi o jednoj od najinformativnijih online alatki za informisanje građana i građanki o stavovima partija. Dosadašnje verzije Glasometra je koristilo preko 60.000 korisnika.</p>
        <p>Za Opšte/Opće izbore 2018. godine aplikacija Glasometar je razvijena u saradnji sa organizacijom Kohovolit, i radi se o tehničkom rješenju koje je do sada korišteno u velikom broju zemalja EU. Pitanja sa socio-ekonomskom tematikom su rađena u saradnji sa Centrom za politike i upravljanje, a kompletan projekat je rađen uz podršku CCFD Terre Solidaire i CIPE - Center for International Private Enterprise.</p>
        <p>Sve partije koje su uvrštene u ovu aplikaciju pozvane su da odgovore na upitnik i daju obrazoloženja svojih odgovora na pitanja iz Glasometra. Preko 30 partija je dobilo upitnik, a u finalnoj verziji aplikacije se nalazi 20 partija, dok je 12 partije odgovorilo na upitnik. Za dio partija koje iz različitih razloga nisu odgovorile na upitnik, a za koje je to bilo moguće, u aplikaciju su uvršteni odgovori prema dostupnim podacima o njihovom djelovanju i javnim izjavama. Za partije koje nisu odgovorile na upitnik, izvori za odgovaranje na pitanja su aktivnosti u parlamentima, vladama i drugim institucijama vlasti, izjave zvaničnika, programski dokumenti, aktivnosti članova partije, a u nekim slučajevima i djelovanje na sličnim pitanjima, kao i aktivnosti i stavovi koalicionih partnera, ukoliko te partije nisu imale svojih stavova o određenim pitanjima. U slučaju partija koje su odgovorile na upitnik, odgovori koje su dali u upitniku su mijenjani samo ukoliko se jasno može dokazati da su aktivnosti partije ili njenih zvaničnika na pomenutim temama išle u suprotnom pravcu od odgovora koji su dale u upitniku.</p>

        <h3>Opis algoritma</h3>
        <p>Na pitanja građani mogu odgovoriti sa Da/Ne/Ne znam - i samo pitanja na koja su korisnici odgovorili koristiće se u daljem algoritmu. Ukoliko je korisnički odgovor isti kao i odgovor partije, onda će tim partijama biti dodijeljen jedan bod u ukupnom zbiru slaganja sa korisnik. Ukoliko korisnik na pitanje ne da odgovor, ili da odgovor "Ne znam", ta pitanja neće biti dio računanja rezultata za tog korisnika. Procenat slaganja korisnika sa partijom se računa kao ukupni procenat bodova koje je pojedinačna partija dobila podijeljen sa ukupnim brojem pitanja na koja je korisnik odgovorio.</p>
        <p>Također, kako bi se stepen slaganja odgovora korisnika sa odgovorima partija dodatno diferencirao, korisnicima smo ostavili mogućnost da na kraju upitnika izaberu pitanja koja su im važnija, te će ta pitanja u računanju ukupnog procenta slaganja imati veći udio.</p>
        <p>U slučaju da su dvije ili više partija imale isti procenat slaganja sa korisnikom, njihov rang ce biti raspoređen potpuno nasumično i njihov raspored će se mijenjati se sa svakim ponovnim učitavanjem konkretnih korisničkih rezultata.</p>
    ';

    return view('page', compact('content'));
});