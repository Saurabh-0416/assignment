<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Marks Status</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="header">
        <h1 class="heading">Anup Sir Assignment</h1>
    </div>
    
<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $students = $_POST["students"];
    $marks = $_POST["marks"];
    echo "<table id='formtable' border='1'>
            <tr>
                <th>Student Name</th>
                <th>Percentage</th>
            </tr>";
    for ($i = 0; $i < count($students); $i++) {
        $sum = 0;
        for ($j = 0; $j < count($marks[$i]); $j++) {
            $sum += $marks[$i][$j];
        }
        $percentage = $sum/5; 
        echo "<tr>
                <td>" . $students[$i] . "</td>
                <td>" . $percentage . "%</td>
              </tr>";
    }
    echo "</table>";
}    
?>
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
