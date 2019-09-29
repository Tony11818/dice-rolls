<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Roll My Dice</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1"/>
    <meta name="dcterms.rightsHolder" content="Aurelio Anselmo" />
    <meta name="dcterms.dateCopyrighted" content="2019" />
    <meta name="description" content="Roll Dice Game" />
    <meta name="keywords" content="Dice Roll With PHP"/>
  </head>
  <body>
    <h1> Dice Roll Game!</h1>

    <form method="POST" action="rolldice.php">
      <input type="submit" name="submit" value="Roll A Dice">
    </form>

    <div>
      <p>
        <?php include("rolldice.php"); ?>
      </p>
    </div>
  </body>
</html>
