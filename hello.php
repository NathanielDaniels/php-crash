<?php
  echo "Hello,";
  echo htmlspecialchars($_GET["name"]);

  // phpinfo()
  // echo $_SERVER['HTTP_USER_AGENT'];
  // echo $_GET['name'];
  // echo $_SERVER['DOCUMENT_ROOT'];
?>
<?php 
  // print_r([1,2,3,4,5,6,7,8,9,10]) 
  $time = date("H");
  // echo $time;
  if ($time < "10") {
    echo "! Have a good morning!";
  } elseif ($time < "20") {
    echo "! Have a good day!";
  } else {
    echo "! Have a good night!";
  }

  echo $time < '10' ? 'Good Morning' : 'Good Night';

  $numbers = [1,2,3,4,5,6,7,8,9,10];
  // foreach ($numbers as $number) {
  //   echo $number + 1 . "<br />";
  // }

  // $multiply = fn($x) => $x * 2;

  // echo $multiply(2);

  $fruits = ['apple', 'banana', 'orange', 'grape', 'mango'];

  // get length of array
  // echo count($fruits);
  echo "<br />";
  //search array
  // echo array_search('apple', $fruits);

  // add to array
  // array_push($fruits, 'pear');
  
  // remove from array
  // array_shift($fruits);
  // split array
  // print_r(array_chunk($fruits, count($fruits) % 2 == 0 ? 2 : 3));
  // concatenate arrays
  // print_r(array_merge($fruits, $numbers));
  // print_r([...$fruits, ...$numbers]);

  // combine arrays
  // print_r(array_combine($fruits, $fruits2));

  // flip array
  // print_r(array_flip($fruits));

  // create array with range of numbers
  print_r(range(1, 20));

  // map array
  print_r(array_map(fn($x) => $x * 2, $numbers));

  // filter array
  print_r(array_filter($numbers, fn($x) => $x <= 10));
  // foreach($fruits as $fruit) {
  //   echo $fruit . "<br />";
  // }
  // for ($x = 0; $x <= 10; $x++) {
  //   echo " <br> The number is: $x";
  // }
?>
<?= "<br />" ?>
<!-- This does the same as above but single line -->
<?= "Hello, " . htmlspecialchars($_GET["name"]) . "!"; ?>

