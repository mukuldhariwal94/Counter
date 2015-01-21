<?php
$content = file_get_contents("http://instagram.com/revelsmit/");
$total = substr($content, strpos($content,"followed_by")+13,4);
$total = str_replace(',','',$total);
$return = array('total_users'=>$total);
echo json_encode($return);
exit;
