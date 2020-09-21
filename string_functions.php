<h3 style="margin: 40px; font-family: Arial, Helvetica, sans-serif;
line-height: 1.7">
<?php 
  #substr()
  # returns a portion of a string
  echo '<p style="color: orange">substr()</p>';
  $string = 'Rares is nice from 1989       ';
                # string init  length
                
  $output = substr($string, 9, 13);

  echo $output;

  # strlen()
  # Returns the length of a string
  echo '<hr>';
  echo '<p style="color: orange">strlen()</p>';
  echo 'The length of output = ';
  echo strlen($output);

  #strpos()
  # returns the position of the first occurence of a substring
  echo '<hr>';
  echo '<p style="color: orange">strpos()</p>';
  echo 'The first pos of the substr = ';
   echo strpos($string, 'a');

  #strrpos()
  #returns the position of the last occurence of a substring
  echo '<hr>';
  echo '<p style="color: orange">strrpos()</p>';
  echo 'The last pos of the substr = ';
  echo strrpos($string, 'a');

  #trim()
  # Strips the whitespace after the string
  echo '<hr>';
  echo '<p style="color: orange">trim()</p>';
  var_dump($string);
  echo '<br>';
  var_dump(trim($string));

  #strtoupper()
  # mk all uppercase
  echo '<hr>';
  echo '<p style="color: orange">strtoupper()</p>';
  echo strtoupper($string);

  #strtolower()
  # mk all lowercase
  echo '<hr>';
  echo '<p style="color: orange">strtolower()</p>';
  echo strtolower($string);

  #ucwords()
  #Capitalize every word
  echo '<hr>';
  echo '<p style="color: orange">ucwords()</p>';
  echo ucwords($string);

  #str_replace()
  echo '<hr>';
  echo '<p style="color: orange">str_replace()</p>';
  echo str_replace('Rares', 'Rares Crisan', $string);

  #is_string()
  # tests to see if smth is string or not
  echo '<hr>';
  echo '<p style="color: orange">is_string()</p>';
  $notAString = 123;
  echo is_string($notAString);
  echo is_string($string);

  $array = [null, false, true, '123', 33, '33', 22.4, '22.4', '', ' ',
   0, '0'];

   foreach($array as $item){
     if(is_string($item))
     {echo "{$item} is string";
     echo is_string($item);
     echo '<hr>';
   }
   }

   #gzcompress()
   #compresses text
   echo '<hr>';
    echo '<p style="color: orange">gzcompress()</p>';
   $text = 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Voluptas molestiae nemo explicabo. Omnis recusandae magnam, aliquam rem provident eum! Reprehenderit, nobis? Cupiditate ducimus at corporis eius dolore perspiciatis, repellendus ipsum eaque explicabo magnam reprehenderit error cum harum ad sint deserunt quod consectetur modi consequuntur eligendi id blanditiis eveniet qui. Cumque.';

   $compressed = gzcompress($text);

   echo "<p>{$compressed}</p>";
#gzcompress()
   #compresses text
   echo '<hr>';
    echo '<p style="color: orange">gzuncompress()</p>';
   echo gzuncompress($compressed);
  ?>
  </h3>