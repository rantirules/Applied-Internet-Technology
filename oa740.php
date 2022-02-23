<html>
   <head>
     <title> Ranti </title>
   </head>
   <body>
     Guess
 <?php

 if (isset($_POST[" submitButton" ]) and isset($_POST[" guess" ])) {
   processForm();
 } else {
   showForm(10);
 }

 function processForm() {
   $number = (int)$_POST[" number" ];
   $guess = (int)$_POST[" guess" ];

   if ($guess == $number) {
     showSuccess($number);
   }  elseif ($guess <$number) {
     showForm($number," Too low-try again!" );
   } else {
     showForm($number," Too high-try again!" );
   }
 }

 function showForm($number,  $message="" ) {
 ?>
     <form action="" method="post">
       <div>
        <input type="hidden" name="number" value="<?php echo $number?>" />
        <input type="hidden" />
        <?php if ($message) echo " <p>$message</p>" ?>
        <p>I'm thinking of a number. </p>
        <p>What's your guess? <input type="text" name="guess" value=""/> 
        <input type="submit" name="submitButton" value="Guess"/></p>
      </div>
    </form>
<?php
}

function showSuccess($number) {
?>
    <h2>Congratulations!</h2>
    <p>You guessed my number: <?php echo $number?>!</p>

    <form action="" method="post">
      <p><input type="submit" name="tryAgain" value="Try Again"/></p>
    </form>
<?php
}

?>
  </body>
</html>
/*
*/
  

