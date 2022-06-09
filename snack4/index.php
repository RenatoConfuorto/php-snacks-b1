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
    $min = $_GET['min'];
    $max = $_GET['max'];
    // var_dump($nbr);
    $nbrCount = 15;

    $nbrArray = [];
    while(count($nbrArray) < $nbrCount){
      $nbr = rand($min, $max);
      if(!in_array($nbr, $nbrArray)){
        $nbrArray[] = $nbr;
      }
    }

    // var_dump($nbrArray);
    
  ?>

  <ul>
    <?php foreach($nbrArray as $element){ ?>
      <li><?php echo $element; ?></li>
    <?php }?>
  </ul>
</body>
</html>