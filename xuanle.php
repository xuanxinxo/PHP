<?php
    for($i = 1; $i < 10; $i ++) {
        echo "<h3>Bảng Cửu Chương $i</h3> ";
        for($j = 1; $j <= 10; $j ++) {
            echo "$i x $j = " . ($i * $j);
            echo "<br>";
        }
        // echo "</td>";
    }
?>
