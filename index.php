<?php
// $i est init a 0, $i jusqu'a 100, $i ajout +1 chaque tour
  for($i = 1; $i <= 100; $i++){
    // Si $i est multiple de 3 et $i est multiple de 5 on affiche FizzBuzz
    if($i % 3 == 0 && $i % 5 == 0):
      echo $i.' est multiple de 3 et 5 (FizzBuzz)<br />';
      //Sinon si $i est multiple de 5 on affiche Buzz
      elseif ($i % 5 == 0):
        echo $i.' est un multiple de 5 (Buzz) <br />';
        //Sinon si $i est multiple de 3 on affice Fizz
        elseif ($i % 3 == 0):
          echo $i.' est multiple de 3 (Fizz) <br />';
          else:
            echo $i;
  //Fin du Si
  endif;
  }
?>
