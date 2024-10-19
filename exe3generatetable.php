<?php
    
    function generateTable($tab,$th1,$th2){
        echo "<table border=1>";
        echo "<tr><th>$th1</th><th>$th2</th></tr>";
        foreach($tab as $t=>$tvalue){
            echo "<tr><td>$$t</td><td>$tvalue</td></tr>";
        }
         echo "</table>";
    }


?>