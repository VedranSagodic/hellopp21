<?php

// postoji 4 vrste funkcija

// 1. vrsta: ne prima parametar (zagrada je prazna) i ne vraća vrijednost (nema return liniju)
function ispis_get(){
    echo '<pre style="color: red">';
    print_r($_GET);
    echo '</pre>';
}

//2. vrsta: prima parametre (lista u zagradama) i ne vraća vrijednost
function ispis($sto,$dump=false){ // $dump je opcionalni parametar jer u listi parametara je postavljena zadana vrijednost 
    echo '<pre>';
    if($dump){
        var_dump($sto);
    }else{
        print_r($sto);
    }
    echo '</pre>';
}

//3. vrsta: ne prima parametar, vraća vrijednost
function slucajniIznos(){
    return rand(100,200) . ',00 kn';
}

//4. vrsta: prima parametre i vraća vrijednost
function slucajniIznosRaspon($od,$do){
    return rand($od,$do) . ',00 kn';
}