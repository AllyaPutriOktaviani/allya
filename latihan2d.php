<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>latihan2d</title>
</head>

<body>

    <?php
    function Prima($number)
    {
        if ($number <= 1) {
            return false;
        }
        for ($i = 2; $i <= sqrt($number); $i++) {
            if ($number % $i == 0) {
                return false;
            }
        }
        return true;
    }
    echo "Pengulangan untuk Mencari kategori bilangan :";
    echo "<br>";
    for ($allyaputrioktaviani = 1; $allyaputrioktaviani <= 19; $allyaputrioktaviani++) {
        echo "<br>";
        if ($allyaputrioktaviani % 2 == 0) {
            echo "<li>Angka $allyaputrioktaviani adalah bilangan genap";
        } else {
            echo "<li>Angka $allyaputrioktaviani adalah bilangan ganjil";
        }

        if (Prima($allyaputrioktaviani)) {
            if ($allyaputrioktaviani > 10) {
                echo " dan sekaligus bilangan prima";
            } else {
                echo " sekaligus bilangan prima";
            }
        }
    }

    ?>


</body>

</html>