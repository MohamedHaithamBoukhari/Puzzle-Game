<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/players.css">
  <title>PUZZLE|Players</title>
</head>

<body>
  <div class="boxes">

    <?php
    $i = 0;
    $imgsFolder = 'image/players';
    $players = scandir($imgsFolder);
    foreach ($players as $player) {
      if ($player != '.' && $player != '..') {
    ?>
        <!-- href="player.php" redirect is with JS -->
        <div class="playerName">
          <div class="gallery">
            <div class="container">
              <img class="image" src="./image/players/<?= $player . '/' . $player . '.gif' ?>" alt="" width="600" height="400">
              <div class="middle">
                <a class="level" href="player.php?player=<?= $player ?>&level=easy">Easy</a>
                <a class="level" href="player.php?player=<?= $player ?>&level=medium">Medium</a>
                <a class="level" href="player.php?player=<?= $player ?>&level=hard">Hard</a>
              </div>
            </div>
            <div class="name"><?= ucfirst($player) ?></div>
          </div>
        </div>
    <?php
      }
    } ?>
  </div>
</body>

</html>