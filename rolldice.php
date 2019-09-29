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

  for ($i = 1; $i <= $numdice; $i++) {
    $currentRoll = mt_rand(1,$numsides);
    $totalRolls[] = $currentRoll;
    echo "<div class='roll-container'><img src='images/$totalRolls.png'></div><br>"
  }

   /*
      Multi Line comment
    */
?>
