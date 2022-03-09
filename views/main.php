<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>KRC Announcer App</title>
    <link rel="stylesheet" href="./assets/css/styles.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>
<body>
    <div class="container">
        <h1 class="text-center title">Opstelling KRC</h1>
        <p class="text-center subtitle">Vul de basiself in en klik op de knop om om te roepen</p>

        <form id="form">
            <div class="row playerselectrow">
                <div class="col-4 col-md-2">
                    <select class="form-control form-select-lg form-select playerinfo">
                        <?php for ($x = 1; $x <= 20; $x++) {
                            if ($x == 1){
                                echo "<option selected>$x</option>";
                            } else {
                                echo "<option>$x</option>";
                            }
                        } ?>
                    </select>
                </div>
                <div class="col-8 col-md-10">
                    <select class="form-control form-select-lg form-select playerinfo">
                        <?= $players_select ?>
                    </select>
                </div>
            </div>
            <div class="row playerselectrow">
                <div class="col-4 col-md-2">
                    <select class="form-control form-select-lg form-select playerinfo">
                        <?php for ($x = 1; $x <= 20; $x++) {
                            if ($x == 2){
                                echo "<option selected>$x</option>";
                            } else {
                                echo "<option>$x</option>";
                            }
                        } ?>
                    </select>
                </div>
                <div class="col-8 col-md-10">
                    <select class="form-control form-select-lg form-select playerinfo">
                        <?= $players_select ?>
                    </select>
                </div>
            </div>
            <div class="row playerselectrow">
                <div class="col-4 col-md-2">
                    <select class="form-control form-select-lg form-select playerinfo">
                        <?php for ($x = 1; $x <= 20; $x++) {
                            if ($x == 3){
                                echo "<option selected>$x</option>";
                            } else {
                                echo "<option>$x</option>";
                            }
                        } ?>
                    </select>
                </div>
                <div class="col-8 col-md-10">
                    <select class="form-control form-select-lg form-select playerinfo">
                        <?= $players_select ?>
                    </select>
                </div>
            </div>
            <div class="row playerselectrow">
                <div class="col-4 col-md-2">
                    <select class="form-control form-select-lg form-select playerinfo">
                        <?php for ($x = 1; $x <= 20; $x++) {
                            if ($x == 4){
                                echo "<option selected>$x</option>";
                            } else {
                                echo "<option>$x</option>";
                            }
                        } ?>
                    </select>
                </div>
                <div class="col-8 col-md-10">
                    <select class="form-control form-select-lg form-select playerinfo">
                        <?= $players_select ?>
                    </select>
                </div>
            </div>
            <div class="row playerselectrow">
                <div class="col-4 col-md-2">
                    <select class="form-control form-select-lg form-select playerinfo">
                        <?php for ($x = 1; $x <= 20; $x++) {
                            if ($x == 5){
                                echo "<option selected>$x</option>";
                            } else {
                                echo "<option>$x</option>";
                            }
                        } ?>
                    </select>
                </div>
                <div class="col-8 col-md-10">
                    <select class="form-control form-select-lg form-select playerinfo">
                        <?= $players_select ?>
                    </select>
                </div>
            </div>
            <div class="row playerselectrow">
                <div class="col-4 col-md-2">
                    <select class="form-control form-select-lg form-select playerinfo">
                        <?php for ($x = 1; $x <= 20; $x++) {
                            if ($x == 6){
                                echo "<option selected>$x</option>";
                            } else {
                                echo "<option>$x</option>";
                            }
                        } ?>
                    </select>
                </div>
                <div class="col-8 col-md-10">
                    <select class="form-control form-select-lg form-select playerinfo">
                        <?= $players_select ?>
                    </select>
                </div>
            </div>
            <div class="row playerselectrow">
                <div class="col-4 col-md-2">
                    <select class="form-control form-select-lg form-select playerinfo">
                        <?php for ($x = 1; $x <= 20; $x++) {
                            if ($x == 7){
                                echo "<option selected>$x</option>";
                            } else {
                                echo "<option>$x</option>";
                            }
                        } ?>
                    </select>
                </div>
                <div class="col-8 col-md-10">
                    <select class="form-control form-select-lg form-select playerinfo">
                        <?= $players_select ?>
                    </select>
                </div>
            </div>
            <div class="row playerselectrow">
                <div class="col-4 col-md-2">
                    <select class="form-control form-select-lg form-select playerinfo">
                        <?php for ($x = 1; $x <= 20; $x++) {
                            if ($x == 8){
                                echo "<option selected>$x</option>";
                            } else {
                                echo "<option>$x</option>";
                            }
                        } ?>
                    </select>
                </div>
                <div class="col-8 col-md-10">
                    <select class="form-control form-select-lg form-select playerinfo">
                        <?= $players_select ?>
                    </select>
                </div>
            </div>
            <div class="row playerselectrow">
                <div class="col-4 col-md-2">
                    <select class="form-control form-select-lg form-select playerinfo">
                        <?php for ($x = 1; $x <= 20; $x++) {
                            if ($x == 9){
                                echo "<option selected>$x</option>";
                            } else {
                                echo "<option>$x</option>";
                            }
                        } ?>
                    </select>
                </div>
                <div class="col-8 col-md-10">
                    <select class="form-control form-select-lg form-select playerinfo">
                        <?= $players_select ?>
                    </select>
                </div>
            </div>
            <div class="row playerselectrow">
                <div class="col-4 col-md-2">
                    <select class="form-control form-select-lg form-select playerinfo">
                        <?php for ($x = 1; $x <= 20; $x++) {
                            if ($x == 10){
                                echo "<option selected>$x</option>";
                            } else {
                                echo "<option>$x</option>";
                            }
                        } ?>
                    </select>
                </div>
                <div class="col-8 col-md-10">
                    <select class="form-control form-select-lg form-select playerinfo">
                        <?= $players_select ?>
                    </select>
                </div>
            </div>
            <div class="row playerselectrow">
                <div class="col-4 col-md-2">
                    <select class="form-control form-select-lg form-select playerinfo">
                        <?php for ($x = 1; $x <= 20; $x++) {
                            if ($x == 11){
                                echo "<option selected>$x</option>";
                            } else {
                                echo "<option>$x</option>";
                            }
                        } ?>
                    </select>
                </div>
                <div class="col-8 col-md-10">
                    <select class="form-control form-select-lg form-select playerinfo">
                        <?= $players_select ?>
                    </select>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col text-center">
                        <button type="submit" class="btn btn-primary knop">Roep om</button>
                    </div>
                </div>
            </div>
        </form>
    </div>

<script src="./assets/js/main.js"></script>
</body>
</html>