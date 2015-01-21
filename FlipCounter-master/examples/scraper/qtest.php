

<?php

$content = file_get_contents("http://quora-api.herokuapp.com/users/Mukul-Dhariwal");

$total = substr($content, strpos($content, "followers\"")+12,3);

$return = array('total_users'=>$total);
echo json_encode($return);
//string substr ( string $string , int $start [, int $length ] )
//strpos(string,find,start) 
//"[{\"like_count\":9632}]
exit;
