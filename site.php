<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

    <?php
    include "header.html";
     ?>

    <form action="switch.php" method="post">
      name: <input type="text" name="first_name" style="border-radios:50px; margin:10px"> <br>
      grade: <input type="text" name="grade" style="margin:10px"> <br>
      <input type="submit" style="border-size:50px">
    </form>
    <?php

    $grade = $_POST["grade"];
    $name = $_POST["first_name"];

    switch ($grade) {
      case "A":
        echo "you did great $name";
        break;
      case "B":
        echo "you can do better $name";
        break;
      case "C":
        echo "not your best Work $name";
        break;
      case "D":
        echo "try harder $name";
        break;
      case "F":
        echo "shame on you $name";
        break;
      case "E":
        echo "bad $name";
        break;
      default:
        echo "unknown";
        break;
    }


fedsfsf

     ?>


    <?php
    include "footer.html";

     ?>


  </body>
</html>
