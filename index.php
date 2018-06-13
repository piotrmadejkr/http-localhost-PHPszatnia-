<?php include('settings.php');?>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<link rel="stylesheet" type="text/css" href="css/style.css">
    <title>szatnia</title>  
</head>
<body>
    
<form method="post">
<input type="text" placeholder="co wsadzasz do szafki" name="zawartosc">

<select name="wartosc">
<?php
for($i=0; $i<5; $i++) {
    echo '<option value="'.$i.'">szafka'.($i+1).'</option>';   
}
?>

<select>

<input type="submit" value="umiesc!" name="guzik">
</form>

<?php 

for($i=0; $i<5; $i++){
 
    $stan='';
  if($szafki[$i]!=''){
      $stan = 'zajeta';
  }

  echo  '<div class="obrys '.$stan.'">'.$szafki[$i].'</div>';
}


?>








<script type="text/javascript" src="http://code.jquery.com/jquery-1.9.0.min.js"></script>
<script type="text/javascript" src="js/jquery.waterwheelCarousel.min.js"></script>
<script type="text/javascript" src="js/script.js"></script>
</body>
</html>

