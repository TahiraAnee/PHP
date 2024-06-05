<?php
  function isPrime($n)
  {
       if($n==1)return false;
       
       for($i=2 ; $i<=sqrt($n) ;$i++)
       {
          if($n % $i==0)
          {
            return false;
          }
       }
       return true;
  }
  $numbers=array(1,2,3,4,5,6,7,8,9,10);
 
  foreach($numbers as $x)
  {
      if(isPrime($x))
      {
        echo $x;
        echo "\t";
      }
  }
?>