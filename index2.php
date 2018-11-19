<!DOCTYPE html>
<html lang="en">
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
  <head>
    <title>Introductie</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php
   //include CSS Style Sheet
   echo "<link rel='stylesheet' type='text/css' href='blog.css' />";

   //include a javascript file
   echo "<script type='text/javascript' src='path-to-javascript-file'></script>";
?>

  </head>

  <body>
    <header>
      <div class="header">
        <a href="#default" class="logo">Blog Head</a>

      </div>

    </header>




      <form action="blogtekstverwerking.php" method="POST">
       <p>Uw naam: <input type="text" name="name"required /></p>
       <p>Uw blogpost: <input type="text" name="blogpost" /></p>
       <p><input type="submit" value="post blog" name= "post_blog" /></p>
      </form>

    <div class="blogveld">
      <p> <?php
      $blogg= file_get_contents('mijnblog.txt');
      $items = explode("\n", $blogg);
      $counter = count($items) -1;
      while ($counter >= 0) {
        $item = $items[$counter];
        echo $item;
        $counter--;
      }

      echo $blogg;
      ?> </p>

    </div>



  </body>
</html>
