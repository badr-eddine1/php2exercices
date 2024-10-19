<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $table1 = ['Amine'=>'30', 'Ali'=>'60'];
    include("exe3generatetable.php");
        $Name="name";
        $Age="Age";
    generateTable($table1,$Name,$Age);
    ?>
</body>
</html>


