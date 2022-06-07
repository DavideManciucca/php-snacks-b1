<?php 
$text= 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsum ducimus placeat debitis obcaecati incidunt, quis doloremque sapiente, illum blanditiis vel in ipsam dolorum rerum eligendi. Harum neque rem quasi praesentium vitae eum tempora, delectus quod nulla exercitationem eius dolor accusantium suscipit cum fugit ipsam sunt magnam, earum doloremque et id? Neque, expedita. Officia facere eum aspernatur veritatis, doloremque rem, distinctio earum et optio inventore ex suscipit consequuntur dolore accusamus? Odit reprehenderit alias beatae praesentium non eum minus animi adipisci vitae asperiores facere ab nam impedit explicabo aliquid, tenetur delectus, accusantium architecto at ipsa nihil quasi, veritatis maiores. Aliquid, repellat soluta!';


$sentence = explode('.', $text);
var_dump($sentence);

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
  <h1>testo</h1>
  <p> <?php echo $text ?></p>

  <h1>il testo diviso dal punto</h1>
 
</body>
</html>