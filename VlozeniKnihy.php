<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Evidence knih - vložení knihy</title>
</head>
<body>
<?php
include "dblogin.php";
include "Menu.php";
?>
<?php
  if (!($con = mysqli_connect($host,$user,$password,$db)))
  {
    die("Nelze se připojit k databázovému serveru!</body></html>");
  }
  mysqli_query($con,"SET NAMES 'utf8'");
  if (mysqli_query($con,
      "INSERT INTO books(isbn, author_name, author_surname, title, book_desc) VALUES('" .
      addslashes($_POST["isbn"]) . "', '" .
      addslashes($_POST["author_name"]) . "', '" .
      addslashes($_POST["author_surname"]) . "', '" .
      addslashes($_POST["title"]) . "', '" .
      addslashes($_POST["book_desc"]) . "')"))
  {
    echo "Úspěšně vloženo.";
    echo menu();
  }
  else
  {
    echo "Nelze provést dotaz. " . mysqli_error($con);
  }
  mysqli_close($con); 
?>
</body>
</html>