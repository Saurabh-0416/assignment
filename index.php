<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Complete Assignment into one</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php
    include 'functions.php';
    ?>
    <section class="top">
    <div class="header">
        <h1 class="heading">Anup Sir Assignment</h1>
    </div>    
          <h2 class="task"> #TASK 1</h2>
    <div class="title">Your System Info : </div>
    <div class="ip-address">
    <div class="ip-text">Your System Time is :</div>
    <div class="ip-tab">   
        <?php
        echo "<div class='ip-number'>" . timestamp() . "</div>";
        ?> 
    </div>
    </div>

    <div class="ip-address">
    <div class="ip-text">Your Public IP Address is :</div>
    <div class="ip-tab">   
        <div class="ip-number" id="client-ip"></div>
        <script>
        fetch('https://api.ipify.org?format=json')
        .then(response => response.json())
        .then(data => {
            document.getElementById("client-ip").innerHTML = data.ip;
        });
        </script>
    </div>
    </div>

    <div class="ip-address">
    <div class="ip-text">Your IP Address is :</div>
    <div class="ip-tab">   
        <?php
        echo "<div class='ip-number'>" . ip() . "</div>";
        ?> 
    </div>
    </div>

    <div class="ip-address">
    <div class="ip-text">Your Mac Address is :</div>
    <div class="ip-tab">   
        <?php
        echo "<div class='ip-number'>" . mac() . "</div>";
        ?> 
    </div>
    </div>
    
    <div class="ip-address">
    <div class="ip-text">Your Operating System info is :</div>
    <div class="ip-tab">   
        <?php
        echo "<div class='ip-number'>" . os() . "</div>";
        ?> 
    </div>
    </div>
    </section>


    <section class="middle">
        <h2 class="task"> #TASK 2</h2>
        <div class="marks">
        <div class="title-2">Calculate Marks of Students</div>
        <button class="btn"><a class="btntxt" href="marksBase.php">Calculate Marks</a></button>
        </div>
    </section>
    <h2 class="task"> #TASK 3</h2>
    <button class="btn"><a class="btntxt" href="log.txt">Show Log File</a></button>

    <h2 class="task"> #TASK 4</h2>
    <p id="disable_top"> </p>
    <button onclick="disable()" class="btn"><a class="btntxt">Disable Right Click</a></button>
    <p id="disable_down"> </p>
    <script>
        var a = document.getElementById("disable_top");
        var b = document.getElementById("disable_down");
        a.innerHTML = "Click on the button to disable right click";

        function disable (){
            document.addEventListener('contextmenu',
                event => event.preventDefault());
                b.innerHTML = "Right Click Disabled";
        }
    </script>

    <h2 class="task"> #TASK 5</h2>
    <button onclick="fullscreen()" class="btn"><a class="btntxt">Click to Enter Fullscreen</a></button>

    <script>
        var f = document.documentElement;
        function fullscreen() 
        {   
            if (f.requestFullscreen) 
            {
                 f.requestFullscreen();
            } 
            else if(f.webkitRequestFullscreen) 
            { /* Safari */
                f.webkitRequestFullscreen();
            }
            else if (f.msRequestFullscreen) 
            { /* IE11 */
                f.msRequestFullscreen();
            }
        }
    </script>

</body>
</html>

<?php
    $ip = ip();
    $os = os();
    $mac = mac();
    $log = "IP Address: $ip" . PHP_EOL . "MAC Address: $mac" . PHP_EOL . "Operating System: $os" . PHP_EOL;
    file_put_contents('log.txt', $log, FILE_APPEND);
?>
