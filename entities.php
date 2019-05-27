<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Entities</title>
    <style>
        .entity {
            font-family: 'sans-serif', cursive;
            color: indigo;
        }
        div{
            font-family: 'sans-serif', cursive;
        }
    </style>
</head>
<body>
<div>html entities by name</div>
<div>&plus;</div>
<div>&lt;</div>
<div>html entities by number</div>
<?php
for ($num = 0; $num < 500; $num++) {
    echo "<span class='entity'>"
        . "&#" . $num . ";"
        . "</span>" . "  ";
    if ($num % 50 == 0)
        echo "<br>";
}
?>
<br>
<hr>
<div>diacritical characters</div>
<div>a&#768;</div>
<div>a&#769;</div>
<div>a&#770;</div>
<div>a&#771;</div>
<div>O&#768;</div>
<div>O&#769;</div>
<div>O&#770;</div>
<div>O&#771;</div>
</body>
</html>