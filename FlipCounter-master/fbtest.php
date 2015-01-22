<?php

$content = file_get_contents("http://tinyurl.com/k5pc9p6");

$total = substr($content, strpos($content, ":")+1, 5);

$total = substr($total, 0, strpos($total, '}'));

$return = array('total_users'=>$total);
echo json_encode($return);
exit;
