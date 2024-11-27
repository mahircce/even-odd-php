<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Php LAB</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
     <?php
          $number = 67;
          function checkEvenOrOdd($number) {
         if ($number % 2 == 0) {
             echo "$number is Even.\n";
         } else {
             echo "$number is Odd.\n";
         }
     }

     checkEvenOrOdd($number);
     //developed by MAHIR
     ?>
     
</body>
</html>
