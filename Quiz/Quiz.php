<?php
  $language = $_POST["language"];
  $capital = $_POST["capital"];
  $abe = $_POST["abe"];
  $president = $_POST["president"];
  $animal = $_POST["animal"];

  $score = 0;
  $count = 0;

  if ($language == "english")
  {
    $count = $count + 1;
    $score = $score + 20;
    $language = "English";
  }
  else if ($language == "spanish")
  {
    $language = "Spanish";
  }
  else if ($language == "american")
  {
    $language = "American";
  }
  else
  {
    $language = "Thai";
  }

  if ($capital == "lima")
  {
    $count = $count + 1;
    $score = $score + 20;
    $capital = "Lima";
  }
  else if ($capital == "dc")
  {
    $capital = "Washington DC";
  }
  else if ($capital == "lagos")
  {
    $capital = "Lagos";
  }
  else {
    $capital = "Prague";
  }

  if ($abe == "yes")
  {
    $count = $count + 1;
    $score = $score + 20;
    $abe = "Yes";
  }
  else if ($abe == "no")
  {
    $abe = "No";
  }
  else if ($abe == "maybe")
  {
    $abe = "Maybe";
  }
  else {
    $abe = "I don't know";
  }

  if ($president == "georgewashington")
  {
    $count = $count + 1;
    $score = $score + 20;
    $president = "George Washington";
  }
  else if ($president == "benjaminfranklin")
  {
    $president = "Benjamin Franklin";
  }
  else if ($president == "helenkeller")
  {
    $president = "Helen Keller";
  }
  else {
    $president = "George Orwell";
  }

  if ($animal == "clifford")
  {
    $count = $count + 1;
    $score = $score + 20;
    $animal = "Clifford, the Big Red Dog";
  }
  else if ($animal == "george")
  {
    $animal = "Curious George";
  }
  else if ($animal == "hedwig")
  {
    $animal = "Hedwig";
  }
  else {
    $animal = "Wilbur the Pig";
  }

  echo "Question 1<br> You answered: " . $language . ".<br> The correct answer was English.<br><br>";
  echo "Question 2<br> You answered: " . $president . ".<br> The correct answer was George Washington.<br><br>";
  echo "Question 3<br> You answered: " . $capital . ".<br> The correct answer was Lima.<br><br>";
  echo "Question 4<br> You answered: " . $abe . ".<br> The correct answer was Yes.<br><br>";
  echo "Question 5<br> You answered: " . $animal . ".<br> The correct answer was Clifford, the Big Red Dog.<br><br>";

  echo "You answered " . $count . " question(s) correctly. <br>";
  echo "Your score is " . $score . "%.";



 ?>
