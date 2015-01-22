

<?php

$content = file_get_contents("https://api.facebook.com/method/fql.query?query=select%20like_count%20from%20link_stat%20where%20url=%27https://www.facebook.com/mitrevels?ref=br_tf%27&format=json");

$total = substr($content, strpos($content, ":")+1, 5);

$total = substr($total, 0, strpos($total, '}'));

$return = array('total_users'=>$total);
echo json_encode($return);
//string substr ( string $string , int $start [, int $length ] )
//strpos(string,find,start) 
//"[{\"like_count\":9632}]
exit;
