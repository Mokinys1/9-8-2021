<?php

$days = [
    $lt = [
        'Pirmadienis',
        'Antradienis',
        'Trečiadienis',
        'Ketvirtadienis',
        'Penktadienis',
        'Sestadienis',
        'Sekmadienis'
    ],
    $en = [
        'Monday',
        'Tuesday',
        'Wednesday',
        'Thursday',
        'Friday',
        'Saturday',
        'Sunday'
    ]
    ];

var_dump($days[0][0], $days[1][2]);

$language = 'lt';

function weekToday($language, $arr) {
    $today = date('l');
    if($language == 'en') {
        echo "Today is $today";
    } elseif($language == 'lt') {
        $todaysKey = array_search($today, $arr[1]);
        echo 'Today is ' . $arr[0][$todaysKey];
    } else {
        echo 'Sorry, language uknown';
    }
  };

  weekToday($language, $days);