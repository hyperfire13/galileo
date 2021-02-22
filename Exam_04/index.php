<?php
$datetime1 = new DateTime('2019-05-31');
$datetime2 = new DateTime('2018-04-05');
$difference = $datetime1->diff($datetime2);
echo $difference->format('%y years, %m months, %d days ');
?>