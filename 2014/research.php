<?php
session_start();

// put full path to Smarty.class.php
require('/usr/local/lib/php/Smarty-3.1.19/libs/Smarty.class.php');
$smarty = new Smarty();

$smarty->setTemplateDir('../smarty/templates/eu2014');
$smarty->setCompileDir('../smarty/templates_c');

//get the utm (campaign) links
// http://www.mequoda.com/articles/subscription_websites/the-mysterious-utm-code-explained/
$us = array('source','medium','campaign','unique');
$utms = array();
foreach ($us as $u) {
  if (isset($_GET['utm_'.$u])) {
    $utms[$u] = sanitize(($_GET['utm_'.$u]));
  }
}
$data['utm'] = $utms;

$data['sex'] = array(
  array('woman', 'Ženski'),
  array('man', ' Muški'),
);

$data['education'] = array(
  array('primary', 'Osnovno'),
  array('secondary', 'Srednjoškosko'),
  array('terciary','Fakultetsko'),
  array('other','Ostalo')
);

$data['nationality'] = array(
  array('bosnian', 'Bošnjak'),
  array('serbian', 'Srbin'),
  array('croatian','Hrvat'),
  array('other','Ostali')
);

$data['municipality'] = array(
array('banovici-unsko-sanski-kanton','Banovići Unsko-sanski Kanton'),
array('berkovici','Berkovići'),
array('bijeljina','Bijeljina'),
array('bileca','Bileća'),
array('bos-grahovo','Bos. Grahovo'),
array('bosanska-kostajnica','Bosanska Kostajnica'),
array('bosanska-krupa','Bosanska Krupa'),
array('bosanski-brod','Bosanski Brod'),
array('bosanski-petrovac','Bosanski Petrovac'),
array('bratunac','Bratunac'),
array('brcko','Brčko'),
array('breza','Breza'),
array('bugojno','Bugojno'),
array('busovaca','Busovača'),
array('buzim','Bužim'),
array('cajnice','Čajniče'),
array('capljina','Čapljina'),
array('celic','Čelić'),
array('celinac','Čelinac'),
array('citluk','Čitluk'),
array('derventa','Derventa'),
array('doboj','Doboj'),
array('doboj-istok','Doboj Istok'),
array('doboj-jug','Doboj Jug'),
array('dobretici','Dobretići'),
array('domaljevac-samac','Domaljevac - Šamac'),
array('donji-vakuf','Donji Vakuf'),
array('donji-zabar','Donji Žabar'),
array('drvar','Drvar'),
array('foca','Foča'),
array('foca-ustikolina','Foča - Ustikolina'),
array('fojnica','Fojnica'),
array('g-vakuf-uskoplje','G. Vakuf - Uskoplje'),
array('gacko','Gacko'),
array('glamoc','Glamoč'),
array('gorazde','Goražde'),
array('gracanica','Gračanica'),
array('grad-banja-luka','Grad Banja Luka'),
array('grad-istocno-sarajevo','Grad Istočno Sarajevo'),
array('gradacac','Gradačac'),
array('gradiska','Gradiška'),
array('grude','Grude'),
array('hadzici','Hadžići'),
array('han-pijesak','Han Pijesak'),
array('ilidza','Ilidža'),
array('ilijas','Ilijaš'),
array('istocni-drvar','Istočni Drvar'),
array('istocni-mostar','Istočni Mostar'),
array('istocni-stari-grad','Istočni Stari Grad'),
array('jablanica','Jablanica'),
array('jajce','Jajce'),
array('jezero','Jezero'),
array('kakanj','Kakanj'),
array('kalesija','Kalesija'),
array('kalinovik','Kalinovik'),
array('kiseljak','Kiseljak'),
array('kladanj','Kladanj'),
array('kljuc','Ključ'),
array('knezevo','Kneževo'),
array('konjic','Konjic'),
array('kotor-varos','Kotor Varoš'),
array('kozarska-dubica','Kozarska Dubica'),
array('kresevo','Kreševo'),
array('krupa-na-uni','Krupa Na Uni'),
array('kupres','Kupres'),
array('kupres','Kupres'),
array('laktasi','Laktaši'),
array('livno','Livno'),
array('ljubinje','Ljubinje'),
array('ljubuski','Ljubuški'),
array('lopare','Lopare'),
array('lukavac','Lukavac'),
array('lukavica','Lukavica'),
array('maglaj','Maglaj'),
array('milici','Milići'),
array('modrica','Modriča'),
array('mostar','Mostar'),
array('mrkonjic-grad','Mrkonjić Grad'),
array('neum','Neum'),
array('nevesinje','Nevesinje'),
array('novi-grad','Novi Grad'),
array('novi-travnik','Novi Travnik'),
array('odzak','Odžak'),
array('olovo','Olovo'),
array('opstina-istocna-ilidza','Opština Istočna Ilidža'),
array('orasje','Orašje'),
array('osmaci','Osmaci'),
array('ostra-luka','Oštra Luka'),
array('pale','Pale'),
array('pale-praca','Pale - Prača'),
array('pelagicevo','Pelagićevo'),
array('petrovac','Petrovac'),
array('petrovo','Petrovo'),
array('posusje','Posušje'),
array('prijedor','Prijedor'),
array('prnjavor','Prnjavor'),
array('prozor-rama','Prozor-rama'),
array('ravno','Ravno'),
array('ribnik','Ribnik'),
array('rogatica','Rogatica'),
array('rudo','Rudo'),
array('samac','Šamac'),
array('sanski-most','Sanski Most'),
array('sapna','Sapna'),
array('sarajevo','Sarajevo'),
array('sekovici','Šekovići'),
array('sipovo','Šipovo'),
array('siroki-brijeg','Široki Brijeg'),
array('sokolac','Sokolac'),
array('srbac','Srbac'),
array('srebrenica','Srebrenica'),
array('srebrenik','Srebrenik'),
array('stolac','Stolac'),
array('teocak','Teočak'),
array('tesanj','Tešanj'),
array('teslic','Teslić'),
array('tomislavgrad','Tomislavgrad'),
array('travnik','Travnik'),
array('trebinje','Trebinje'),
array('trnovo','Trnovo'),
array('trnovo','Trnovo'),
array('tuzla','Tuzla'),
array('ugljevik','Ugljevik'),
array('usora','Usora'),
array('ustipraca-','Ustiprača '),
array('vares','Vareš'),
array('velika-kladusa','Velika Kladuša'),
array('visegrad','Višegrad'),
array('visoko','Visoko'),
array('vitez','Vitez'),
array('vlasenica','Vlasenica'),
array('vogosca','Vogošća'),
array('vukosavlje','Vukosavlje'),
array('zavidovici','Zavidovići'),
array('zenica','Zenica'),
array('zepce','Žepče'),
array('zivinice','Živinice'),
array('zvornik','Zvornik')
);

$smarty->assign('data',$data);
$smarty->display('research.tpl');
