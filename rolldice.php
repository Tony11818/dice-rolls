<?php
   //This is a comment
  declare(strict_types=1);

  // STARTING SESSION COOKIES CODE
  $yourpath = dirname($_SERVER['SCRIPT_NAME']). '/';
  $sessionoptions = [ 'lifetime' => 0, 'path'=> $yourpath,'secure' => TRUE, 'httponly' => TRUE];
  session_set_cookie_params ($sessionoptions);
  session_start();
  session_regenerate_id();

  function killsession(string $cookiepath)
  {
    session_unset();
    session_destroy();
    setcookie(session_name(),"",time() - 3600, $cookiepath);
  }
  // ENDING SESSION COOKIES CODE 

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
