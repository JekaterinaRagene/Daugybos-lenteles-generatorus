<?php
if (isset($_GET['lentDydis'])){
    $lentDydis = $_GET['lentDydis'];
} else {
    $lentdydis=12;
}

if (isset($_GET['sudetingumas'])) {
    $pasleptiLangeliaiProc = $_GET['sudetingumas'];
} else {
    $pasleptiLangeliaiProc = 0;
}
?>

<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">

    <title>Daugybos lentelė</title>
</head>
<body>
    
    <main role="main" class="container">        
        <br>
        
        <a href="index.php" class="btn btn-primary">Grįžti</a> 
        
<br><br>
        <?php
        if ($lentDydis < 0){
            echo 'Pasirinktas neteisingas dydis';
        } else {
         ?>
                <table class="table table-striped">
                    <?php //y-eilutes
                    for ($y = -1; $y <= $lentDydis; $y++){
                    ?>
                     <tr <?php if ($y == -1) {
                        echo 'class="table-primary"';
                        }
                        ?>
                      >
                        <?php //x-stulpeliai
                        for ($x = -1; $x <=$lentDydis; $x++) {
                        ?> 
                        <td <?php if ($x == -1) {
                            echo 'class="table-primary"'; } 
                            ?>
                        >
                            <?php
                            //pirmas langelis kairei-virsuj
                            if ($x == -1 && $y == -1) {
                                echo 'X';
                            }elseif ($x == -1) {
                                echo $y; //pirmas stulpelis
                            } elseif ($y == -1) {
                                echo $x; //pirma eilute
                            } else {
                                $atsitiktiniSkaitmuo = rand(1, 100);
                            if ($atsitiktiniSkaitmuo <= $pasleptiLangeliaiProc){
                                    echo '-';
                            } else {
                                echo $x * $y;
                            }
                            }
                            ?>
                        </td>
                        <?php
                    }
                    ?>
                    </tr>
                    <?php
        }
        ?>
                </table>
        <?php } ?>
       </main>
                    
                   
                        
   