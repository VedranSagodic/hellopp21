<?php

//Napraviti stranicu koja na kućnom računalu ima boju pozadine plavu
// a na produkciji ima boju pozadine zelenu

if ($_SERVER['SERVER_ADDR'] === '127.0.0.1'){
    echo '<body style="background-color:blue">Radim na lokalnom računalu</body>';
}
else {
    echo '<body style="background-color:green">Radim na produkciji</body>';
}