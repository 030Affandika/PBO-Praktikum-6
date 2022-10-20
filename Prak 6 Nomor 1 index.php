<!--- Affandika --->
<!--- 21091397030 --->

<?php 
    require_once 'Prak 6 Nomor 1.php';
?>

<!DOCTYPE html>
<html lang="id">

<head>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        
    <title>Praktikum 6</title>
</head>

<body>
    <div class="container">
        <br>
        <h2 class="text-center">Praktikum 6 PBO</h2>
        <div class="row">
            <div class="col-5 mx-auto border p-3 mt-2">
                <h4 class="text-center"><strong>Nomor 1</strong></h4>
                <br><br>
                <b><?= $truck->getMaxLoad() . ' kg'; ?> <br></b>
                <br>
                <?= $truck->addBox(2000) . ' kg'; ?> <br>
                <?= $truck->addBox(8000) . ' kg'; ?> <br>
                <?= $truck->addBox(10000) . ' kg'; ?> <br>
               
                    <?php 
                        echo "Banyak bahan bakar yang dibutuhkan adalah " . $truck->calcFuelNeeds() . ' Liter'. '<br>';
                    ?>
                <br>
                ------------------------------------------------
                <br>
                <br>
                <b><?= $riverBarge->getMaxLoad() . ' kg'; ?> <br></b>
                <br>
                <?= $riverBarge->addBox(2000) . ' kg'; ?> <br>
                <?= $riverBarge->addBox(5000) . ' kg'; ?> <br>
                <?= $riverBarge->addBox(10000) . ' kg'; ?> <br>

                    <?php 
                        echo "Banyak bahan bakar yang dibutuhakan adalah " . $riverBarge->calcFuelNeeds() . ' Liter';
                    ?>
            </div>
        </div>
    </div>
</body>

</html>