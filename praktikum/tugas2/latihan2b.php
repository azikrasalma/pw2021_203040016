<!--
    AZIKRA SALMA SABILLA
    203040016
-->

<?php

$jawabanIsset = "Isset adalah = memeriksa apakah sebuah objek form ada atau tidak. fungsi isset() tetap bernilai true meskipun user tidak mengisi form sama sekali (variabel form bernilai kosong, namun variabel tersebut dianggap telah di-set) <br><br>";

$jawabanEmpty = "Empty adalah = menghasilkan nilai false jika sebuah variabel telah diisi, dan bernilai true jika variabel tersebut belum diisi. dengan begitu kita bisa membuat logika validasi objek form mana saja yang harus diisi dam mana yang boleh dikosongkan";

function soal($style){
    echo $GLOBALS['jawabanIsset'];
    echo $GLOBALS['jawabanEmpty'];
}


echo soal( 
    "font-family: Arial; font-size:28px; color:#8c782d; font-style:italic; font-weight: bold;"
);

?>


