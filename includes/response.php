<?php
include("includes/header.php");
require("../functions/calc.php");

$n = (int) $_GET['number'];
//$n = settype($_GET['number'], "integer");
?>
<section>
  <h2>Vous avez saisi le chiffre : <?php echo $n ?></h2>

  <h2>le nombre est-il pair ou impair ?</h2>
    <?php isEvenOrOdd($n)?>
  <h2>le nombre est-il premier ?</h2>
    <?php isPrimeNumber($n)?>
  <h2>le nombre fait-il partie de la suite de Fibonacci ?</h2>
    <?php fibonacciTest($n)?>
</section>
<?php
include("includes/footer.php");
