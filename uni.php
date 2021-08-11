<?

$curl = curl_init();
$url = 'https://aulas.exa.unicen.edu.ar/';

curl_setopt($curl, CURLOPT_URL, $url);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

$result = curl_exec($curl);

$finales = array();

preg_match_all('/dataSet = \'(.*?)\'/', $result, $match);

$finales = $match[1];

echo $finales[0];