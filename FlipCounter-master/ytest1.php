<?php
function file_get_contents_curl($url) {
    $ch = curl_init();

    curl_setopt($ch, CURLOPT_AUTOREFERER, TRUE);
    curl_setopt($ch, CURLOPT_HEADER, 0);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, TRUE);       

    $content = curl_exec($ch);
    curl_close($ch);
$total = substr($content, strpos($content, "subscriberCount")+18,4);
$total = str_replace('"','',$total) ;
$total = str_replace('\\','',$total) ; 
$return = array('total_users'=>$total);
echo json_encode($return) ; 
exit ; 
}
 file_get_contents_curl('http://gdata.youtube.com/feeds/api/users/9gwWd47a0q042qwEgutjWw?alt=json');
?>
