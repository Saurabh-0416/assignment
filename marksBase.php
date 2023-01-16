<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Marks</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="header">
        <h1 class="heading">Anup Sir Assignment</h1>
    </div>
    <form action="marks.php" method="post">
        <div class="student">Enter Number of students :<br>
            <input class="input1" type="number" name="x">
        </div>
    </form>
</body>
</html>

<?php
  include 'functions.php';
  $ip = ip();
  $os = os();
  $mac = mac();
  $log = "IP Address: $ip" . PHP_EOL . "MAC Address: $mac" . PHP_EOL . "Operating System: $os" . PHP_EOL;
  file_put_contents('log.txt', $log, FILE_APPEND);
    
?>