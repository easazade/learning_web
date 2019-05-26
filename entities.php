<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Entities</title>
        <style>
            .entity{
                font-family: 'sans-serif', cursive;
                color: indigo;
            }
        </style>
    </head>
    <body>
        <div>html entities by name</div>
        <div>&plus;</div>
        <div>&lt;</div>
        <div>html entities by number</div>
      <?php
      for ($num = 0; $num < 50000; $num++) {
          echo "<span class='entity'>"
            ."&#".$num.";"
            ."</span>"."  ";
          if ($num % 50 == 0)
              echo "<br>";
      }
      ?>
    </body>
</html>