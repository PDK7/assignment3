<html lang="en">
  <head>
    <meta charset="UTF-8">
    <title>Assignment 3</title>
    <link rel="stylesheet" href="assignment3.css">
  </head>
  <body>
    <h1> Are you ready to see the results? </h1>
    <?php
    if (!isset($_POST['submit'])) {
      echo "<h1> Something went wrong. Forgive me for my sins. </h1>";
    }

    else {
      function createStoryArray($storyObject) {
        $temp_array = array();
        $temp_array[0] = $storyObject->introduction(); 
        $temp_array[1] = $storyObject->exposition(); 
        $temp_array[2] = $storyObject->climax(); 
        $temp_array[3] = $storyObject->denoument(); 
        return $temp_array;
      }

      require_once('ParentClass.php');
      require_once('ChildClass.php');
      $storyMaker = new StoryMaker($_POST['name1'],$_POST['name2'], $_POST['noun1'], $_POST['noun2'], $_POST['vehicle'], $_POST['beverage']);
      $function = createStoryArray($storyMaker);

      for ($i = 0; $i < 4; $i++) {
        ?> 
        <div class='normal'>
          <h2>Part <?php echo ($i + 1); ?> </h2>
          <p> <?php echo $function[$i] ?> </p>
        </div>
      <?php
      }
    ?>
      <div class='normal'>
        <h2>About</h2>
        <p> <?php echo $storyMaker; ?> </p>
      </div>
      <h1>Now for a happier story!</h1>
    <?php   
      unset($function);
      $originalStoryMaker = $storyMaker->__clone();
      $storyMaker = new HappyStoryMaker($_POST['name1'],$_POST['name2'], $_POST['noun1'], $_POST['noun2'], $_POST['vehicle'], $_POST['beverage']);
      $function = createStoryArray($storyMaker);
      for ($i = 0; $i < 4; $i++) {
        ?> 
        <div class='normal'>
          <h2>Part <?php echo ($i + 1); ?> </h2>
          <p> <?php echo $function[$i] ?> </p>
        </div>
      <?php
      }
    }
    ?>
    <div class='normal'>
      <h2>About</h2>
      <p> <?php echo $storyMaker; ?> </p>
    </div>
  <h1>Wait. That wasn't happy at all!</h1>
  <div class='normal'>
    <h2>Let me change that ... </h2>
    <p>
      <?php $storyMaker->change_ending();
        echo $storyMaker->denoument();
      ?>
    </p>
  </div>
  <h1>Much more satisfying!</h1>
  </body>
</html>
