<!-- // Sukurkite dvimatį masyvą. Pirmieji du raktai yra lt ir en.
// Raktai turi savaitės dienų vardų masyvus lietuviškai ir angliškai.
// Naudodamiesi šiuo masyvu, pirmadienį parodykite lietuvių kalba, o trečiadienį - anglų kalba.
// Sukurkite kintamuosius lang (reikšmės lt arba en) ir parodykite dieną -->


<?php


$lang = array(
  'en_EN',
  'lt-LT',
);


$lang = array(
  'english',
  'lithuanian',
);


$oldLocale = setlocale( LC_TIME, '0' );


$localizedWeekdays = array();


foreach( $lang as $locale )
{
     
    $localizedWeekdays[ $locale ] = array();

    
    for( $i = 0; $i < 7; $i++ )
    {
        
        setlocale( LC_TIME, $locale );

        
        $localizedWeekdays[ $locale ][] = strftime( '%A', strtotime( 'next Monday +' . $i . ' days' ) );

        
        setlocale( LC_TIME, $oldLocale );
    }
}


var_dump( $localizedWeekdays );