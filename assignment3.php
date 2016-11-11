
<!doctype html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <title>Assignment 3</title>
    <link rel="stylesheet" href="assignment3.css">
  </head>
  <body>
    <?php 
    if(!isset($_POST['submit'])||(($_POST['text']) == "")){
    ?>
    <h1> Story Time! </h1>
    <div class='normal'>
      <p>Fill in the fields below and we'll make a hilarious story for you!</p>
      <form method="post" action ="do_stuff.php" id="requestForm">
        <label for="name1">
          <span>Name:</span>
          <input type="text" name="name1" id="name1">
        </label>
        <label for="name2">
          <span>Name:</span>
          <input type="text" name="name2" id="name2">
        </label>
        <label for="noun1">
          <span>Noun:</span>
          <input type="text" name="noun1" id="noun1">
        </label>
        <label for="noun2">
          <span>Noun:</span>
          <input type="text" name="noun2" id="noun2">
        </label>
        <label for="vehicle">
          <span>Type of Vehicle:</span>
          <input type="text" name="vehicle" id="vehicle">
        </label>
        <label for="beverage">
          <span>Type of beverage:</span>
          <input type="text" name="beverage" id="beverage">
        </label>
        <input type="submit" name="submit" value="Submit!">
      </form>
    </div>
  <?php
  }
  else {
    echo "<h1> Goodbye! </h1";
  } ?>
  </body>
</html>

