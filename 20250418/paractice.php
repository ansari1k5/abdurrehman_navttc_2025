<?php 
$userpassword = "rehman123";
$correctpassword = "rehman3";

$message = '';

if ( $correctpassword == $userpassword ){
  header("Location: index.php");
} else{
  $message = "Satisfied with failure!";
}

?>
?>
<html>
 <head>
  <style>
   .success , .failure {
    text-align: center;
   }
   .success  {
    color: 'green';
    border: 2px solid green;
   }

   .failure {
    color : 'red';
    border: 2px solid red;
   }
  </style>

 </head>
 <body>
  
   <?php if ( $message != '' ){
     echo "<div class='failure'>". $message  ."</div>";
   }
   ?>
 </body>
</html>