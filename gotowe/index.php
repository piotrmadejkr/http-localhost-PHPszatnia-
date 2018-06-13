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
    <form name="formSzafki" method="post">
    <input type="text" placeholder="napisz co przechowujesz" name="zawartosc">
    <select name="szafki">
      
        <?php
        for($i=0; $i<$iloscSzafek; $i++) {
            echo '<option value="'.$i.'">szafka'.($i+1).'</option>';
           
        }
        ?>



        <!-- <option value="2">szafka2</option>
        <option value="3">szafka3</option>
        <option value="4">szafka4</option>
        <option value="5">szafka5</option> -->
    </select>
    <input type="submit" name="wyslij" value="przechowaj">
</form>



<div class="lista">
  <?php 
        for($i=0; $i<$iloscSzafek; $i++){
         $zajeta='';
        
        
            if($szafka[$i] !=''){
                $zajeta='zajeta';
            }
            echo '<div class="kwadrat '.$zajeta.'">'.$szafka[$i].'</div>';
        }

        
 ?>   
</div>







<script type="text/javascript" src="http://code.jquery.com/jquery-1.9.0.min.js"></script>
<script type="text/javascript" src="js/jquery.waterwheelCarousel.min.js"></script>
<script type="text/javascript" src="js/script.js"></script>
</body>
</html>

