<!DOCTYPE html>
<html lang="en">
<head>
    <title>LATIHAN 8 PEMROGRAMAN WEB</title>
</head>
<body>
    <?php
        #cara pertama mendeklarasikan array 1 dimensi
        print ("CARA PERTAMA MENDEKLARASIKAN ARRAY 1 DIMENSI: <br/>");
        $kota[0] = "Yogyakarta";
        $kota[1] = "Jakarta";
        $kota[2] = "Malang";
        print ("kota pilihanmu: $kota[2]"); // print adalah cara lain mencetak selain echo
    
        echo "<br/><br/><br/>";
    
        #cara kedua mendeklarasikan array 2 dimensi
        print ("CARA KEDUA MENDEKLARASIKAN ARRAY 2 DIMENSI: <br/>");
        $kota2 = array(0 => "Jember", 1 => "Bondowoso", 2 => "Surabaya");
        print "kota pilihanmu: $kota2[0]";
    
        echo "<br/><br/><br/>";
    
        #cara ketiga mendeklarasikan array dengan nilai index berupa teks, bukan angka
        print ("CARA KETIGA MENDEKLARASIKAN ARRAY 1 DIMENSI: <br/>");
        $inisialkota = array("JBR" => "Jember", "BDA" => "Sidoarjo", "SBY" => "Surabaya");
        echo "inisial JBR adalah kota: " . $inisialkota["JBR"];
    ?>

</body>
</html>