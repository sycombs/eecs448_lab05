<?php
  for ($x = 0; $x <= 100; $x++)
  {
    echo "<tr>";

    for ($y = 0; $y <= 100; $y++)
    {
      if ($x == 0 && $y != 0)
      {
        echo "<th>" . $y . "</th>";
      }
      else if ($y == 0)
      {
        if ($x == 0)
        {
          echo "<td>" . " " . "</td>";
        }
        else {
          echo "<td>" . $x . "</td>";
        }
      }
      else {
        echo "<td>" . $x * $y . "</td>";
      }
    }

    echo "</tr>";
  }

 ?>
