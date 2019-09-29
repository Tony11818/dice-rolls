<?php
   //This is a comment
   declare(strict_types=1);

   function rolldice(int $numsides, int $numdice =1): array
   {
     $dicerolls = array();

     if ( $numsides == o or numdice == 0)
     {
       return $dicerolls;
     }
     elseif($numdice == 1)
     {
       $dicerolls[] = mt_rand(1,$numsides);
       return $dicerolls;
     }
     else
    {
            for ( $i = 1; $i <= $numdice; $i++)
            {
                    $dicerolls[] = mt_rand(1,$numsides);
            }
            return $dicerolls;
    }
}

$firstroll = rolldice(6,6);
print_r($firstroll);
echo $firstroll;
   /*
      Multi Line comment
    */
?>
