

<?php

$content = file_get_contents("https://twitter.com/revelsmit");

$total = substr($content, strpos($content, "ProfileNav-value")+41,4);
$total = str_replace('>', '', $total);
$return = array('total_users'=>$total);
echo json_encode($return);
//string substr ( string $string , int $start [, int $length ] )
//strpos(string,find,start) 
//"[{\"like_count\":9632}]
exit;
