 <?php
        function ip() 
        {
            $hostname = gethostbyname(gethostname());
            return $hostname;
        }

        function mac()
        {
            exec('ipconfig /all', $output);
            $output = implode("\n", $output);
            preg_match('/..-..-..-..-..-../', $output, $matches);
            $mac = $matches[0];
            return $mac;
            
        }

        function os()
        {
            $os = PHP_OS;
            return $os;
        }

        function timestamp()
        {
            // $timestamp = date('d-m-Y H:i:s',time());
            // return $timestamp;
            $ist_time = new DateTime('now', new DateTimeZone('Asia/Kolkata'));
            return $ist_time->format('d-m-Y H:i:s');
        }

        function privateIp()
        {
            if (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
            $pIP = $_SERVER['HTTP_X_FORWARDED_FOR'];
            } elseif (!empty($_SERVER['HTTP_CLIENT_IP'])) {
            $pIP = $_SERVER['HTTP_CLIENT_IP'];
            } else {
            $pIP = $_SERVER['REMOTE_ADDR'];
            }
            return $pIP;
        }

    ?>

    
<?php
  $ip = ip();
  $os = os();
  $mac = mac();
  $log = "IP Address: $ip" . PHP_EOL . "MAC Address: $mac" . PHP_EOL . "Operating System: $os" . PHP_EOL;
  file_put_contents('log.txt', $log, FILE_APPEND);
    
?>