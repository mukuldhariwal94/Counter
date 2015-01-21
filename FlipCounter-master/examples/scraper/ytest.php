<?php
$content = file_get_contents("http://www.youtube.com/channel/UC9gwWd47a0q042qwEgutjWw");
$total = substr($content, strpos($content, "subscribers")+13,4);
$total = str_replace('<','',$total) ;
$return = array('total_users'=>$total);
echo json_encode($return);
//string substr ( string $string , int $start [, int $length ] )
//strpos(string,find,start) 
exit;
