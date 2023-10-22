<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Modul 2 - Latihan 1 </title>
    <style>
        .kotak {
            border: 3px solid blueviolet;
            padding: 10px;
            margin: 10px;
            width: 30%;
        }


        .clear {
            border: 3px solid black;
            padding: 10px;
            width: 24px;
            height: 24px;
            font-size: 20px;
            text-align: center;
            display: inline-block;
            margin-right: 5px;
            margin-bottom: 10px;
        }
    </style>
</head>

<body>

    <div class="kotak">

        <?php
        for ($Allya_putri_oktaviani = 1; $Allya_putri_oktaviani <= 5; $Allya_putri_oktaviani++) {
            for ($alya = 1; $alya <= $Allya_putri_oktaviani; $alya++) {
                echo "<div class='clear'>" . $alya . "</div>";
            }
            echo "<br>";
        }
        ?>

    </div>
    
    <br>

    <p>
        <i>
            
        </i>
    </p>
    
</body>

</html>