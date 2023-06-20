<?php

function even_num($num)
{
  foreach ($num as $value) {
    if ($value % 2 == 0) {
      $arr[] = $value;
    }
  }
  return $arr;
}


function longest_string($string, $key)
{
  $longest = '';
  $key = -1;
  foreach ($string as $value => $word) {
    if (strlen($word) > strlen($longest)) {
      $longest = $word;
      $key++;
    }
  }
  echo "The longest string is $longest and it's index is $key";
}


function factorial($number)
{
  $factors = [];
  if ($number > 0)
    for ($i = 1; $i <= $number; $i++) {
      if ($number % $i == 0) {
        $factors[] = $i;
      }
    }
  return $factors;
}


function arr_multi($arr1, $arr2)
{
  $arr3 = [];
  if (count($arr1) != count($arr2)) {
    echo 'The array dont have the same number of element';
  }

  for ($i = 0; $i < count($arr1); $i++) {
    $arr3[$i] = $arr1[$i] * $arr2[$i];
  }
  echo 'The result of multiple two array is: <br>';
  return $arr3;
}

function prime($num)
{
  $factors = factorial($num);
  if (count($factors) == 2) {
    echo "$num is prime";
  } else {
    echo "$num is not prime";
  }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="css/bootstrap.min.css" />
  <link rel="stylesheet" href="css/all.min.css" />
  <link rel="stylesheet" href="css/task.css" />
  <title>Second Task</title>
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Roboto:wght@100;300;400;500;700;900&family=Work+Sans:wght@100;200;300;400;500;600;700;800&display=swap" rel="stylesheet" />
</head>

<body>
  <div class="card m-5 text-center">
    <h5 class="card-header">PHP Arrays and Functions Task</h5>

    <div class="card m-3 ps-4 text-start">
      <div class="card-body">
        <h6 class="card-title">Q1:Write a PHP function that accepts an array of integers and return a new array after removing odd numbers.
        </h6>
        <p class="card-text">Answer: <?php echo '<pre>';
                                      print_r(even_num([1, 2, 3, 4, 5, 6, 7, 8]));
                                      echo  '</pre>'; ?></p>
      </div>
    </div>
    <div class="card m-3 ps-4 text-start">
      <div class="card-body">
        <h6 class="card-title">Q2: Write a PHP function that accepts an array of strings and return the longest string found in the array.</h6>
        <p class="card-text">Answer: <?php longest_string(['Fatma', 'Salma Ahmed', 'Ali Sami', 'Abdullah'], -1); ?></p>
      </div>
    </div>
    <div class="card m-3 ps-4 text-start">
      <div class="card-body">
        <h6 class="card-title">Q3: Write a function that accepts 2 arrays and return a new array that holds the value of multiplying them.</h6>
        <p class="card-text">Answer: <?php echo '<pre>';
                                      print_r(arr_multi([1, 2, 3, 4], [5, 6, 7, 8]));
                                      echo  '</pre>'; ?></p>
      </div>
    </div>
    <div class="card m-3 ps-4 text-start">
      <div class="card-body">
        <h6 class="card-title">Q4: Write a function to calculate the factorial of a number (a non-negative integer) The function accepts the number as an argument.</h6>
        <p class="card-text">Answer: <?php
                                      echo "The factors is : <br>";
                                      echo '<pre>';
                                      print_r(factorial(27));
                                      echo  '</pre>';
                                      ?></p>
      </div>
    </div>
    <div class="card m-3 ps-4 text-start">
      <div class="card-body">
        <h6 class="card-title">Q5: Write a function to check whether a number is prime or not.</h6>
        <p class="card-text">Answer: <?php prime(12); ?></p>
      </div>
    </div>




  </div>

  <script src="js/bootstrap.bundle.min.js"></script>
  <script src="js/all.min.js"></script>
</body>

</html>