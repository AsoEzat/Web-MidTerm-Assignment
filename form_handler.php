<?php

if (isset($_POST["frm"]))
{
  $email = $_POST["email"];
  $password = $_POST["password"];
  $gender = $_POST["gender"];
  
  if (strlen($password) >= 8 && strlen($password) <= 16)
  {
    echo "E-Mail: " . $email . "<br><br>";
    echo "Gender: " . $gender . "<br><br>";
    
    if (isset($_POST["color"]))
    {
      $color = $_POST["color"];
      foreach ($color as $x)
      {
        echo "Color => " . $x;
        echo "<br>";
      }
    }
    else
    {
      echo "<br>No Favorite Color!<br>";
    }
      echo "<br><br>Registered successfully!<br>";
  }
  else
  {
    echo "Password should be between 8 to 16 characters!<br>";
  }
}
else
{
  echo "Please Submit The Form!";
  header('location: form.html');
  echo "<br><a href='form.html'>Form</a>";
}

?>