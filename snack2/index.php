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
  $userName = $_GET['name'];
  $userMail = $_GET['mail'];
  $userAge = $_GET['age'];

  $nameLengthValidation = strlen($userName) > 3;
  // var_dump($nameLengthValidation);

  $mailValidation = filter_var($userMail, FILTER_VALIDATE_EMAIL);
  // var_dump($mailValidation);

  $ageValidation = !(is_nan($userAge));
  //var_dump($ageValidation);

  if($nameLengthValidation && $mailValidation && $ageValidation){
    echo '<h1>Accesso consentito</h1>';
  }else{
    echo '<h1>Accesso Negato</h1>';
  }
  ?>

</body>
</html>