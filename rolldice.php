<?php
// STARTING SESSION COOKIES CODE
  declare(strict_types=1);
  $yourpath = dirname($_SERVER['SCRIPT_NAME']). '/';
  $lifetime = 0;  //0 expires when browser closes, otherwise time in seconds
  session_set_cookie_params ($lifetime,$yourpath);
  /* Trying to set your own domain, secure and httponly seems to be blocked
     in modern browsers, and is assumed on if it can.
     Some Diagnostics you could run if you wanted:
      echo "<b>Diagnostic Information</b><br />\n";

      echo "Session Name: " . session_name() . "<br />\n";
      echo "Session ID: "  . session_id() . "<br />\n";
      echo "Session Module name: " . session_module_name() . "<br />\n";
      echo "Session Save Path: " . session_save_path()  . "<br />\n";
      echo "Encoded Session: " . session_encode() . "<br />\n";
      print_r(session_get_cookie_params();

  */
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

//function to attach images to array

  //function to get array
  function rolldice(int $numsides, int $numdice): array
  {
    if ( $numsides == 0 or $numdice == 0 )
    {
      return $diceRolls;
    }
    else
    {
      for ( $i = 1; $i <= $numdice; $i++)
      {
        $diceRolls[] = mt_rand(1,$numsides);
      }
      return $diceRolls;
    }
  }

  $firstRoll = rolldice(6,6);
  //print_r($firstRoll);
  echo "<br>";
  //$totalRolls[] = $_SESSION['pastRolls'];
  $totalRolls[] = $firstRoll;
  echo "<br>";
  //print_r($totalRolls);
  echo "<br>";

?>
