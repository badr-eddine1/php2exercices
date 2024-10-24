<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $table1 = ['sam@gmail.com'=>'+212444444', 'cris@gmail.com'=>'+21288888'];
    
    include("exe3generatetable.php");
        $Name="email";
        $Age="phoneNumber";
    generateTable($table1,$Name,$Age);
    ?>
</body>
</html>