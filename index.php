<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PUZZLE</title>
  <link rel="stylesheet" href="css/index.css">
</head>

<body>
  <img class="puzzle" src="./image/puzzle.png" alt="">
  <div id="_1" class="text">Welcome </div>
  <div id="_2" class="text">PUZZLE GAME</div>
  <div id="_3" class="text">For Moroccan players</div>
  <div class="team">
    <img class=" team" src="./image/team.jpg" alt="">
  </div>
  <h1>Loading Game</h1>
  <div class='loader'>
    <?php
    header("Refresh:2; url=players.php");
    ?>

</body>

</html>