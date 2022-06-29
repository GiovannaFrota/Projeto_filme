<?php
namespace APP\Controller;

require"../../vendor/autoload.php";
use APP\Model\Director;
use APP\Model\Film;
use APP\Model\FilmGender;
use APP\Model\Studio;

//Criação dos objetos
$director_one= new Director("Justin Lin",50,"99999-9999");
$studio_one= new studio(
    name:"Universal Pictures",
    phone:"88888-8888"
);
$film_one= new Film(
    yearOfRelease:2011,
    filmGender:$FilmGender::Action,
director:$director_one,
studio:$studio_one,
duration:130,
franchise:"Fast and Furious",
title:"Fast Five"
);


$film_one->franchise="Fast and Furious";
$film_one->director= $director_one;
$film_one->duration= 130;
$film_one->filmGender= $FilmGender::Action;
$film_one->studio=$studio_one;
$film_one->title="Fast Five";
$film_one->yearOfRelease= 2011;

echo"<pre>";
var_dump($film_one);
echo"</pre>";