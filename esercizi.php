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

$myLocation = new Street("Europa","Italia","Puglia","BA","Bari","Strada San Giorgio Martire 2D");

//$myLocation->getMyCurrentLocation();


///////////////////////////////////////////////////////////////////////////////////////////////////////////////////


class Vertebrates {


    public function __construct(){

        $this->VertebratesPrint();

    }

    protected function VertebratesPrint(){

        echo "Sono un animale vertebrato";

    }

}

class Warm_blooded extends Vertebrates {


    public function __construct(){

        $this->WarmBloodedPrint();

    }

    protected function WarmBloodedPrint(){

        echo "\nSono un animale vertebrato\nSono un animale a Sangue Caldo";

    }
}

class Mammals extends Warm_blooded {


    public function __construct(){

        $this->MammalsPrint();

    }

    protected function MammalsPrint(){

        echo "\nSono un animale vertebrato\nSono un animale a Sangue Caldo\nSono un mammifero";

    }
}

class Birds extends Warm_blooded {


    public function __construct(){

        $this->BirdsPrint();

    }

    protected function BirdsPrint(){

        echo "\nSono un animale vertebrato\nSono un animale a Sangue Caldo\nSono un'uccello";

    }
}

class Cold_blooded extends Vertebrates {


    public function __construct(){

        $this->ColdBloodedPrint();

    }

    protected function ColdBloodedPrint(){

        echo "\nSono un animale vertebrato\nSono un animale a Sangue Freddo";

    }
}

class Fish extends Cold_blooded {


    public function __construct(){

        $this->FishPrint();

    }

    protected function FishPrint(){

        echo "\nSono un animale vertebrato\nSono un animale a Sangue Freddo\nSPLASH!";

    }
}

class Reptiles extends Cold_blooded {


    public function __construct(){

        $this->ReptilesPrint();

    }

    protected function ReptilesPrint(){

        echo "\nSono un animale vertebrato\nSono un animale a Sangue Freddo\nSono un rettile";

    }
}

class Amphibians extends Cold_blooded {


    public function __construct(){

        $this->AmphibiansPrint();

    }

    protected function AmphibiansPrint(){

        echo "\nSono un animale vertebrato\nSono un animale a Sangue Freddo\nSono un'anfibio";

    }
}

$magikarp = new Fish();

$cavallo = new Mammals();


