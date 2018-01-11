<?php

$saikoro1 = mt_rand(1, 6);
$saikoro2 = mt_rand(1, 6);

$zorome = ($saikoro1 == $saikoro2) ? true : false;

?>
<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="utf-8">
    <title>サイコロ</title>
  </head>
  <body>
    <h1>サイコロ</h1>
    <p>
      サイコロの目は「<?php echo $saikoro1 ?>」「<?php echo $saikoro2 ?>」でした!
      <?php if ($zorome) :?>
        ゾロ目です！
      <?php endif; ?>
    </p>
    <p><a href="<?php echo $_SERVER["SCRIPT_NAME"]; ?>">もう一度!</a></p>
  </body>
</html>
