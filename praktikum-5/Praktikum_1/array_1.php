<html>
    <head>
        <title>Pemrograman PHP dengan Array</title>
    </head>
    <body>
        <?php
            $nama[] = "Tartaglia";
            $nama[] = "Morax";
            $nama[] = "Kreideprinz";

            echo $nama[1] . $nama[2] . $nama[0];
            echo "<br>";

            //menghitung jumlah elemen array
            $jum_array = count($nama);
            echo "Jumlah elemen array = ". $jum_array;
        ?>
    </body>
</html>