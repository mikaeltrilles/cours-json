<?php

/**
 * Redcupérer le JSON de https://api-v2.hub3e.com/v2/ecoles/130/formations
 */

//  Etape 1 : recuperer le fichier via CURL
$curl = curl_init();
// option CURL
curl_setopt_array(
    $curl,
    [
  CURLOPT_URL=>'https://api-v2.hub3e.com/v2/ecoles/130/formations',
  CURLOPT_CUSTOMREQUEST=>'GET',
  CURLOPT_HTTPHEADER=>['Content-Type: application/json'],
  CURLOPT_RETURNTRANSFER=>true,
  // CURLOPT_SSL_VERIFYPEER=>false, uniquement pour wamp
]
);
//  decoder la reponse JSON qui renvoie sur un contexte objet
$response = curl_exec($curl);
var_dump($response);
curl_close($curl);
$decode = json_decode($response, true);
$formations = $decode['results'];

foreach ($formations as $formation) {
    print_r($formation['nom']);
    echo PHP_EOL;
    print_r($formation['description']);
    echo PHP_EOL;
    print_r($formation['responsable']['nom'].' '.$formation['responsable']['prenom']);
}
