<?php

//questions from google


//questions complete
//sk
$file = file("https://docs.google.com/spreadsheet/pub?key=0AjnJxiiS6aewdDQtdXhQZFN4cS1FZGZkbGtxMzkzUlE&output=txt");

//$file = file("./source/ru35_questions.csv");

//directory
//cs
$directory = 'volby-vuc-2013/';
//cs ultimate
//$directory = 'poslanecka-snemovna-2013-ultimate/';
//en
//$directory = 'czech-elections-2013-inventory-of-votes/';

$regions = array(
  'Bratislava',
  'Trnava',
  'Trenčín',
  'Nitra',
  'Žilina',
  'Banská Bystrica',
  'Košice',
  'Prešov'
);

//path to generate (relative)
$path = '../www/';

$out = array();
$i = 0;
//read questions
foreach ($file as $row) {
 if ($i > 0) {
  $row_ar = str_getcsv($row,"\t");
  //print_r($row_ar);die();
  /*echo $row_ar[1] .'::' . print_r(str_getcsv($row));
  die();*/
  //$region_code = 'prezident'; //trim($row_ar[0]);
  $id = $row_ar[0];
  
  //$question = ((trim($row_ar[2]) != '') ? trim($row_ar[2]) : trim($row_ar[1])); //cs
  $question = trim($row_ar[3]);
  $description = trim($row_ar[2]);
  $name = trim($row_ar[1]);
  $order = trim($row_ar[0]);	//	trim($row_ar[7]); (cs - 7; cs - 2.kolo - 15; ultimate -16)
  //$id_division = trim($row_ar[7]);
  //$id_document = trim($row_ar[6]);
  
  if ($order != '') {
	  $out[] = array(
		'id' => $id,
		'name' => $name,
		'description' => $description,
		'question' => $question,
		'order' => $order,
		//'id_division' => $id_division,
		//'id_document' => $id_document,
	  );
  }
 }
   $i++;
}

print_r($out);

//order questions
$order_ar = array();
foreach ($out as $key => $row) {
  $order_ar[$key]  = $row['order'];
}
array_multisort($order_ar, SORT_ASC, $out);

foreach ($regions as $region) {

   $newout = $out;
   if ($region != 'Bratislava')
     array_pop($newout);


   //if direcotry not existing, create it
   $dir = $path . $directory;
   if(!file_exists($dir)) 
     mkdir($dir);
 
  //questions
  $fout = fopen ($dir . 'questions_'. friendly_url($region,'sk_SK.utf-8') .'.json', "w+");
  $json = json_encode($newout);
  fwrite($fout,$json);
  fclose($fout);
  
}

/**
* creates "friendly url" version of text, translits string (gets rid of diacritics) and substitutes ' ' for '-', etc.
* @return friendly url version of text
* example:
* friendly_url('klub ČSSD')
*     returns 'klub-cssd'
*/
function friendly_url($text,$locale = 'cs_CZ.utf-8') {
    $old_locale = setlocale(LC_ALL, "0");
setlocale(LC_ALL,$locale);
$url = $text;
$url = preg_replace('~[^\\pL0-9_]+~u', '-', $url);
$url = trim($url, "-");
$url = iconv("utf-8", "us-ascii//TRANSLIT", $url);
$url = strtolower($url);
$url = preg_replace('~[^-a-z0-9_]+~', '', $url);
setlocale(LC_ALL,$old_locale);
return $url;
}

?>
