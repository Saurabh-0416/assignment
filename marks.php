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
    <div>
        <p class="help">Enter the name of student and marks obtained by the student in the subjects</p>
    </div>
<div class="inputform">
<form method="POST" action="process.php">
  <table id="formtable">
    <tr>
      <th>Student Name</th>
      <th>Subject 1</th>
      <th>Subject 2</th>
      <th>Subject 3</th>
      <th>Subject 4</th>
      <th>Subject 5</th>
    </tr>
    <?php for($i=0; $i<$_POST["x"]; $i++){ ?>
    <tr>
      <td><input type="text" name="students[]"></td>
      <?php for($j=0; $j<5; $j++){ ?>
      <td><input type="number" name="marks[<?php echo $i; ?>][]"></td>
      <?php } ?>
    </tr>
    <?php } ?>
  </table>
  <input class="btn" type="submit" value="Calculate">
</form>
</div>
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