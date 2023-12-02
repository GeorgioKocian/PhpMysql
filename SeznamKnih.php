<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Evidence knih - seznam knih</title>
</head>
<body>
  <h1>Seznam knih</h1>
 

  <?php
  include "Menu.php";
  include "dblogin.php";  
  ?>
  <div><?php echo menu() ?></div> 


<?php
if (!($con = mysqli_connect($host,$user,$password,$db)))
{
  die("Nelze se připojit k databázovému serveru!</body></html>");

}

mysqli_query($con,"SET NAMES 'utf8'");
  if (!($result = mysqli_query($con,
      "SELECT isbn, author_name, author_surname, title, book_desc FROM books")))
  {
    die("Nelze provést dotaz!</body></html>");
   
  }

  while ($radek = mysqli_fetch_array($result))
  {
?>

    <h2>ISBN: <?php echo $radek["isbn"];?></h2>
    <dl>
        <dt>Jméno autora:</dt>
        <dd><?php echo $radek["author_name"];?></dd>
        <dt>Příjmení autora:</dt>
        <dd><?php echo $radek["author_surname"];?></dd>
        <dt>Název knihy:</dt>
        <dd><?php echo $radek["title"];?></dd>
        <dt>Popis knihy:</dt>
        <dd><?php echo $radek["book_desc"];?></dd>
    </dl>
<?php
}
  mysqli_free_result($result);
  mysqli_close($con); 
    ?>
  

</body>
</html>