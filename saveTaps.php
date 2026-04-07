<?php
file_put_contents("tap_logs.txt", $_POST['taps']."\n", FILE_APPEND);
echo "Saved locally";
?>