<?php  
  // Check for post data 
 /*  if(filter_has_var(INPUT_POST, 'data')) {
    echo 'Data found';
  } else {
    echo 'No data';
  } */

  /* if(filter_has_var(INPUT_POST, 'data')) {
    $email = $_POST['data'];

    // REmove illegal chars

    $email = filter_var($email, FILTER_SANITIZE_EMAIL);
    echo $email.'<br>';

      if(filter_input(INPUT_POST, 'data', FILTER_VALIDATE_EMAIL)) {
        echo 'Email is valid';
      } else {
        echo ' Email is NOT valid';
      }
  } */

  /*  
   FILTER_VALIDATE_BOOLEAN
   FILTER_VALIDATE_EMAIL
   FILTER_VALIDATE_FLOAT
   FILTER_VALIDATE_INT
   FILTER_VALIDATE_IP
   FILTER_VALIDATE_REGEXP
   FILTER_VALIDATE_URL */

    /* 
    FILTER_SANITIZE_EMAIL
    FILTER_SANITIZE_ENCODED
    FILTER_SANITIZE_NUMBER_FLOAT
    FILTER_SANITIZE_NUMBER_INT
    FILTER_SANITIZE_SPECIAL_CHARS
    FILTER_SANITIZE_STRING
    FILTER_SANITIZE_URL */


// Validate integer
  /*   if(filter_has_var(INPUT_POST, 'data')){

    $var = $_POST['data'];
    if(filter_var($var, FILTER_VALIDATE_INT)) {
      echo $var. ' is a integer number';
    } else {
      if(filter_var($var, FILTER_VALIDATE_FLOAT))
      {
        echo $var. ' is NOT a int ';
        
      } else {
        echo $var. ' is NOT a number';
      }
    }
    
  } */

// Sanitize integer

/* if(filter_has_var(INPUT_POST, 'data')){
  $number = $_POST['data'];
  $number = filter_var($number, FILTER_SANITIZE_NUMBER_INT);
  echo $number;

} */

// Sanitize special characters
  /*  $var = '<script>alert(1)</script>';
  //  echo $var;
   echo filter_var($var, FILTER_SANITIZE_SPECIAL_CHARS); */

// Filter input array
// $filters = array(
//   "data" => FILTER_VALIDATE_EMAIL,
//   "data2" => array(
//     "filter" => FILTER_VALIDATE_INT,
//     "options" => array(
//       "min_range" => 1,
//       "max_range" => 100
//     )
//   )
// );

// print_r(filter_input_array(INPUT_POST, $filters));

// FIlter var array

$arr = array(
  "name" => "rares crisan",
  "age" => "121",
  "email" => "rares@gmail.com"
);

$filters = [
  "name" => [
    "filter" => FILTER_CALLBACK,
    "options" => "ucwords"
  ],
  "age" => [
    "filter" => FILTER_VALIDATE_INT,
    "options" => [
      "min_range" => 1,
      "max_range" => 120
    ]
  ],
  "email" => FILTER_VALIDATE_EMAIL

];

print_r(filter_var_array($arr, $filters));



?>



<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
  <label>Submit some data</label>
  <input type="text" name="data">
  <input type="text" name="data2">
  <input type="submit">
</form>