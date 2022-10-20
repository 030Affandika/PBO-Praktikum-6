<!--- Affandika --->
<!--- 21091397030 --->

<?php 

require_once 'Prak 6 Nomor 3 Abstrac.php';
require_once 'Prak 6 Nomor 3 Interface.php';

class Animal  
{
    protected $name;

    public function __construct($name)
    {
        $this->name = $name;
    }
    
    public function eat()
    {
        return $this->name . ' sedang makan';
    }
}

class Homosapiens extends Animal {}

class Airplane2 extends Vehicle implements Flyer
{
    public function __construct($maxLoad, $name)
    {
        $this->maxLoad = $maxLoad;
        $this->name = $name;
    }
    
    public function takeOff()
    {
        return "$this->name lepas landas";
    }
    
    public function land()
    {
        return "$this->name mendarat";
    }

    public function fly()
    {
        return "$this->name dalam perjalanan";
    }

    public function calcFuelNeeds()
    {
        $fuel = $this->calcFuelEfficiency();
        $trip = $this->calcTripDistance();

        
        
        return ceil($fuel /= $trip);
    }
}

class Superman2 extends Homosapiens implements Flyer
{
    public function takeOff()
    {
        return "$this->name mengejar Steppenwolf";
    }
    
    public function land()
    {
        return "$this->name melawan Steppenwolf";
    }

    public function fly()
    {
        return "$this->name melakukan pukulan";
    }

    public function leapBuilding()
    {
        return "Steppenwolf terpental menabrak bangunan pencakar langit";
    }

    public function stopBullet()
    {
        return "Polisi menembaki $this->name namun tidak tembus";
    }
}

$burung = new Animal('Burung');
$manusia = new Homosapiens('Aransha');
$airplane2 = new Airplane2(27000, 'Lion Air');
$superman2 = new Superman2('Superman');