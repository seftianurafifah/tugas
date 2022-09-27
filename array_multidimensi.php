<?php

$nilai = [
    array("1", "01101", "81", "83", "77", "88,33"),
    array("2", "01102", "72", "62", "63", "65,67"),
    array("3", "01103", "61", "88", "89", "79,33"),
    array("4", "01104", "93", "91", "90", "91,33"),
];

    echo "<table border=1>";
    echo "<tr>Daftar Nilai Siswa</tr>";
    echo "<tr><th>No</th><th>NIM</th><th>UTS</th><th>UAS</th><th>Tugas</th><th>Nilai Akhir</th></tr>";

    foreach($nilai as $rows => $row)
    {
        echo "<tr>";
        foreach ($row as $col => $cell)
        
        {
            echo "<td>".$cell."</td>";
        }
    }
        echo "</tr></table>";

    ?>
    


