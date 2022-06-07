<?php
  $tappe = [
    [
      'casa' => 'Lakers',
      'punticasa' => 119,
      'ospite' => 'Toronto Raptors',
      'puntiospite' => 98
    ],
    [
      'casa' => 'SportingClub',
      'punticasa' => 82,
      'ospite' => 'Olimpia Milano',
      'puntiospite' => 99
    ],
    [
      'casa' => 'Cleveland',
      'punticasa' => 120,
      'ospite' => 'Detroit Pistons',
      'puntiospite' => 125
    ],
    [
      'casa' => 'Chicago Bulls',
      'punticasa' => 138,
      'ospite' => 'Los Angles LAkers',
      'puntiospite' => 140
    ],
  ];

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Snack 1</title>
</head>
<body>
  <h1>Lista partite basket</h1>
  <ul>
    <?php for($i = 0; $i < count($tappe); $i++): ?>
      <li><?php echo $tappe[$i]['casa'].' - '.$tappe[$i]['ospite'].' | '.$tappe[$i]['punticasa'].'-'.$tappe[$i]['puntiospite'] ?> </li>
    <?php endfor; ?>  
  </ul>
</body>
</html>