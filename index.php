<?php


$words1 = [
  'una',
  'selva',
  'essere',
  'mezzo',
  'nel',
  'sempre',
[
  'oscura',
  'era',
  'diritta',
  [
  'mezzo',
   'la'
  ],
'ritrovai',
'per'
],
'di'
];

$words2 = [
  'elemento1' => 'nostra',
  'elemento2' => 'vita',
  'elemento3' => [
    'mi',
    'Favore',
    ',',
    ['via']
  ],
 'smarrita' => 'smarrita'
];



// parole aggiunte

$words1[] = "cammin";
$words1[] = "che'";
$words1[] = "era";


// visualizzazione array

print_r($words1);
print_r($words2);


// frase

$risultato = $words1[4] . ' ' . $words1[3] . ' ' . $words1[7] . ' ' . $words1[8] . ' ' . $words1[7] . ' ' . $words2['elemento1'] . ' ' . $words2['elemento2'] . ' ' . $words2['elemento3'][0] . ' ' . $words1[6][4] . ' ' . $words1[6][5] . ' ' . $words1[0] . ' ' . $words1[1] . ' ' . $words1[6][0] . ' ' . $words2['elemento3'][2] . ' ' . $words1[9] . ' ' . $words1[6][3][1] . ' ' . $words1[6][2] . ' ' . $words2['elemento3'][3][0] . ' ' . $words1[10] . ' ' . $words2['smarrita'] . "\n";


echo $risultato;



