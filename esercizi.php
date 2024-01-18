<?php

class Continent {

    public $nameContinent;

    public function __construct($_nameContinent) {

        $this->nameContinent = $_nameContinent;

    }

    public function getMyCurrentLocation(){

       if($this instanceof Street){

        echo ("Mi trovo in $this->nameContinent, $this->nameCountry, $this->nameRegion, $this->nameProvince, $this->nameCity, $this->nameStreet.");

       } else if($this instanceof City){

        echo ("Mi trovo in $this->nameContinent, $this->nameCountry, $this->nameRegion, $this->nameProvince, $this->nameCity.");

       } else if($this instanceof Province){

        echo ("Mi trovo in $this->nameContinent, $this->nameCountry, $this->nameRegion, $this->nameProvince.");

       } else if($this instanceof Region){

        echo ("Mi trovo in $this->nameContinent, $this->nameCountry, $this->nameRegion.");

       } else if($this instanceof Country){

        echo ("Mi trovo in $this->nameContinent, $this->nameCountry.");

       } else if($this instanceof Continent){

        echo ("Mi trovo in $this->nameContinent.");

       }

        

    }


}

class Country extends Continent {

    public $nameCountry;

    public function __construct($_nameContinent, $_nameCountry) {

        parent::__construct($_nameContinent);
        $this->nameCountry = $_nameCountry;

    }


}

class Region extends Country {

    public $nameRegion;

    public function __construct($_nameContinent, $_nameCountry, $_nameRegion) {

        parent::__construct($_nameContinent, $_nameCountry);
        $this->nameRegion = $_nameRegion;

    }


}

class Province extends Region {

    public $nameProvince;

    public function __construct($_nameContinent, $_nameCountry, $_nameRegion, $_nameProvince) {

        parent::__construct($_nameContinent, $_nameCountry, $_nameRegion);
        $this->nameProvince = $_nameProvince;

    }


}

class City extends Province {

    public $nameCity;

    public function __construct($_nameContinent, $_nameCountry, $_nameRegion, $_nameProvince, $_nameCity) {

        parent::__construct($_nameContinent, $_nameCountry, $_nameRegion, $_nameProvince);
        $this->nameCity = $_nameCity;

    }


}

class Street extends City {

    public $nameStreet;

    public function __construct($_nameContinent, $_nameCountry, $_nameRegion, $_nameProvince, $_nameCity, $_nameStreet) {

        parent::__construct($_nameContinent, $_nameCountry, $_nameRegion, $_nameProvince, $_nameCity);
        $this->nameStreet = $_nameStreet;

    }


}

/* $continente1 = new Street("Nome continente", "Nome paese", "Nome regione", "Nome provincia", "Nome città", "Nome strada");

var_dump($continente1); */

$myLocation = new Street("Europa","Italia","Puglia","BA","Bari","Strada San Giorgio Martire 2D");
$location1 = new Continent("America");
$location2 = new City("Oceania","Australia","Boh","SD","Sidney","Via Washington");

$myLocation->getMyCurrentLocation();
$location1->getMyCurrentLocation();
$location2->getMyCurrentLocation();

