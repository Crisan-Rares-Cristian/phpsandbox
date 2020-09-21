<style>
  div {
    border: 1px #333 solid;
    border-radius: 12px;
    padding: 20px;
    margin: 5px;
  }

  h1 {
    margin-left: 30px;
  }

  h4 {
    color: orange;
  }
</style>

<?php
  
  $loggedIn = false;
  $array = ['Rares', 'Abel', 'Horia', 'Mami', 'Tati'];
  // if($loggedIn){
  //   echo 'You are logged in!';
  // } else {
  //   echo 'You are NOT Logged in';
  // }

  /* echo ($loggedIn) ? 'it is logged in': 'You are not logged in';

  $isRegistered = ($loggedIn == true) ? true: false;
  echo $isRegistered;

  $age = 20;
  $score = 9;

  echo 'Your score is: '.($score > 10 ? ($age > 10 ? 'Average': 'Exceptional'): ($age > 10 ? 'Bad': 'Average'));   */
  ?>

  <div>
    <?php if($loggedIn) { ?>
      <h1>Welcome user !</h1>
    <?php } else {?>
      <h1>Welcome guest !</h1>
    <?php } ?>
  </div>

  <div>
      <?php if($loggedIn): ?>
      <h3>You are logged in</h3>
      <?php else:?>
      <h3>What you can do is limited !<h3>
      <?php endif; ?>
  </div>

        <h1>Loops</h1>
  <div>
     <?php foreach($array as $name): ?>   
      <h4><?php echo "Your name is {$name}"?></h4>
     <?php endforeach; ?>
  </div>

  <div>
      <?php for($i = 0; $i < 100; $i++): ?>
        <h4><?php echo "You are {$i} years old." ?></h4>
      <?php endfor; ?>
  </div>

