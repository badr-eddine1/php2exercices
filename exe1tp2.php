<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>home</title>
</head>
<body>
    <?php
        include("testexe1tp2.php");
        echo "<table border=1>";
        echo "<tr><th>prenom</th><th>note</th></tr>";
        foreach($note as $n=>$nvalue){
            echo "<tr><td>$n</td><td>$nvalue</td></tr>";
        }
        
        echo "</table>";
        echo "<br>";
        echo "le man est $max";
        echo "le min est $min";

        ksort($note);

        echo "<table border=1>";
        echo "<tr><th>prenom</th><th>note</th></tr>";
        foreach($note as $n=>$nvalue){
            echo "<tr><td>$n</td><td>$nvalue</td></tr>";
        }
        
        echo "</table>";
        foreach($note as $n=>$nvalue){
           if($nvalue ==20){
            echo "20 existe dans le tableau";break;
           }
           else {
            echo "20 n'existe pas";break;
           }
        }
        asort($note);
        print_r($note);
        $m=moyenne($note);
        echo "<br>";
        echo "la moyenne est : $m";
?>


</body>
</html>