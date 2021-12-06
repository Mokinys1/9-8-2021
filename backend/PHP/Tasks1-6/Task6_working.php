<?php
$names = [
    'en' => [
        'Monday',
        'Tuesday',
        'Wednesday',
        'Thursday',
        'Friday',
        'Saturday',
        'Sunday'
    ],
    'lt' => [
        'Pirmadienis', 
        'Antradienis', 
        'Trečiadienis', 
        'Ketvirtadienis', 
        'Penktadienis', 
        'Šeštadienis',
        'Sekmadienis'
    ]
];

function getLangName($names) {
    $langs = array_keys($names);

    return $langs[array_rand($langs)];
}

function getDay() {
    return rand(0,6);
}

$rand = FALSE;

if ($rand) {
    $lang = getLangName($names);
    $day = getDay();
} else {
    $lang = 'lt';
    $day = date('N') - 1;
}

echo $names[$lang][$day];