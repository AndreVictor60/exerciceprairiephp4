  <?php
for($i = 0; $i <= 100; $i++){
  if($i % 3 == 0 && $i % 5 == 0):
    echo $i." est multiple de 3 et 5 (FizzBuzz)<br />";

    elseif ($i % 5 == 0):
      echo $i." est un multiple de 5 (Buzz) <br />";

      elseif ($i % 3 == 0):
        echo $i." est multiple de 3 (Fizz) <br />";
endif;
}
?>
