<?php
//asocijativni niz
$smjer=[
    'sifra'=>1,
    'naziv'=>'PHP programiranje',
    'cijena'=> 4999.99,
    'grupe'=> [ //početak indeksnog niza asocijativnih nizova 
        [
            'sifra'=> 1,
            'naziv' => 'PP20'
        ],
        [
            'sifra'=>2,
            'naziv' => 'PP21'
        ]
    ]
        ];

        //ispisati PHP programiranje
        echo $smjer['naziv'];

        echo '<hr />';
        
        echo $smjer['grupe'][1]['naziv'];