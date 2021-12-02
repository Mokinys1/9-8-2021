<!-- // Sukurkite dvimatį masyvą. Pirmieji du raktai yra lt ir en.
// Raktai turi savaitės dienų vardų masyvus lietuviškai ir angliškai.
// Naudodamiesi šiuo masyvu, pirmadienį parodykite lietuvių kalba, o trečiadienį - anglų kalba.
// Sukurkite kintamuosius lang (reikšmės lt arba en) ir parodykite dieną -->


<?php




$locales = array(
  'en_EN',
  'lt-LT',
);


$locales = array(
  'english',
  'lithuanian',
  // etc...
);

$oldLocale = setlocale( LC_TIME, '0' );
y
$localizedWeekdays = array();

foreach( $locales as $locale )
{

    $localizedWeekdays[ $locale ] = array();

    // 7 days in a week
    for( $i = 0; $i < 7; $i++ )
    {

        setlocale( LC_TIME, $locale );

  
        $localizedWeekdays[ $locale ][] = strftime( '%A', strtotime( 'next Monday +' . $i . ' days' ) );

        setlocale( LC_TIME, $oldLocale );
    }
}


var_dump( $localizedWeekdays );