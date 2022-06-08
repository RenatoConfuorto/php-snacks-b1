<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  
<?php 
  $games = [
    [
      'locals' => 'Napoli',
      'outsiderTeam' => 'Roma',
      'localsPointz' => 40,
      'outsidersPoints' => 35.
    ],
    [
      'locals' => 'Roma',
      'outsiderTeam' => 'Napoli',
      'localsPointz' => 55,
      'outsidersPoints' => 60.
    ],
    [
      'locals' => 'Torino',
      'outsiderTeam' => 'Atalanta',
      'localsPointz' => 55,
      'outsidersPoints' => 70.
    ],
    [
      'locals' => 'Atalanta',
      'outsiderTeam' => 'Torino',
      'localsPoints' => 65,
      'outsidersPoints' => 70.
    ],
  ];
  // var_dump($games);
  // var_dump(count($games));
?>

<h1>Risultati delle partite</h1>

<ul>
  <?php
  for ($i = 0; $i < count($games); $i++){
    $currentGame = $games[$i];?>
    <li><?php echo $currentGame['locals'] . ' - ' . $currentGame['outsiderTeam'] . ' | ' .$currentGame['localPoints'] . '-' . $currentGame['outsidersPoints'];
    ?></li>
  <?php }?>
</ul>
</body>
</html>