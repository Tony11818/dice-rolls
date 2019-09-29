<?php
   //This is a comment
  declare(strict_types=1);

  // STARTING SESSION COOKIES CODE
/*  $yourpath = dirname($_SERVER['SCRIPT_NAME']). '/';
  $sessionoptions = [ 'lifetime' => 0, 'path'=> $yourpath,'secure' => TRUE, 'httponly' => TRUE];
  session_set_cookie_params ($sessionoptions);
  session_start();
  session_regenerate_id();

  function killsession(string $cookiepath)
  {
    session_unset();
    session_destroy();
    setcookie(session_name(),"",time() - 3600, $cookiepath);
  }*/
  // ENDING SESSION COOKIES CODE
  $diceSideImg = array('dice01','dice02','dice03','dice04','dice05','dice06');
  $diceRolls = array();

  //variables for amount of dice and sides

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
  print_r($firstRoll)
  //echo "<img"

  if ($_POST[submitted])
    {
        echo "Process form";

    }
    else
    {
    echo <<< _ENDOFFORM_
      <form method="post" action="$_SERVER[SCRIPT_NAME]">
      <label for="fname">First Name</label>
      <input type="text" name="first_name" id="fname" /><br />
      <input type="submit" name="submitted" />
      </form>
_ENDOFFORM_;
  }
?>
