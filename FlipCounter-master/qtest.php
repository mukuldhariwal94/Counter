

<?php

$content = file_get_contents("http://www.quora.com/Revels-The-Cultural-and-Sports-Fest-of-MIT-Manipal");

$total = substr($content, strpos($content, ">Follow<")+27,4);
$total = str_replace('<','',$total);
$return = array('total_users'=>$total);
echo json_encode($return);
//string substr ( string $string , int $start [, int $length ] )
//strpos(string,find,start) 
//"[{\"like_count\":9632}]
exit;
