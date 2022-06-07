
<?php 


function generateNumber($min, $max, $limit){
  $newArray = [];
  while(count($newArray) < $limit){
    $number = rand($min, $max);
    if(!in_array($number, $newArray)){
      $newArray[] = $number;
    }
  }
  return $newArray;
}
$random_numbers = generateNumber(1, 99, 15);
var_dump($random_numbers);
?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
 

</body>
</html>