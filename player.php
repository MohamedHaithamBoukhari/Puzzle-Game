<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/player.css">
  <title>PUZZLE | <?= ucfirst($_GET['player']) ?></title>
</head>

<body>
  <img class="puzzle" src="./image/puzzle.png" alt="">
  <div class="container">
    <h1><?= '~ ' . ucfirst($_GET['player']) . ' ~' ?></h1>
    <div class="cadres">
      <!-- Level easy -->
      <?php
      if ($_GET['level'] == 'easy') {
      ?>
        <div class="cadre1">
          <?php
          $parts = range(1, 9);
          for ($i = 1; $i <= 9; $i++) {
            shuffle($parts);
            $element_choisi = array_pop($parts);
          ?>
            <div class="box">
              <img id="<?= $element_choisi ?>" src="image/players/<?= $_GET['player'] ?>/<?= $_GET['level'] ?>/<?= $_GET['player'] ?>_0<?= $element_choisi ?>.gif" draggable="true" ondragstart="start(event)" alt="<?= $element_choisi ?>">
            </div>
          <?php
          }
          ?>
        </div>
        <div class="cadre2">
          <?php
          for ($i = 1; $i <= 9; $i++) {
          ?>
            <div id="<?= $i ?>" class="box" >
            </div>
          <?php
          }
          ?>
        </div>
      <?php
      }
      ?>
      <!-- Level medium -->
      <?php
      if ($_GET['level'] == 'medium') {
      ?>
        <div class="cadre1">
          <?php
          $parts = range(1, 16);
          for ($i = 1; $i <= 16; $i++) {
            shuffle($parts);
            $element_choisi = array_pop($parts);
          ?>
            <div class="box2">
              <img id="<?= $element_choisi ?>" src="image/players/<?= $_GET['player'] ?>/<?= $_GET['level'] ?>/<?= $_GET['player'] ?>_0<?= $element_choisi ?>.gif" draggable="true" ondragstart="start(event)" alt="<?= $element_choisi ?>">
            </div>
          <?php
          }
          ?>
        </div>
        <div class="cadre2">
          <?php
          for ($i = 1; $i <= 16; $i++) {
          ?>
            <div id="<?= $i ?>" class="box2">
            </div>
          <?php
          }
          ?>
        </div>
      <?php
      }
      ?>
      <!-- Level hard -->
      <?php
      if ($_GET['level'] == 'hard') {
      ?>
        <div class="cadre1">
          <?php
          $parts = range(1, 25);
          for ($i = 1; $i <= 25; $i++) {
            shuffle($parts);
            $element_choisi = array_pop($parts);
          ?>
            <div class="box3">
              <img id="<?= $element_choisi ?>" src="image/players/<?= $_GET['player'] ?>/<?= $_GET['level'] ?>/<?= $_GET['player'] ?>_0<?= $element_choisi ?>.gif" draggable="true" ondragstart="start(event)" alt="<?= $element_choisi ?>">
            </div>
          <?php
          }
          ?>
        </div>
        <div class="cadre2">
          <?php
          for ($i = 1; $i <= 25; $i++) {
          ?> 
            <div id="<?= $i ?>" class="box3">
            </div>
          <?php
          }
          ?>
        </div>
      <?php
      }
      ?>
    </div>

    <div class="btn">
      <button id="reset">Reset</button>
      <button id="validate">Validate</button>
    </div>
  </div>
  <script src="js/player.js"></script>
</body>

</html>