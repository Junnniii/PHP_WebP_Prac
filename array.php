<!DOCTYPE html>
<html lang="ko">
  <head>
    <meta charset="utf-8">
    <title>Array</title>
  </head>
  <body>
    <h1>Array</h1>
    <?php
    $coworkers = array('egoing','leezche','duru','taeho','hanjun');
    echo $coworkers[1].'<br>';
    echo $coworkers[4].'<br>';
    var_dump(count($coworkers));
    echo '<br>';
    array_push($coworkers,'graphittie');
    var_dump($coworkers);
     ?>
  </body>
</html>
