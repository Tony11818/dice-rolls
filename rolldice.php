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
  $diceSideImg = array('dice01','dice02','dice03','dice04','dice05','dice06');
  $diceRolls = array();

  //variables for amount of dice and sides

  $numdice = 6;
  $numsides = 6;

  //function to get array
  function rolldice(int $numsides, int $numdice): int
  {
    if ( $numsides == 0 or $numdice == 0 )
    {
      return 0;
    }
    elseif ( $numdice == 1 )
    {
      $value = mt_rand(1,$numsides);
      return $value;
    }
    else
    {
      $value = 0;
      for ( $i = 1; $i <= $numdice; $i++)
      {
        $value = $value + mt_rand(1,$numsides);
      }
      return $value;
    }
  }

  $firstRoll = rolldice();
  print_r($firstRoll)
?>
