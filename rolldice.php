<?php
// STARTING SESSION COOKIES CODE
  declare(strict_types=1);
  $yourpath = dirname($_SERVER['SCRIPT_NAME']). '/';
  $lifetime = 0;  //0 expires when browser closes, otherwise time in seconds
  session_set_cookie_params ($lifetime,$yourpath);
  session_start();
  session_regenerate_id();

  function killsession(string $cookiepath)
  {
    session_unset();
    session_destroy();
    setcookie(session_name(),"",time() - 3600, $cookiepath);

  }

  if (isset ($_POST['reset'])) {
    killsession($yourpath);

  } else if ( isset ($_POST['rollDice'])){
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
  print_r($firstRoll);
  echo "<br>";
  $totalRolls[] = $_SESSION['pastRolls'];
  //$totalRolls[] = $firstRoll;
  echo "<br>";
  print_r($totalRolls);
  echo "<br>";
  }
?>
