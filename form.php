    <h1> Dice Roll Game!</h1>

    <form method="POST" action="<?php echo $_SERVER['SCRIPT_NAME'] ?>">
    <?php
      if (!isset($_POST['name']))
      {
        killsession($yourpath);
    ?>
      <label for="name">Players Name:</label>
      <br/>
      <input
        name="name"
        type="text"
        id="name"
        required
      />
    <?php
        } else {
            echo '<input type="hidden" id="name" name="name" value='.$_SESSION['name'].'>';
            if(!isset($_SESSION['name'])){
                $_SESSION['name'] = $_POST['name'];
                unset($totalRolls);
                echo "<p>What's up ".$_POST['name']."! Roll 10 times and try to get your highest score!</p>";
            } else {
                echo "<p>Back again, ".$_SESSION['name']."? Want to roll again?</p>";
            }
        }
    ?>
<br/>
<input
    name="rollDice"
    value="Roll Dice"
    type="submit"
/>
</form>
  </body>
</html>
