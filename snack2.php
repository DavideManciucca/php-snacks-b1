<?php
var_dump($_GET);
$isAuth = true;
$error = '';
if(empty($_GET['name']) || empty($_GET['mail']) || empty($_GET['age'])){
  $error = 'Inserisci tutti i dati correttamente!';
  $isAuth = false;
}elseif(strlen($_GET['name']) < 3 ){    
  $error = 'Iserisci un nome valido !';
  $isAuth = false;
}elseif(!strpos($_GET['mail'], '@') || !strpos($_GET['mail'], '.')){
  $error = 'Inserisci una mail valida!';
  $isAuth = false;
}elseif(!is_numeric($_GET['age'])){
  $error = 'inserisci una età valida! (numero!)';
  $isAuth = false;
}
if($isAuth ){
  $output = 'Accesso riuscito';
}else{
  $output = 'Accesso negato';
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>mail control</title>
</head>
<body>
<h3>mail control</h3>
<h1><?php echo $output ?></h1>
<?php if(!$isAuth): ?>
  <i>Errore: <?php echo $error ?></i>
<?php endif; ?>
</body>
</html>