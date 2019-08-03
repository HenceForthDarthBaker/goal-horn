<?php
header('Location: http://192.168.1.18');
$output = shell_exec('sudo python /home/pi/goalhorn/goalhorn.py');
echo "<pre>$output</pre>";
?>
