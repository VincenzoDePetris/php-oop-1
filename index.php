<?php

include 'server.php';


?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Film php</title>
</head>
<body>
  <h1>Film</h1>
  <div>
    <ul>
      <?php foreach($productions as $production): ?>
      <li>
        <?= $production->getFullInfo() ?> - <?= $production->genre ->getFullGenre() ?> 
      </li>
      <?php endforeach; ?>
    </ul>
  </div>
</body>
</html>