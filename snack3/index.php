<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">
  <title>Document</title>
</head>

<body>

  <?php
  $posts = [
    '10/01/2019' => [
      [
        'title' => 'Post 1',
        'author' => 'Michele Papagni',
        'text' => 'Testo post 1'
      ],
      [
        'title' => 'Post 2',
        'author' => 'Michele Papagni',
        'text' => 'Testo post 2'
      ],
    ],
    '10/02/2019' => [
      [
        'title' => 'Post 3',
        'author' => 'Michele Papagni',
        'text' => 'Testo post 3'
      ]
    ],
    '15/05/2019' => [
      [
        'title' => 'Post 4',
        'author' => 'Michele Papagni',
        'text' => 'Testo post 4'
      ],
      [
        'title' => 'Post 5',
        'author' => 'Michele Papagni',
        'text' => 'Testo post 5'
      ],
      [
        'title' => 'Post 6',
        'author' => 'Michele Papagni',
        'text' => 'Testo post 6'
      ]
    ],
  ];

  // var_dump($posts);
  
  ?>
  <div class="post-container">
    <?php foreach($posts as $element){?>
      <?php foreach($element as $singlePost){?>
        <div class="post">
          <div class="post-head">
            <h2><?php echo $singlePost['title']; ?></h2>
            <h3><?php echo $singlePost['author']; ?></h3>
          </div>
          <div class="post-text">
            <p><?php echo $singlePost['text']; ?></p>
          </div>
        </div>
      <?php }?>
    <?php } ?>
  </div>
</body>

</html>