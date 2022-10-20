<!--- Affandika --->
<!--- 21091397030 --->
     
<?php 

require_once 'Prak 6 Nomor 2 Interface.php';

class Airplane implements Flyer {
    public function takeOff() {
        return 'Pesawat lepas landas..';
    }
    
    public function land() {
        return 'Pesawat mendarat';
    }

    public function fly() {
        return 'Pesawat dalam perjalanan';
    }
}

class Bird implements Flyer {
    public function takeOff() {
        return 'Burung mencari makan';
    }
    
    public function land() {
        return 'Burung kembali pulang';
    }

    public function fly() {
        return 'Burung terbang';
    }

    public function buildNest() {
        return 'Burung membuat sarang';
    }

    public function layEggs() {
        return 'Burung bertelur';
    }
}

class Superman implements Flyer {
    public function takeOff() {
        return 'Superman mengejar Steppenwolf';
    }
    
    public function land() {
        return 'Superman melawan Steppenwolf';
    }

    public function fly() {
        return 'Superman menuju matahari';
    }

    public function leapBuilding() {
        return 'Steppenwolf terpental menabrak bangunan pencakar langit';
    }

    public function stopBullet() {
        return 'Polisi menembaki superman namun tidak tembus';
    }
}

$airplane = new Airplane;
$bird = new Bird;
$superman = new Superman;