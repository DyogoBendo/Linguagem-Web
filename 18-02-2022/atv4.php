<?php

    function multiplica_vetor($vetor1, $vetor2){
        echo "<table>";
        foreach ($vetor1 as $key => $v1) {
            echo "<tr>";
            foreach ($vetor2 as $key => $v2) {
                echo "<td> " . $v1 * $v2 . " </td>";
            }
            echo "</tr>";
        }
        echo "</table>";
    }

    $vetor1 = [1, 3, 5];
    $vetor2 = [1, 3, 5];    

    multiplica_vetor($vetor1, $vetor2);

    echo "oi";