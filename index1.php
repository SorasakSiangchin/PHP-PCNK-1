<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
      <?php
       // $A = 8;
       // $a = "Hello World" ." " .$A;
       // $a .= "Sorasak";
       //
       //  echo "string $a <br>";
       //  echo 'string';
       //  echo "<br>";

       sudkun(5);
       sudkun(8);
       sudkun(10);
       sudkun(11);
       sudkun(12);

        function sudkun($num)
        {
          for ($j=$num; $j < $num + 1; $j++) {
              echo 'แม่ ' , $j;
              echo "<br>";
              for ($i=1; $i < 13; $i++) echo $j ,' X ', $i, ' = ' , $i*$j , '<br>';
                echo '---------------------------------';
                echo "<br>";
            // if($j%2 == 0){
            //   echo 'แม่ ' , $j;
            //   echo "<br>";
            //   for ($i=1; $i < 13; $i++) echo $j ,' X ', $i, ' = ' , $i*$j , '<br>';
            //     echo '---------------------------------';
            //     echo "<br>";
            // };
          };
        };

       ?>
       <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/6/6b/American_Beaver.jpg/640px-American_Beaver.jpg" />
  </body>
</html>
