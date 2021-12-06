<?php

// Sukurti masyvą, kuris aprašytų knygos duomenis: title, author, year, genre

$book1 = [
    'The Hobbit',
    'J. R. R. Tolkien',
    1937,
    'Fantasy<br>'
];

// Sukurti masyvą, kurio elementai būtų masyvai aprašantys knygas. Minimum 3.

$books = [
    $book1,
    [' In Search of Lost Time',
    'Marcel Proust',
    1897,
    'Drama<br>'
    ],
    [
    'Beloved',
    'Toni Morrison',
    1980,
    'Mystery<br>'
    ],
    [
    'No idea',
    'Kqak Marak',
    1800,
    'Justice<br>'
    ],

];

// Išvesti visus knygų masyvo elementus su var_dump;

var_dump($books);

// Išvesti visų visų knygų metų vidurkį;

function getAverage(array $data, string $columnName) {

    $yearsCollection = array_column($data, 'year');
    
    return array_sum($yearsCollection) / count($yearsCollection);

}

    $result = getAverageYear($books, 'year');

    echo "The average year of the books is $result: ";