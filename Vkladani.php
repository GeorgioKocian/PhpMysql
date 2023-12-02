<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Evidence knih</title>
</head>
<body>
  <h1>Evidence knih</h1>
  <?php
  include "Menu.php";  
  ?>
  <form action="VlozeniKnihy.php" method="POST">
    <div>
      <label for="input1_ISBN">ISBN: </label>
      <input id="input1_ISBN" type="text" name="isbn">
    </div>
    <div>
      <label for="input2_name">Jméno:  </label>
      <input id="input2_name" type="text" name="author_name">
    </div>
    <div>
      <label for="input3_surname">Příjmení: </label>
      <input id="input3_surname" type="text" name="author_surname">
    </div>
    <div>
      <label for="input4_title">Název knihy: </label>
      <input id="input4_title" type="text" name="title">
    </div>
    <div>
      <label for="input5_desc">Popis knihy: </label>
      <input id="input5_desc" type="text" name="book_desc">
    </div>
    <div>
      <input type="submit" value="Uložit knihu">
    </div>
  </form>  
  <div><?php echo menu() ?></div> 
</body>
</html>