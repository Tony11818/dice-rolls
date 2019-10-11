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

  $diceSideImg = array('dice01','dice02','dice03','dice04','dice05','dice06');
  $diceRolls = array();


  //function to get array
  function rolldice(int $numsides = 6, int $numdice = 6):array
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

 if(!isset($_SESSION['pastRolls']))
  {
    $_SESSION['pastRolls'] = array(rolldice(6,6));
  }
  else
  {
    $_SESSION['pastRolls'][] = rolldice(6,6);
    if(count($_SESSION['pastRolls']) > 10 ) 
    {
      array_shift($_SESSION['pastRolls']);
    }
  }
  foreach($_SESSION['pastRolls'] as $sessions)
  {
    $tonysnum = 0;
    foreach($sessions as $dice)
    {
    ?><img src="images/dice0<?php echo $dice?>.png"><?php
    $tonysnum = $tonysnum + $dice;
    }
    ?><p>total: <?php echo $tonysnum; ?></p><br><?php
  }
  echo "<br>";
  }
