<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Evidence knih - hledej knihu</title>
</head>
<body>
  <h1>Hledej knihu dle výběru</h1>
  <?php
  include "Menu.php";  
  ?>
    <div><?php echo menu() ?></div> 

    <form action="VypisKnih.php" method="POST">
    <div>
      <label for="select_input1_ISBN">ISBN: </label>
      <input id="select_input1_ISBN" type="text" name="select_isbn">
    </div>
    <div>
      <label for="select_input2_name">Jméno:  </label>
      <input id="select_input2_name" type="text" name="select_author_name">
    </div>
    <div>
      <label for="select_input3_surname">Příjmení: </label>
      <input id="select_input3_surname" type="text" name="select_author_surname">
    </div>
    <div>
      <label for="select_input4_title">Název knihy: </label>
      <input id="select_input4_title" type="text" name="select_title">
    </div>
    <div>
      <input type="submit" value="Zobrazit vybrané">
    </div>
  </form>  



</body>
</html>