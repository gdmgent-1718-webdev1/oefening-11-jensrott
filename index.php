<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Oefening 11</title>
</head>
<body>

<ul>

<?php
$navigation = ["index" => "Home", "about" => "Over ons", "portfolio" => "Portfolio", "contact" => "Contacteer ons"];

foreach($navigation as $webpage => $namewebpage) {
    echo "<li><a href=" . $webpage . ".php>$namewebpage</a></li>";
    
}
?>

</ul>

</body>
</html>